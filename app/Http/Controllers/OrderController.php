<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function initiatePayment(Request $request, $slug)
    {
    	$this->validate($request, [
    		'email' => 'required',
    		'category' => 'is_integer()'
    	]);
    }
}
