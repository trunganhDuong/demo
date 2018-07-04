<?php

namespace App\Controller;

use App\Service\ContactConverter;
use App\Service\ProjectDataConverter;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
	/**
	 * @var ProjectDataConverter
	 */
	private $projectDataConverter;
	/**
	 * @var ContactConverter
	 */
	private $contactConverter;
	
	public function __construct(ProjectDataConverter $projectDataConverter, ContactConverter $contactConverter)
	{
		$this->projectDataConverter = $projectDataConverter;
		$this->contactConverter = $contactConverter;
	}
	
	public function index()
	{
		$html = $this->renderView('home/home.html.twig');
		return new Response($html);
	}
}