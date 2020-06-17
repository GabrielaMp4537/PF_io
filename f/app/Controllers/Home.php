<?php namespace App\Controllers;

use App\Models\EntradaModel;

class Home extends BaseController
{
	public function index()
	{
                return view('layouts/header') . view('welcome_message') . view('layouts/footer');
	}

	//--------------------------------------------------------------------

}
