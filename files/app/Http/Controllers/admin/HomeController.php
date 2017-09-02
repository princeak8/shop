<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Http\Request;

use App\Post;

class HomeController extends Controller
{
    
	public function index()
	{

		return view('admin/index');

	}

	

}
