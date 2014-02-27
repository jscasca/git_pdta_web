<?php
//src/Posdta/Entity/Author.php
namespace Posdta\Entity;

use \DateTime;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="author")
 */
class Author
{
	/**
	 * @ORM\Id
	 * @ORM\Column(type="bigint", name="authorId", unique=true)
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	protected $id;
	
	/**
	 * @ORM\Column(type="string", name="authorName", length=100)
	 */
	protected $name;
	 
	/**
	 * @ORM\Column(type="date", name="authorBirthday")
	 */
	protected $birthday;
	
	public function getId(){return $this->id;}
	public function getName(){return $this->name;}
	public function getBirthday(){return $this->birthday;}
	
	public function setName($string){$this->name = $string;}
	public function setBirthday(DateTime $birthday = null){$this->birthday = $birthday ? clone $birthday : null;}
	
	public static function getEntityName(){return get_called_class();}
}
?>
