<?php

namespace App\Providers;

use App\models\blog\Blog;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Session,View;
use App\models\website\Setting;
use App\models\website\Banner;
use Cart,Auth;
use App\models\PageContent;
use Laravel\Dusk\DuskServiceProvider;
use App\models\product\Category;
use App\models\language\Language;
use App\models\blog\BlogCategory;
use App\models\product\Product;
use App\models\product\TypeProduct;
use App\models\Services;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        Schema::defaultStringLength(191);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('*', function ($view)
        {
            if(Auth::guard('customer')->user() != null){
                $profile = Auth::guard('customer')->user();
            }else{
                $profile = "";
            }
            $language_current = Session::get('locale');

            $setting = Setting::first();
            $lang = Language::get();
            $pageContent = PageContent::where(['language'=>$language_current,'status'=> 1])->get();
            $categoryhome = Category::with([
                'tagCate'=> function ($query) {
                    $query->with(['tags'])->where('status',1)->orderBy('id','DESC');
                },
                'typeCate' => function ($query) {
                    $query->with(['typetwo'])->where('status',1)->orderBy('id','DESC')->select('cate_id','id', 'name','avatar','slug','cate_slug');
                }
            ])->where('status',1)->orderBy('id','DESC')->get(['id','name','imagehome','avatar','slug','content'])->map(function ($query) {
                $query->setRelation('product', $query->product->where('status', 1)->take(15));
                return $query;
            });
            $all_categories = Category::with([
                'tagCate'=> function ($query) {
                    $query->with(['tags'])->where('status',1)->orderBy('id','DESC');
                },
                'typeCate' => function ($query) {
                    $query->with(['typetwo'])->where('status',1)->orderBy('id','DESC')->select('cate_id','id', 'name','avatar','slug','cate_slug');
                }
            ])->where('status',1)->orderBy('id','DESC')->get(['id','name','imagehome','avatar','slug','content']);
            $all_type_categories = TypeProduct::where('status', 1)->get();
            $banners = Banner::where(['status'=>1])->get(['id','image','link','title','description']);
            $cartcontent = session()->get('cart', []);
            $viewold = session()->get('viewoldpro', []);
            $compare = session()->get('compareProduct', []);
            $blogCate = BlogCategory::with([
                'typeCate' => function ($query){
                    $query->select('id','slug','name','avatar','category_slug');
                }
            ])
            ->where('status',1)
            ->orderBy('id','DESC')
            ->get(['id','name','slug','avatar'])->map(function ($query) {
                $query->setRelation('listBlog', $query->listBlog()->get());
                return $query;
            });
            $homePro = Product::where(['status'=>1,'discountStatus'=>1])
            ->inRandomOrder()
            ->select('id','category','name','discount','price','images','slug','cate_slug','type_slug','description','status_variant')
            ->limit(15)->get();
            $services = Services::where('status', 1)->get();
            $latest_blogs = Blog::where('status', 1)->inRandomOrder()->limit(6)->get();
            $footer_blogs = Blog::where('status', 1)->inRandomOrder()->limit(4)->get();
            $view->with([
                'setting' => $setting,
                'pageContent' => $pageContent,
                'lang' => $lang,
                'banners'=>$banners,
                'profile' =>$profile,
                'categoryhome'=> $categoryhome,
                'cartcontent'=>$cartcontent,
                'viewold'=>$viewold,
                'compare'=>$compare,
                'blogCate'=>$blogCate,
                'all_categories'=>$all_categories,
                'all_type_categories'=>$all_type_categories,
                'homePro'=>$homePro,
                'services'=>$services,
                'latest_blogs'=>$latest_blogs,
                'footer_blogs'=>$footer_blogs
                ]);
        });
    }
}
