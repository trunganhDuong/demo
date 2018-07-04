<?php
declare(strict_types=1);

namespace App\Controller;

use App\Service\ProjectDataConverter;
use App\Service\ScaleConverter;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends Controller
{
	/**
	 * @var ScaleConverter
	 */
	private $scaleConverter;
	/**
	 * @var ProjectDataConverter
	 */
	private $projectDataConverter;
	
	public function __construct(ProjectDataConverter$projectDataConverter,ScaleConverter $scaleConverter, ContainerInterface $container)
	{
		$this->scaleConverter = $scaleConverter;
		$this->container = $container;
		$this->projectDataConverter = $projectDataConverter;
	}
	
	/**
	 * @Route("/test")
	 *
	 */
	public function test()
	{
		echo '<pre>';
		print_r($this->projectDataConverter->convert());
		echo '</pre>';
		
		return new Response();
	}
	
}