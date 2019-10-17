<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\Category;

class FrontController extends Controller
{
 	public function index(){

 		$first_event = Event::where('active', 1)->orderBy('event_date', 'asc')->first();
 		$second_event = Event::where('active', 1)->orderBy('event_date', 'asc')->skip(1)->take(1)->first();
 		$third_event = Event::where('active', 1)->orderBy('event_date', 'asc')->skip(2)->take(1)->first();
 		$categories = Category::all();

		return view('front.index', compact('first_event', 'second_event', 'third_event', 'categories'));
   	}

   	public function detail($slug)
   	{

   		$event = Event::where('slug', $slug)->first();
   		return view('front.detail', compact('event'));
   	}
}
