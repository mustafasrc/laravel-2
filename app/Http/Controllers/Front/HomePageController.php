<?php

namespace App\Http\Controllers\Front;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\ProductCategories;
use App\Models\Product;
use App\Models\Corparatepages;
use App\Models\Servicespage;
use App\Models\Slider;
use App\Models\İnformation;
use App\Models\Albumcategories;
use App\Models\Photos;
use App\Models\Config;

class HomePageController extends Controller
{


    public function __construct()
    {
        $data['servicepages'] = Servicespage::get();
        $data['corparatepages'] = Corparatepages::get();
        $data['productcategories'] = ProductCategories::where('status' ,1)->get();
        $data['albums'] = Albumcategories::get();
        $information = İnformation::first();
        $config = Config::first();
        view()->share($data);
        view()->share( ['information' => $information , 'config' => $config]);
    }

    public function homepage () {
        $data['sliders'] = Slider::get();
        $data['products'] = Product::where('stock', '>', '0')->paginate(8);
        return view('front.homepage' , $data);
    }

    public function category ($slug) {
        $category = ProductCategories::where('slug' , $slug)->first();
        $data['products'] = Product::where('categories' , $category->id)->get();
        return view('front.category' , $data, ['category' => $category]);
    }
    public function corparate ($slug) {
        $page = Corparatepages::where('slug' , $slug)->first();
        return view('front.corparate' , ['page' => $page]);
    }
    public function service ($slug) {
        $page = Servicespage::where('slug' , $slug)->first();
        return view('front.services' , ['page' => $page]);
    }
    public function posts() {
        $data['posts'] = Post::where('status' , 1)->paginate(5);
        return view('front.posts' , $data);
    }
    public function post($slug) {
        $post = Post::where('slug' , $slug)->first();
        return view('front.post' , ['post' => $post]);
    }
    public function product ($slug , $name) {
        $category = ProductCategories::where('slug' ,$slug)->first();
        $product = Product::where('categories' , $category->id)->where('slug' , $name)->first();
        return view('front.product', ['product' => $product]);
    }
    public function albums () {
        $data['photos'] = Photos::get();
        return view('front.album' , $data);
    }
    public function albumcategory($slug) {
        $category = Albumcategories::where('slug' , $slug)->first();
        $data['photos'] = Photos::where('category' , $category->id)->get();
        return view('front.album', $data);
    }
    public function contact() {
        return view('front.contact');
    }
}
