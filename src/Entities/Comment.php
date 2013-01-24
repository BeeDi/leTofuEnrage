<?php

namespace Entities; 

/** @Entity */
class Comment
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
	 * @Column(type="date")
	 * @var \DateTime
	 */
	 private $date;
	 public function getDate() {
	 	return $this->date;
	 }
	 public function setDate($date) {
	 	$this->date = $date;
	 }

	 /**
	  * @ManyToOne(targetEntity="User", inversedBy="comments")
	  */
	 private $author;
	 /**
	  * @return Author
	  */
	 public function getAuthor() {
	 	return $this->author;
	 }
	 public function setAuthor($author) {
	 	$this->author = $author;
	 }
	 /**
	  * @ManyToOne(targetEntity="RDC", inversedBy="comment")
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