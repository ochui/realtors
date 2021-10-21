<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListingController extends Controller {
    public function index( Request $request ) {

        if ( strpos( $request->location, '-' ) !== false ) {
            $city = ucwords( implode( ' ', explode( '-', $request->location ) ) );
            $image = str_replace( ' ', '-', $city.'.png' );

        } else {
            $city = ucwords( $request->location );
            $image = $city.'.png';

        }

        // /dd($image);

        return view( 'frontend.pages.listing', compact( 'image', 'city' ) );
    }

    public function stateListing( Request $request ) {

        if ( strpos( $request->path(), '-' ) !== false ) {
            $city = ucwords( implode( ' ', explode( '-', $request->path() ) ) );
            $image = str_replace( ' ', '-', $city.'.png' );

        } else {
            $city = ucwords( $request->path() );
            $image = $city.'.png';

        }

        return view( 'frontend.pages.listing', compact( 'image', 'city' ) );
    }
}
