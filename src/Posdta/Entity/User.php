<?php
//src/Posdta/Entity/User.php
namespace Posdta\Entity;

use \DateTime;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="user")
 */
class User
{
	/**
	 * @ORM\Id
	 * @ORM\Column(type="bigint", name="userId", unique=true)
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	protected $id;
	
	/**
	 * @ORM\Column(type="string", name="userFirstName", length=100)
	 */
	protected $firstName;
	
	/**
	 * @ORM\Column(type="string", name="userLastName")
	 */
	protected $lastName;
	 
	/**
	 * @ORM\Column(type="date", name="userBirthday")
	 */
	protected $birthday;
	
	/**
	 * @ORM\Column(type="integer", name="userGender")
	 */
	protected $gender;
	
	/**
	 * @ORM\Column(type="datetime", name="userRegistration")
	 */
	protected $registrationDate;
	
	/**
	 * @ORM\OneToOne(targetEntity="UserPicture")
	 * @ORM\JoinColumn(name="userPictureId", referencedColumnName="userPictureId")
	 */
	protected $userPicture;
	
	public function getId(){return $this->id;}
	public function getFirstName(){return $this->firstName;}
	public function getLastName(){return $this->lastName;}
	public function getBirthday(){return $this->birthday;}
	public function getGender(){return $this->gender;}
	public function getRegistrationDate(){return $this->registrationDate;}
	public function getUserPicture(){return $this->userPicture;}
	
	public function setFirstName($string){$this->firstName = $string;}
	public function setLastName($string){$this->lastName = $string;}
	public function setBirthday(DateTime $birthday = null){$this->birthday = $birthday ? clone $birthday : null;}
	public function setGender($int){$this->gender = $int;}
	public function setRegistrationDate(DateTime $registrationDate = null){$this->registrationDate = $registrationDate ? clone $registrationDate : null;}
	public function setUserPicture(UserPicture $userPicture){$this->userPicture = $userPicture;}
	/*
	public function __toString() {
		return json_encode([
			"id"=>$this->id,
			"firstName"=>$this->firstName,
			"lastName"=>$this->lastName,
			"birthday"=>$this->birthday,
			"registration"=>$this->registrationDate,
		]);
	}*/
	
	public static function getEntityName(){return get_called_class();}
}
?>
