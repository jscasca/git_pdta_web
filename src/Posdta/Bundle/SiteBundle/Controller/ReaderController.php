<?php
// src/Posdta/Bundle/SiteBundle/Controller/ReaderController.php
namespace Posdta\Bundle\SiteBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Posdta\Entity\User;
use Posdta\Entity\UserPicture;
use Posdta\Entity\LoginPosdta;
use \DateTime;
use Symfony\Component\HttpFoundation\Session\Session;

class ReaderController extends Controller {
	
	public function indexAction() {
		return $this->render(
			'PosdtaSiteBundle:Reader:index.html.twig',
			array(
				"book"=>array(
					"bookId"=>"003",
					"getComponents"=>array("component1.xhtml","component2.xhtml","component3.xhtml","component4.xhtml"),
					"getContents"=>array(array("title"=>"Chapter 1","source"=>"component1.xhtml"),array("title"=>"Chapter 2","source"=>"component3.xhtml#chapter-2")),
					"getMetadata"=>array("title"=>"A book","creator"=>"Inventive Labs")
				)
			)
		);
		//return new Response('<html><body>Welcome to the registry!</body></html>');
	}
	
	public function readAction($publicationId) {
		
		$publication = $this->getDoctrine()
			->getRepository('Posdta:Publication')
			->findOneById($publicationId);
		if(!$publication) {
			return new Response(
				json_encode(array("code"=>"1002001")),
				200,
				array('Content-Type','text/json')
				);
		}
		
		return $this->render(
			'PosdtaSiteBundle:Reader:readPublication.html.twig',
			array('publication'=>$publication)
		);
	}
	
	public function hardcomponentAction() {
		return new Response('<h1>Chapter 1</h1><p>Hello world</p>');
	}
	
	public function componentAction($componentId){
		$component = $this->getDoctrine()
			->getRepository('Posdta:Component')
			->findOneById($componentId);
		if(!$component) {
			return new Response('<h1>An error ocurred</h1>');
		}
		$componentData = file_get_contents($component->getPublication()->getLocation().'/OEBPS/Text/'.$component->getSource());
		$componentData = preg_replace('"../([a-zA-Z/]+[a-zA-Z0-9\\.]+(?:css|png|jpg|gif|jpeg))"',$component->getPublication()->getLocation().'/OEBPS/$1',$componentData);
		return new Response($componentData);
	}
}
?>
