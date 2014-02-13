<?php
//src/Posdta/Entity/UserPicture.php
namespace Posdta\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="login_posdta")
 */
class LoginPosdta
{
	/**
	 * @ORM\Id
	 * @ORM\Column(type="bigint", name="loginPosdtaId", unique=true)
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	protected $id;
	
	/**
	 * @ORM\Column(type="string", name="loginPosdtaEmail", unique=true)
	 */
	protected $email;
	
	/**
	 * @ORM\Column(type="string", name="loginPosdtaPassword")
	 */
	protected $password;
	
	/**
	 * @ORM\OneToOne(targetEntity="User")
	 * @ORM\JoinColumn(name="userId", referencedColumnName="userId")
	 */
	protected $user;
	
	public function getId(){return $this->id;}
	public function getUser(){return $this->user;}
	public function getEmail(){return $this->email;}
	public function getPassword(){return $this->password;}
	
	//public function setUserPicture(UserPicture $userPicture){$this->userPicture = $userPicture;}
	public function setUser(User $user){$this->user = $user;}
	public function setEmail($string){$this->email = $string;}
	public function setPassword($string){$this->password = $string;}
	
	public static function getEntityName(){return get_called_class();}
}
?>
