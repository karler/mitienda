<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		echo view('plantilla/inicio');
		echo view('plantilla/contenido');
		echo view('plantilla/final');
	}

	//--------------------------------------------------------------------

}
