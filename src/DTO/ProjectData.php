<?php

namespace App\DTO;

class ProjectData
{
	/**
	 * @var string
	 */
	private $projectName;
	
	/**
	 * @var string
	 */
	private $owner;
	
	/**
	 * @var string
	 */
	private $address;
	
	/**
	 * @var Scale
	 */
	private $scale;
	
	/**
	 * @var string
	 */
	private $architectureType;
	
	/**
	 * @var string
	 */
	private $deployExpectation;
	
	/**
	 * @return string
	 */
	public function getProjectName(): string
	{
		return $this->projectName;
	}
	
	/**
	 * @param string $projectName
	 * @return ProjectData
	 */
	public function setProjectName(string $projectName): ProjectData
	{
		$this->projectName = $projectName;
		return $this;
	}
	
	/**
	 * @return string
	 */
	public function getOwner(): string
	{
		return $this->owner;
	}
	
	/**
	 * @param string $owner
	 * @return ProjectData
	 */
	public function setOwner(string $owner): ProjectData
	{
		$this->owner = $owner;
		return $this;
	}
	
	/**
	 * @return string
	 */
	public function getAddress(): string
	{
		return $this->address;
	}
	
	/**
	 * @param string $address
	 * @return ProjectData
	 */
	public function setAddress(string $address): ProjectData
	{
		$this->address = $address;
		return $this;
	}
	
	/**
	 * @return Scale
	 */
	public function getScale(): Scale
	{
		return $this->scale;
	}
	
	/**
	 * @param Scale $scale
	 * @return ProjectData
	 */
	public function setScale(Scale $scale): ProjectData
	{
		$this->scale = $scale;
		return $this;
	}
	
	/**
	 * @return string
	 */
	public function getArchitectureType(): string
	{
		return $this->architectureType;
	}
	
	/**
	 * @param string $architectureType
	 * @return ProjectData
	 */
	public function setArchitectureType(string $architectureType): ProjectData
	{
		$this->architectureType = $architectureType;
		return $this;
	}
	
	/**
	 * @return string
	 */
	public function getDeployExpectation(): string
	{
		return $this->deployExpectation;
	}
	
	/**
	 * @param string $deployExpectation
	 * @return ProjectData
	 */
	public function setDeployExpectation(string $deployExpectation): ProjectData
	{
		$this->deployExpectation = $deployExpectation;
		return $this;
	}
}