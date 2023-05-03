<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Listing;

class ListingController extends Controller
{
    // Show all listings
    public function index(){
        // dd(request()->tag);
        return view('listings.index', [
            'heading' => 'Lastest Listings',
            'listings' => Listing::latest()->filter(request(['tag', 'search']))->get()
        ]);
    }

    // Show single  listing
    public function show(Listing $listing){
        return view('listings.show', [
            'listing' => $listing
        ]);
    }
}
