<?php
declare(strict_types=1);

namespace App\Service;

use App\DTO\ProjectData;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;

class ProjectDataConverter
{
	/**
	 * @var array
	 */
	private $projectData;
	/**
	 * @var ScaleConverter
	 */
	private $scaleConverter;
	/**
	 * @var DenormalizerInterface
	 */
	private $denormalizer;
	
	public function __construct(ScaleConverter $scaleConverter,DenormalizerInterface $denormalizer,array $projectData)
	{
		$this->projectData = $projectData;
		$this->scaleConverter = $scaleConverter;
		$this->denormalizer = $denormalizer;
	}
	
	public function convert()
	{
		$this->projectData['scale']= $this->scaleConverter->convert($this->projectData['scale']);
		return $this->denormalizer->denormalize($this->projectData, ProjectData::class);
	}
}