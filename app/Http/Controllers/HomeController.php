<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data['categories'] = Category::active()->orderBy('name')->get();
        $data['featured_category_products'] = Category::with(['products'=>function($query){
            return $query->with(['product_images'=>function($query2){
                return $query2->get();
            }])->limit(5)->active();
        }])->active()->first();
        $data['new_arrivals'] = Product::with(['product_images','category'])->orderBy('id','desc')->limit(6)->get();
        $data['featured_products'] = Product::with(['product_images','category'])->where('is_featured',1)->orderBy('id','desc')->limit(6)->get();
//        dd($data['new_arrivals']);
        return view('front.home',$data);
    }
}
