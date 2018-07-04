<?php
declare(strict_types=1);

namespace App\Service;

use App\DTO\Scale;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;

class ScaleConverter
{
	/**
	 * @var DenormalizerInterface
	 */
	private $denormalizer;
	
	public function __construct(DenormalizerInterface $denormalizer )
	{
		$this->denormalizer = $denormalizer;
	}
	
	public function convert(array $scaleData): Scale
	{
		return $this->denormalizer->denormalize($scaleData, Scale::class);
		
	}
}