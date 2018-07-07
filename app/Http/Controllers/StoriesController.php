<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoriesController extends Controller
{
    public function __construct()
    {
    	$this->middleware('auth:admin');
    }

    public function index()
    {
    	return view('admin-layouts.my-stories');
    }
}
