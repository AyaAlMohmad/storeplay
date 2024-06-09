<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use App\Models\Social;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class FrontController extends Controller
{

    public function index()
    {

        $lastesProduct = Product::latest()->take(3)->get();
        
        $categories = SubCategory::all();
        $orders = Order::latest()->take(4)->get();
        $orderlastes = Order::latest()->first();
        $resolveProducts = Product::where('resolve', '>', '0')->get();
$headerCategory=Category::all();
        $socials = Social::all();
        return view(
            'frontend.index',
            compact(
                'socials',
                'headerCategory',
                'lastesProduct',
                'categories',
                'orders',
                'orderlastes',
                'resolveProducts'
            )
        );
    }
}
