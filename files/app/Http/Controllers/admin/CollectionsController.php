<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class CollectionsController extends Controller
{
    
	public function index()
	{

		return view('admin/collections');

	}

	

}
