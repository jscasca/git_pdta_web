<?php
//src/Posdta/Entity/UserPicture.php
namespace Posdta\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="user_picture")
 */
class UserPicture
{
	/**
	 * @ORM\Id
	 * @ORM\Column(name="userPictureId")
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	protected $id;
	
	/**
	 * @ORM\Column(type="string", name="userPictureLink")
	 */
	protected $picture;
	
	/**
	 * @ORM\Column(type="string", name="userPictureThumb")
	 */
	protected $thumb;
	
	public function getId(){return $this->id;}
	public function getPicture(){return $this->picture;}
	public function getThumb(){return $this->thumb;}
	
	public function setPicture($string){$this->picture = $string;}
	public function setThumb($string){$this->thumb = $string;}
	
	public static function getEntityName(){return get_called_class();}
}
?>
