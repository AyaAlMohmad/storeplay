<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Category;
use App\Models\Social;
use Illuminate\Http\Request;

class AboutController extends Controller
{
   public function index()
   {
      $abouts=About::all();

      $headerCategory = Category::all();

      $socials = Social::all();
      return view(
         'frontend.about',
         compact('socials', 'headerCategory','abouts')
      );
   }
}
