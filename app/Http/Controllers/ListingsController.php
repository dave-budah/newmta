<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use App\Imports\ListingImport;
use Maatwebsite\Excel\Facades\Excel;

class ListingsController extends Controller
{

    public function index()
    {
        return view('listings.index',
            ['listings' => Listing::latest()->filter(request(['tag', 'search','tyre']))->paginate(4)]);
    }


    public function create()
    {
        return view('listings.create');
    }


    public function store(Request $request)
    {
        $formFields = $request->validate([
            'name' => 'required',
            'tags' => 'sometimes',
            'width' => 'required',
            'radius' => 'required',
            'profile' => 'required',
            'location' => 'required',
            'description' => 'sometimes',
            'price' => 'required',
        ]);
        if($request->hasFile('image')){
            $formFields['image'] = $request->file('image')->store('listings','public');
        }
        $formFields['user_id'] = auth()->id();
        Listing::create($formFields);
        return redirect('/')->with('message', 'Listing added successfully!');
    }

    public function importCsv() {

        return view('import');
    }

    public function importFile(Request $request)
    {
        Excel::import(new ListingImport, $request->file('file'));

        return redirect('/')->with('message', 'Listings imported successfully!');
    }

    public function show(Listing $listing)
    {
        return view('listings.show', ['listing' => $listing]);
    }


    public function edit(Listing $listing)
    {
        return view('listings.edit', ['listing' => $listing]);
    }

    public function update(Request $request, Listing $listing)
    {
        if ($listing->user_id !== auth()->id()) {
            return redirect('/')->with('error', 'You are not authorized to edit this listing!');
        }
        $formFields = $request->validate([
            'name' => 'required',
            'tags' => 'sometimes',
            'width' => 'required',
            'radius' => 'required',
            'profile' => 'required',
            'location' => 'required',
            'description' => 'sometimes',
            'price' => 'required',
        ]);
        if($request->hasFile('image')){
            $formFields['image'] = $request->file('image')->store('listings','public');
        }
        $listing->update($formFields);
        return back()->with('message', 'Listing updated successfully!');
    }

    public function destroy(Listing $listing)
    {
        if ($listing->user_id !== auth()->id()) {
            return redirect('/')->with('error', 'You are not authorized to edit this listing!');
        }
        if (!is_null($listing->image)){
            File::delete( public_path('/listings' . $listing->image));
        }
        $listing->delete();
        return redirect('/')->with('message', 'Listing deleted successfully!');
    }

//    Manage Listings
    public function manage()
    {
        return view('listings.manage',
            ['listings' => Listing::where('user_id', auth()->id())->latest()->paginate(10)]);
    }



}
