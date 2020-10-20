<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		echo view('cabecera');
		echo view('tables');
		echo view('pie');
	}

	//--------------------------------------------------------------------

}
