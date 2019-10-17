<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{

	public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {	
    	$categories = Category::all();
    	return view('admin.categories.index', compact('categories'));
    }

    public function create()
    {
    	return view('admin.categories.create');
    }

    public function store()
    {
    	$this->validate(request(), [
    		'name' => 'required|string'
    	]);


    	Category::create([
    		'name' => request()->name,
    		'slug' => str_slug(request()->name)
    	]);

    	return redirect()->back()->with('msg', 'success');
    }

    public function show($slug)
    {
    	
    }

    public function edit($slug)
    {
    	$category = Category::where('slug', $slug)->first();
    	return view('admin.categories.edit', compact('category'));
    }

    public function update($slug)
    {
        dd(request());
    	$this->validate(request(), [
    		'name' => 'required|string'
    	]);


    	$category = Category::where('slug', $slug)->first();
		$category->name = request()->name;
		$category->slug = str_slug(request()->name);
		$category->save();
  
    	return redirect()->route('category.edit', ['slug' => $category->slug]);
    }

    public function destroy($slug)
    {
        $category = Category::where('slug', $slug)->first();
        $category->delete();
        return redirect()->back()->with('msg', 'success');
    }
}
