<?php
declare(strict_types=1);

namespace App\DTO;

class Contact
{
	/**
	 * @var string
	 */
	private $hotline;
	
	/**
	 * @var string
	 */
	private $telephone;
	
	/**
	 * @var string
	 */
	private $name;
	
	/**
	 * @var string
	 */
	private $address;
	
	/**
	 * @var string
	 */
	private $mail;
	
	/**
	 * @var string
	 */
	private $facebook;
	
	/**
	 * @var string
	 */
	private $youtube;
	
	/**
	 * @var string
	 */
	private $instagram;
	
	/**
	 * @return string
	 */
	public function getHotline(): string
	{
		return $this->hotline;
	}
	
	/**
	 * @param string $hotline
	 * @return Contact
	 */
	public function setHotline(string $hotline): Contact
	{
		$this->hotline = $hotline;
		return $this;
	}
	
	/**
	 * @return string
	 */
	public function getTelephone(): string
	{
		return $this->telephone;
	}
	
	/**
	 * @param string $telephone
	 * @return Contact
	 */
	public function setTelephone(string $telephone): Contact
	{
		$this->telephone = $telephone;
		return $this;
	}
	
	/**
	 * @return string
	 */
	public function getName(): string
	{
		return $this->name;
	}
	
	/**
	 * @param string $name
	 * @return Contact
	 */
	public function setName(string $name): Contact
	{
		$this->name = $name;
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
	 * @return Contact
	 */
	public function setAddress(string $address): Contact
	{
		$this->address = $address;
		return $this;
	}
	
	/**
	 * @return string
	 */
	public function getMail(): string
	{
		return $this->mail;
	}
	
	/**
	 * @param string $mail
	 * @return Contact
	 */
	public function setMail(string $mail): Contact
	{
		$this->mail = $mail;
		return $this;
	}
	
	/**
	 * @return string
	 */
	public function getFacebook(): string
	{
		return $this->facebook;
	}
	
	/**
	 * @param string $facebook
	 * @return Contact
	 */
	public function setFacebook(string $facebook): Contact
	{
		$this->facebook = $facebook;
		return $this;
	}
	
	/**
	 * @return string
	 */
	public function getYoutube(): string
	{
		return $this->youtube;
	}
	
	/**
	 * @param string $youtube
	 * @return Contact
	 */
	public function setYoutube(string $youtube): Contact
	{
		$this->youtube = $youtube;
		return $this;
	}
	
	/**
	 * @return string
	 */
	public function getInstagram(): string
	{
		return $this->instagram;
	}
	
	/**
	 * @param string $instagram
	 * @return Contact
	 */
	public function setInstagram(string $instagram): Contact
	{
		$this->instagram = $instagram;
		return $this;
	}
}
