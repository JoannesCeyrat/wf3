<?php

namespace Controller;

use \W\Controller\Controller;
use Model\JsonsModel;

class HomeController extends Controller
{

	/*
	* revoie le json 
	*/
	public function getJson()
	{
		$mModel = new JsonsModel;
		$data = $mModel->findJson(1);
		//var_dump($data);

		$this->showJson( json_decode($data["json"]) ); 
	}


	public function home()
	{
		$this->show('comint/home');
	}
}
