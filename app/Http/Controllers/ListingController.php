<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListingController extends Controller
{
    public function index(Request $request)
    {

        return view("frontend.pages.listing");
    }

    public function stateListing(Request $request) {
        
        if(strpos($request->path(), '-') !== false) {
            $image = ucwords(implode("-", explode('-', $request->path()))).".jpg";

        }else{
            $image = ucwords($request->path()).".jpg";
        }

        // dd($image);

        return view("frontend.pages.listing", compact('image'));
    }
}
