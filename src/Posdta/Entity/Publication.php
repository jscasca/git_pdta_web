<?php
//src/Posdta/Entity/Publication.php
namespace Posdta\Entity;

use \DateTime;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="publication")
 */
class Publication
{
	/**
	 * @ORM\Id
	 * @ORM\Column(type="bigint", name="publicationId", unique=true)
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	protected $id;
	
	/**
	 * @ORM\ManyToOne(targetEntity="Book", inversedBy="publications")
	 * @ORM\JoinColumn(name="bookId", referencedColumnName="bookId")
	 */
	protected $book;
	 
	/**
	 * @ORM\Column(type="text", name="publicationContent")
	 */
	protected $contents;
	
	/**
	 * @ORM\Column(type="text", name="publicationLocation")
	 */
	protected $location;
	
	/**
	 * @ORM\OneToMany(targetEntity="Component", mappedBy="publication")
	 */
	protected $components;
	
	public function __construct() {
		$this->components = new ArrayCollection();
	}
	
	public function getId(){return $this->id;}
	public function getContents(){return $this->contents;}
	public function getBook(){return $this->book;}
	public function getComponents(){return $this->components;}
	public function getLocation(){return $this->location;}
	
	public function setContents($string){$this->contents = $string;}
	public function setBook(Book $book){$this->book = $book;}
	public function setLocation($string){$this->location = $string;}
	
	public static function getEntityName(){return get_called_class();}
}
?>
