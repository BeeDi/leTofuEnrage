<?php 

namespace Entities; 
use Doctrine\Common\Collections\ArrayCollection;

/** @Entity */
class User
{
	public function __construct() {
		$this->comments = new ArrayCollection();
	}

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
	 * @Column(type="boolean")
	 */
	private $isAdmin;
	public function getIsAdmin() {
		return $this->isAdmin;
	}
	public function setIsAdmin($isAdmin) {
		$this->isAdmin = $isAdmin;
	}

	/**
	 * @Column(type="string")
	 */
	private $pseudo;
	public function getPseudo() {
		return $this->pseudo;
	}
	public function setPseudo($pseudo) {
		$this->pseudo = $pseudo;
	}
	/**
	 * @Column(type="string")
	 */
	 private $email;
	 public function getEmail() {
	 	return $this->email;
	 }
	 public function setEmail($email) {
	 	$this->email = $email;
	 }
	/**
	 * @Column(type="string")
	 */
	private $password;
	public function getPassword() {
		return $this->password;
	}
	public function setPassword($password) {
		$this->password = $password;
	}

	/**
	 * @OneToMany(targetEntity="Comment", mappedBy="author")
	 */
	private $comments;
	public function getComments() {
		return $this->comments;
	}
	public function addComment($comment) {
		$this->comments[] = $comment;
	}
}