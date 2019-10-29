<?php

namespace App\Http\Controllers;

use App\Category;
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
                return $query2->limit(1)->get();
            }])->limit(2)->active();
        }])->active()->first();
        return view('front.home',$data);
    }
}
