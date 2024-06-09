<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Favorite;
use App\Models\Product;
use App\Models\Social;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function index($id)
    {
        $categories = SubCategory::where('category_id', $id)->get();

        $allProducts = collect();

        foreach ($categories as $category) {
            $products = Product::where('sub_category_id', $category->id)->get();
            $allProducts = $allProducts->merge($products);
        }
        $headerCategory = Category::all();
        $socials = Social::all();
        return view(
            'frontend.products',
            compact(
                'allProducts',
                'categories',
                'socials',
                'headerCategory'
            )
        );
    }

    public function show($id)
    {
        $product = Product::where('id', $id)->first();
        $categoryProduct = Product::where('sub_category_id', $product->sub_category_id)->take(4)->get();
        $headerCategory = Category::all();
        $socials = Social::all();
        return view(
            'frontend.productItem',
            compact(
                'socials',
                'product',
                'headerCategory',
                'categoryProduct'
            )
        );
    }
    public function categoryproduct($id)
    {
        $category = SubCategory::where('id', $id)->first();
        $products = Product::where('sub_category_id', $id)->get();


        $categories = SubCategory::where('category_id', $category->category_id)->get();

        $headerCategory = Category::all();
        $socials = Social::all();
        return view(
            'frontend.categoryproduct',

            compact(
                'socials',
                'headerCategory',
                'category',
                'products',
                'categories'
            )
        );
    }
    public function destroy($id)
    {
        $delete = Favorite::where('id', $id)->delete(); 
        
        return redirect()->back();
    }
}
