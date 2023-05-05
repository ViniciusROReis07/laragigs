<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Session;

class ListingController extends Controller
{
    // Show all listings
    public function index(){
        // dd(request()->tag);
        return view('listings.index', [
            'heading' => 'Lastest Listings',
            'listings' => Listing::latest()->filter(request(['tag', 'search']))->simplePaginate(6)
        ]);
    }

    // Show single  listing
    public function show(Listing $listing){
        return view('listings.show', [
            'listing' => $listing
        ]);
    }

    // Show create Form
    public function create()
    {
        return view('listings.create');
    }

    // Store listing data

    public function store(Request $request)
    {
        $formFields = $request->validate([
            'title' => 'required',
            'company' => ['required', Rule::unique('listings', 'company')],
            'location' => 'required',
            'website' => 'required',
            'email' => ['required', 'email'],
            'tags' => 'required',
            'description' => 'required'
        ]);

        if($request->has('logo')){
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }   

        Listing::create($formFields);
        
        return redirect('/')->with('message', 'Listing created successfully!');
    }
}
