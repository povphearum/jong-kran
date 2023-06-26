<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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
    public function AddContinent(){
        return view('admin.content.other.addcontinent');
    }
    public function AddCounty(){
        return view('admin.content.other.addcounty');
    }
    public function AddEvents(){
        return view('admin.content.other.addevens');
    }

    public function StoreContinent(){

    }
    public function StoreCounty(){

    }
    public function StoreEvents(){

    }
}
