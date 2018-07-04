<?php
declare(strict_types=1);

namespace App\Service;

use App\DTO\Contact;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;

class ContactConverter
{
	/**
	 * @var DenormalizerInterface
	 */
	private $denormalizer;
	/**
	 * @var array
	 */
	private $contactData;
	
	public function __construct(DenormalizerInterface $denormalizer, array $contactData)
	{
		$this->denormalizer = $denormalizer;
		$this->contactData = $contactData;
	}
	
	public function convert()
	{
		return $this->denormalizer->denormalize($this->contactData, Contact::class);
	}
}