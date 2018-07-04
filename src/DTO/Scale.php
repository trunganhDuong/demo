<?php

declare(strict_types=1);

namespace App\DTO;

class Scale
{
	/**
	 * @var string
	 */
	private $totalArea;
	
	/**
	 * @var string
	 */
	private $publicArea;
	
	/**
	 * @var string
	 */
	private $educationArea;
	
	/**
	 * @var string
	 */
	private $residenceArea;
	
	/**
	 * @var string
	 */
	private $transportationArea;
	
	/**
	 * @var string
	 */
	private $density;
	
	/**
	 * @var string
	 */
	private $lakeArea;
	
	/**
	 * @var string
	 */
	private $apartments;
	
	/**
	 * @return string
	 */
	public function getPublicArea(): string
	{
		return $this->publicArea;
	}
	
	/**
	 * @param string $publicArea
	 * @return Scale
	 */
	public function setPublicArea(string $publicArea): self
	{
		$this->publicArea = $publicArea;
		
		return $this;
	}
	
	/**
	 * @return string
	 */
	public function getEducationArea(): string
	{
		return $this->educationArea;
	}
	
	/**
	 * @param string $educationArea
	 * @return Scale
	 */
	public function setEducationArea(string $educationArea): self
	{
		$this->educationArea = $educationArea;
		
		return $this;
	}
	
	/**
	 * @return string
	 */
	public function getApartments(): string
	{
		return $this->apartments;
	}
	
	/**
	 * @param string $apartments
	 * @return Scale
	 */
	public function setApartments(string $apartments): self
	{
		$this->apartments = $apartments;
		
		return $this;
	}
	
	/**
	 * @return string
	 */
	public function getLakeArea(): string
	{
		return $this->lakeArea;
	}
	
	/**
	 * @param string $lakeArea
	 * @return Scale
	 */
	public function setLakeArea(string $lakeArea): self
	{
		$this->lakeArea = $lakeArea;
		
		return $this;
	}
	
	/**
	 * @return string
	 */
	public function getDensity(): string
	{
		return $this->density;
	}
	
	/**
	 * @param string $density
	 * @return Scale
	 */
	public function setDensity(string $density): self
	{
		$this->density = $density;
		
		return $this;
	}
	
	/**
	 * @return string
	 */
	public function getTransportationArea(): string
	{
		return $this->transportationArea;
	}
	
	/**
	 * @param string $transportationArea
	 * @return Scale
	 */
	public function setTransportationArea(string $transportationArea): self
	{
		$this->transportationArea = $transportationArea;
		
		return $this;
	}
	
	/**
	 * @return string
	 */
	public function getResidenceArea(): string
	{
		return $this->residenceArea;
	}
	
	/**
	 * @param string $residenceArea
	 * @return Scale
	 */
	public function setResidenceArea(string $residenceArea): self
	{
		$this->residenceArea = $residenceArea;
		
		return $this;
	}
	
	/**
	 * @return string
	 */
	public function getTotalArea(): string
	{
		return $this->totalArea;
	}
	
	/**
	 * @param string $totalArea
	 * @return Scale
	 */
	public function setTotalArea(string $totalArea): self
	{
		$this->totalArea = $totalArea;
		
		return $this;
	}
}