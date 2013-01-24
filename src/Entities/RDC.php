<?php

namespace Entities; 

/** @Entity */
class RDC
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
	 * @OneToMany(targetEntity="Comment", mappedBy="rdc")
	 * @var Comment
	 */
	private $comment;
	/**
	 * @return Comment
	 */
	public function getComment() {
		return $this->comment;
	}
	/**
	 * @OneToMany(targetEntity="Restaurant", mappedBy="rdc")
	 * @var Restaurant
	 */
	private $restaurant;
	/**
	 * @return Restaurant
	 */
	public function getRestaurant() {
		return $this->restaurant;
	}
	/**
	 * @OneToMany(targetEntity="Dish", mappedBy="rdc")
	 * @var Dish
	 */
	private $dish;
	/**
	 * @return Dish
	 */
	public function getDish() {
		return $this->dish;
	}

}
	