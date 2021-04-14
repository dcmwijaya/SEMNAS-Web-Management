<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('main/home');
	}

	public function about()
	{
		return view('main/about');
	}
	
	public function registry()
	{
		return view('main/registry');
	}

	public function login()
	{
		return view('main/login');
	}

	public function admin()
	{
		return view('main/admin');
	}
}
