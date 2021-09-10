<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Travel;
class HomeController extends Controller
{
    public function index(){
           
        $allTravels=Travel::all();
        $prezzoViaggio = Travel::where('price', '<', 1000)->get();
        $countries= Travel::where('country','like','A%')->get();
        return view ('home',compact('allTravels', 'prezzoViaggio','countries'));
     
    } 
}
