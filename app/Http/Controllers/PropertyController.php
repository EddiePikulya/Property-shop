<?php

namespace App\Http\Controllers;
use App\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    public function index(){
        $properties = Property::latest()->get();
        return view('property.index', compact('properties'));
    }

    public function show(Property $property) {
        $hot = Property::where('id', '<', '5')->get();
        return view('property.show', compact('property', 'hot'));
    }

    public function buysalerent(){
        $properties = Property::latest()->paginate(12);
        return view('property.buysalerent', compact('properties'));
    }

    public function about(){
        return view('property.about');
    }

    public function contact(){
        return view('contact.index');
    }

    public function filter(){
        if(isset(request(['text'])['text'])) {
            if(request(['price'])['price'] == "$0 - $200,000") {
                $properties = Property::where([
                    ['property', request(['property'])],
                    ['price', '<=', '200000'],
                    ['name', 'like', '%'.request(['text'])['text'].'%']
                ])->paginate(12);
            }
            if(request(['price'])['price'] == "$200,000 - $400,000") {
                $properties = Property::where([
                    ['property', request(['property'])],
                    ['price', '>', '200000'],
                    ['price', '<', '400000'],
                    ['name', 'like', '%'.request(['text'])['text'].'%']
                ])->paginate(12);
            }
            if(request(['price'])['price'] == "$400,000 - above") {
                $properties = Property::where([
                    ['property', request(['property'])],
                    ['price', '>', '400000'],
                    ['name', 'like', '%'.request(['text'])['text'].'%']
                ])->paginate(12);
            }
            return view('property.buysalerent', compact('properties'));
        } else {
            if(request(['price'])['price'] == "$0 - $200,000") {
                $properties = Property::where([
                    ['property', request(['property'])],
                    ['price', '<=', '200000']
                ])->paginate(12);
            }
            if(request(['price'])['price'] == "$200,000 - $400,000") {
                $properties = Property::where([
                    ['property', request(['property'])],
                    ['price', '>', '200000'],
                    ['price', '<', '400000']
                ])->paginate(12);
            }
            if(request(['price'])['price'] == "$400,000 - above") {
                $properties = Property::where([
                    ['property', request(['property'])],
                    ['price', '>', '400000']
                ])->paginate(12);
            }

            return view('property.buysalerent', compact('properties'));
        }

    }
}
