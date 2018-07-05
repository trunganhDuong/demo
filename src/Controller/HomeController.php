<?php

namespace App\Controller;

use App\Service\ContactConverter;
use App\Service\ProjectDataConverter;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{

	
	public function __construct()
	{

	}
	
	public function index()
	{
		$html = $this->renderView('homepage/home.html.twig');
		return new Response($html);
	}
}