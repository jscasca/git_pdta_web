<?php
//src/Posdta/Entity/Component.php
namespace Posdta\Entity;

use \DateTime;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="component")
 */
class Component
{
	/**
	 * @ORM\Id
	 * @ORM\Column(type="bigint", name="componentId", unique=true)
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	protected $id;
	
	/**
	 * @ORM\ManyToOne(targetEntity="Publication", inversedBy="components")
	 * @ORM\JoinColumn(name="publicationId", referencedColumnName="publicationId")
	 */
	protected $publication;
	 
	/**
	 * @ORM\Column(type="text", name="componentName")
	 */
	protected $name;
	
	/**
	 * @ORM\Column(type="text", name="componentSource")
	 */
	protected $source;
	
	public function getId(){return $this->id;}
	public function getName(){return $this->name;}
	public function getSource(){return $this->source;}
	public function getPublication(){return $this->publication;}
	
	public function setName($string){$this->name = $string;}
	public function setSource($string){$this->source = $string;}
	public function setPublication(Publication $publication){$this->publication = $publication;}
	
	public static function getEntityName(){return get_called_class();}
}
?>
