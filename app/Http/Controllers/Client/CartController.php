<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\product\Product;
use Cart,Auth,Redirect,DB;
use App\models\Bill\BillDetail;
use App\models\Bill\Bill;
use Mail;
use App\Mail\DemoMail;
use App\models\website\Setting;

class CartController extends Controller
{
    public function checkout(){
            $data['cart'] = session()->get('cart', []);
            $data['profile'] = Auth::guard('customer')->user();
            return view('cart.checkout',$data);

    }
    public function postBill(Request $request){
        $profile = Auth::guard('customer')->user();
        $cart = session()->get('cart', []);
        $code_bill = rand();
        DB::beginTransaction();
			try {
				$query = new Bill();
				$query->code_bill = $code_bill;
				$query->code_customer = $profile ? $profile->id : 0;
				$query->total_money = $request->total_money;
				$query->statu = 0;
				$query->note = $request->note;
                $query->cus_name = $request->billingName;
                $query->cus_phone = $request->billingPhone;
                $query->cus_email= $request->billingEmail;
                $query->cus_address= $request->billingAddress;
                $query->transport_price = $request->shippingMethod ? $request->shippingMethod : 0;
				$query->save();


                foreach($cart as $key => $item){
                    $billdetail = new BillDetail();
                    $billdetail->code_bill = $code_bill;
                    $billdetail->code_product = $item['id'];
                    $billdetail->name =$item['name'];
                    if($item['discount'] > 0){
                        $billdetail->price = $item['price'] - $item['price'] * ($item['discount'] / 100);
                    }else{
                        $billdetail->price = $item['price'];
                    }
                    $billdetail->qty = $item['quantity'];
                    $billdetail->images = $item['image'];
                    $billdetail->save();

                    $product = Product::find($item['id']);
                    if($product->qty > $billdetail->qty){
                        $product->qty = $product->qty - $billdetail->qty;
                    }else{
                        $product->qty = 0;
                    }
                    $product->qty_sale = $product->qty_sale + $billdetail->qty;
                    $product->save();
                }
				DB::commit();
                $data = ['cus' => $query,'bill'=>$cart];
                $setting = Setting::first();
                // Mail::to($setting->email)->send(new DemoMail($data));
                $request->session()->forget('cart');
             return view('cart.orderSuccess');
			} catch (\Throwable $e) {
			DB::rollBack();
			throw $e;
                return back()->with('error','Gửi đơn hàng thất bại');
			}
    }
    public function listCart(){
        $data['cart'] = session()->get('cart', []);
        return view('cart.list',$data);
    }
    public function addToCart(Request $request)
    {
        $product = Product::findOrFail($request->product_id);

        $cart = session()->get('cart', []);

        if(isset($cart[$request->product_id])) {
            $cart[$request->product_id]['quantity'] = $cart[$request->product_id]['quantity'] + $request->quantity;
        } else {
            $cart[$request->product_id] = [
                "id" => $request->product_id,
                "name" => $product->name,
                "quantity" => $request->quantity,
                "price" => $request->price == 0 ? $product->price : $request->price,
                "discount" => $product->discount,
                "cate_slug" => $product->cate_slug,
                "type_slug" => $product->type_slug,
                "slug" => $product->slug,
                "image" => json_decode($product->images)[0]
            ];
        }
        session()->put('cart', $cart);
        $data['cart'] = session()->get('cart',[]);
        $data['product_add'] = $product;
        $view = view('cart.home-cart', $data)->render();
        $view2 = view('cart.count-cart', $data)->render();
        $view3 = view('cart.alert-add-to-card', $data)->render();
        return response()->json([
            'html' => $view,
            'html2' => $view2,
            'html3' => $view3,
        ]);
    }
    public function update(Request $request)
    {
        if($request->id && $request->quantity){
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            return response()->json($cart);
        }

    }
    public function remove(Request $request)
    {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            $data['product_remove'] = Product::findOrFail($request->id);
            $data['cart'] = session()->get('cart',[]);
            $view = view('cart.home-cart', $data)->render();
            $view2 = view('cart.count-cart', $data)->render();
            $view3 = view('cart.list-cart', $data)->render();
            $view4 = view('cart.alert-add-to-card', $data)->render();
            return response()->json([
                'html' => $view,
                'html2' => $view2,
                'html3' => $view3,
                'html4' => $view4,
            ]);
        }
    }
    public function orderSuccess()
    {
        return view('cart.orderSuccess');
    }
}
