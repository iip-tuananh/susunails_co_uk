<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\models\product\Category;
use App\models\product\Product;
use App\models\blog\Blog;
use Session;
use App\models\website\Partner;
use App\models\blog\BlogCategory;
use App\models\BannerAds;
use App\models\website\Video;
use App\models\website\Founder;
use App\models\website\Prize;
use App\models\website\AlbumAffter;
use App\models\ReviewCus;
use App\models\PageContent;
use App\models\product\TypeProduct;

class HomeController extends Controller
{
    public function home()
    {
        $data['hot_news'] = Blog::where([
            ['status','=',1]
        ])->orderBy('id','DESC')->limit(12)->get(['id','title','slug','created_at','image','description']);
        // $data['BannerAds'] = BannerAds::where(['status'=>1,'status_show'=>'banner_ads'])->first();
        $data['about_us'] = PageContent::where(['status'=>1,'language'=>'vi', 'slug'=>'gioi-thieu', 'type'=>'ve-chung-toi'])->first();
        // $data['BannerSlogan'] = BannerAds::where(['status'=>1,'status_show'=>'banner_slogan'])->get();
        $data['cus_reviews'] = ReviewCus::where('status',1)->get();
        $data['typeProducts'] = TypeProduct::where('status',1)->get();
        $data['video'] = Video::where('status',1)->limit(6)->get();
        $data['prizes'] = Prize::where('status',1)->inRandomOrder()->limit(12)->get();
        $data['newHomePro'] = Product::where(['status'=>1])
            ->orderBy('id', 'desc')
            ->select('id','category','name','discount','price','images','slug','cate_slug','type_slug','description','status_variant')
            ->limit(15)->get();

        return view('home',$data);
    }
}
