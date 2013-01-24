<?php

namespace Entities; 

/** @Entity */
class Restaurant
{
	/**
	 * @Id 
	 * @GeneratedValue
	 * @Column(type="integer")
	 */
	private $id;
	public function getId() {
		return $this->id;
	}
	public function setId($id) {
		$this->id = $id;
	}

	/**
	 * @Column(type="string")
	 */
	private $name;
	public function getName() {
		return $this->name;
	}
	public function setName($name) {
		$this->name = $name;
	}
	/**
	 * @Column(type="string")
	 */
	 private $address;
	 public function getAddress() {
	 	return $this->address;
	 }
	 public function setAddress($address) {
	 	$this->address = $address;
	 }

	/**
	 * @Column(type="text")
	 */
	private $description;
	public function getDescription() {
		return $this->description;
	}
	public function setDescription($description) {
		$this->description = $description;
	}
	/**
	  * @ManyToOne(targetEntity="RDC", inversedBy="restaurant")
	  * @var RDC
	  */
	 private $rdc;
	 /**
	  * @return RDC;
	  */
	 public function getRDC() {
	 	return $this->$rdc;
	 }
}