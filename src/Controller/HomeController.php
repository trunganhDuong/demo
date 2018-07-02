<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
	public function index()
	{
		$html = $this->renderView('home/home.html.twig');
		return new Response($html);
	}
}