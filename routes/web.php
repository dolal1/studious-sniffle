<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Models\Listings;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/hello', function() {
    return response('<h1>Hello World</h1>', 200)
        ->header('Content-Type', 'text/html')
        ->header('foo', 'bar');
});

Route::get('/posts/{id}', function($id){
    return response('Post ' . $id);
})->where('id', '[1-9]+');
// constraints on the id parameter to make it only accept positive numbers

Route::get('/search', function(Request $request) {
    return $request->name . ' from ' . $request->city;
});
*/

# All Listing
Route::get('/', function () {
    return view('listings', [
        'heading' => 'Latest Listing',
        'listings' => Listings::all()
    ]);
});

# Single listing by ID
## Old School
// Route::get('/listings/{id}', function ($id) {
//     $listing = Listings::find($id);

//     if($listing){
//         return view('listing', [
//             'listing' => $listing
//         ]);
//     } else {
//         abort(404);
//     }
// });

## New School. Route Model Binding
Route::get('/listing/{listing}', function(Listings $listing){
    return view('listing', [
        'listing' => $listing
    ]);
});