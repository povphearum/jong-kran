<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Continent;
use App\Models\Country;
use App\Models\Event;
use Illuminate\Http\Request;

class AdminController extends Controller
{
 public function Continent(){
     return view('admin.content.other.continent');
 }
    public function Country(){
        return view('admin.content.other.country');
    }
    public function Events(){
        return view('admin.content.other.event');
    }

    public function AddContinent(Request $request){
        return view('admin.content.other.addcontinent');
    }
    public function AddCounty(Request $request){
        return view('admin.content.other.addcounty');
    }
    public function AddEvents(Request $request){
        return view('admin.content.other.addevens');
    }

    public function StoreContinent(Request $request){
        $request->validate([
            'name'=>'required|unique:continents',
        ]);

        Continent::create([
            'name' => $request->name,


        ]);
        return redirect()->route('continent')->with('message','Continent Added Successfully!');

    }
    public function StoreCounty(Request $request){
        $request->validate([
            'name'=>'required|unique:countries',
        ]);

        Country::create([
            'name' => $request->name,


        ]);
        return redirect()->route('country')->with('message','Country Added Successfully!');
    }
    public function StoreEvents(Request $request){
        $request->validate([
            'name'=>'required|unique:events',
        ]);

        Event::create([
            'name' => $request->name,


        ]);
        return redirect()->route('events')->with('message','Even Added Successfully!');


    }
}
