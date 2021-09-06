<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data = ['title_page' => 'Home'];
		return view('layouts/main', $data);
	}
}
