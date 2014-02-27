<?php
//src/Posdta/Entity/Book.php
namespace Posdta\Entity;

use \DateTime;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="book")
 */
class Book
{
	/**
	 * @ORM\Id
	 * @ORM\Column(type="bigint", name="bookId", unique=true)
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	protected $id;
	
	/**
	 * @ORM\Column(type="string", name="bookTitle", length=100)
	 */
	protected $title;
	 
	/**
	 * @ORM\Column(type="text", name="bookSynopsis")
	 */
	protected $synopsis;
	
	/**
	 * @ORM\OneToMany(targetEntity="Publication", mappedBy="book")
	 */
	protected $publications;
	
	public function __construct() {
		$this->publications = new ArrayCollection();
	}
	
	public function getId(){return $this->id;}
	public function getTitle(){return $this->title;}
	public function getSynopsis(){return $this->synopsis;}
	
	public function setTitle($string){$this->title = $string;}
	public function setSynopsis($string){$this->synopsis = $string;}
	
	public static function getEntityName(){return get_called_class();}
}
?>
