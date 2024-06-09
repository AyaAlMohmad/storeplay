<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Service;
use App\Models\Social;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
   public function index()  {
$services=Service::all();
$headerCategory=Category::all();

    $socials=Social::all();
    return view('frontend.services',
    compact('socials',
    'services','headerCategory')
);
   }
   public function show($id)  {
      $service=Service::find($id);
      $headerCategory=Category::all();
      
          $socials=Social::all();
          return view('frontend.serviceItem',
          compact('socials',
          'service','headerCategory')
      );
         }
}
