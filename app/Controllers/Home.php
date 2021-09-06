<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data = ['title_page' => 'Home', 'page_content' => 'pages/home'];
		return view('layouts/main', $data);
	}
}
