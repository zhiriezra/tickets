<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Category;
use App\Event;
use Image;

class EventController extends Controller
{

	public function __construct()
	{
	    $this->middleware('auth:admin');
	}

	public function activeEvents()
	{
		$events = Event::where('active',  1)->get();

		return view('admin.events.index', compact('events'));
	}

	public function inActiveEvents()
	{
		$events = Event::where('active',  0)->get();

		return view('admin.events.index', compact('events'));
	}

	public function create()
	{
		$eventOwners = User::all();
		$eventCategories = Category::all();
		return view('admin.events.create', compact('eventOwners', 'eventCategories'));
	}

	public function store()
	{
		$this->validate(request(), [
			'category' => 'required|integer',
			'name' => 'required|string',
			'price_regular' => 'required',
			'price_vip' => 'required',
			'price_vvip' => 'required',
			'eventOwner' => 'required|integer',
			'venue' => 'required|string|min:10',
			'description' => 'required|string|min:10',
			'event_date' => 'required'

		]);

		$event = Event::create([
			'category_id' => request()->category,
			'name' => request()->name,
			'slug' => str_slug(request()->name),
			'price_regular' => request()->price_regular,
			'price_vip' => request()->price_vip,
			'price_vvip' => request()->price_vvip,
			'user_id' => request()->eventOwner,
			'venue' => request()->venue,
			'description' => request()->description,
			'cover_image' => 'default.jpg',
			'event_date' => request()->event_date
		]);

		$event = Event::find($event->id);

		if (request()->hasFile('cover_image')) {
            $cover_image = request()->cover_image;
            $filename = time(). '.' .$cover_image->getClientOriginalExtension();
            Image::make($cover_image)->resize(1191, 670)->save(public_path('/uploads/events/' . $filename));

            $event->cover_image = $filename;
		}

		$event->save();

		return redirect()->back();
	}

	public function show()
	{
		# code...
	}

	public function edit($slug)
	{
		$event = Event::where('slug', $slug)->first();
		$eventCategories = Category::all();
		$eventOwners = User::all();
    	return view('admin.events.edit', compact('event','eventCategories', 'eventOwners'));
	}

	public function update($slug)
	{
		$this->validate(request(), [
			'category' => 'required|integer',
			'name' => 'required|string',
			'price_regular' => 'required',
			'price_vip' => 'required',
			'price_vvip' => 'required',
			'eventOwner' => 'required|integer',
			'venue' => 'required|string|min:10',
			'description' => 'required|string|min:10',
			'event_date' => 'required'

		]);

		$event = Event::where('slug', $slug)->first();

		if (request()->hasFile('cover_image')) {
            $cover_image = request()->cover_image;
            $filename = time(). '.' .$cover_image->getClientOriginalExtension();
            Image::make($cover_image)->resize(500, 500)->save(public_path('/uploads/events/' . $filename));
            $event->cover_image = $filename;
		}

		$event->save();

		return redirect()->back();
	}
}
