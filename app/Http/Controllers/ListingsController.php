<?php

namespace App\Http\Controllers;

use App\Models\Listings;
use Illuminate\Http\Request;

class ListingsController extends Controller
{
    // Show all listings
    public function index() {
        return view('listings', [
            'listings' => Listings::all()
        ]);
    }

    // Show single listing
    public function show(Listings $listing){
        return view('listing', [
            'listing' => $listing
        ]);
    }

}
