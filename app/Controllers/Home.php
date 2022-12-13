<?php

namespace App\Controllers;

// use CodeIgniter\Controller;

class Home extends BaseController
{
	public function index()
	{
		$data['title'] = 'Home!';
		return view('welcome_message', $data);
	}
}
