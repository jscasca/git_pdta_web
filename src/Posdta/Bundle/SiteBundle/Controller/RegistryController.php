<?php
// src/Posdta/Bundle/SiteBundle/Controller/RegistryController.php
namespace Posdta\Bundle\SiteBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Posdta\Entity\User;
use Posdta\Entity\UserPicture;
use Posdta\Entity\LoginPosdta;
use \DateTime;
use Symfony\Component\HttpFoundation\Session\Session;

class RegistryController extends Controller {
	
	public function indexAction() {
		return $this->render(
			'PosdtaSiteBundle:Registry:index.html.twig'
		);
		//return new Response('<html><body>Welcome to the registry!</body></html>');
	}
	
	public function testAction() {
		
		return $this->createLogin('test','test','NOW','1','test@mail.com','juanito');
	}
	
	public function createAction() {
		$request = $this->container->get('request');
		$content = $this->get("request")->getContent();
		if(empty($content)){ return new Response('Go fuck yourself',501);}
		$fn = $request->get('fn');
		$ln = $request->get('ln');
		$sx = $request->get('sx');
		$bd = $request->get('bd');
		$ml = $request->get('ml');
		$pw = $request->get('pw');
		$ui = $request->get('ui');
		$sc = $request->get('sc');
		
		//Return if any value is missing
		if($ml != "" || $sc != "1" || $ui == "" || $pw == "") {
			return new Response(
				json_encode(array("code"=>"1001001")),
				200,
				array('Content-Type','text/json')
				);
		}
		//return  new Response(json_encode($fn), 200, array('Content-Type', 'text/json'));
		return $this->createLogin($fn,$ln,$bd,$sx,$ui,$pw);
	}
	
	protected function createLogin($fn,$ln,$bd,$sx,$ui,$ps) {
		$existingLogin = $this->getDoctrine()
			->getRepository('Posdta:LoginPosdta')
			->findByEmail($ui);
			
		//Return if the login mail already exists
		if($existingLogin != null) {
			return new Response(
				json_encode(array("code"=>"1001002")),
				200,
				array('Content-Type','text/json')
				);
		}
		
		$em = $this->getDoctrine()->getManager();
		$picture = new UserPicture();
		$picture->setThumb('../appImages/defaultUser.png');
		$picture->setPicture('../appImages/logo.png');
		$em->persist($picture);
		$em->flush();
		
		$user = new User();
		$user->setFirstName($fn);
		$user->setLastName($ln);
		$user->setGender($sx);
		$user->setBirthday(new DateTime($bd));
		$user->setRegistrationDate(new DateTime('NOW'));
		
		$em->persist($user);
		$em->flush();
		
		$user->setUserPicture($picture);
		$em->persist($user);
		$em->flush();
		
		$login = new LoginPosdta();
		$login->setEmail($ui);
		$login->setPassword(md5($ps));
		$login->setUser($user);
		$em->persist($login);
		$em->flush();
		
		$this->createSession($user->getId(),$user->getFirstName(),$user->getLastName(),$user->getUserPicture()->getThumb());
		return new Response(json_encode(array("code"=>"0000000")), 200, array('Content-Type', 'text/json'));
	}
	
	protected function createSession($id,$fn,$ln,$pc) {
		$session = new Session();
		$session->start();
		$session->set('user_id', $id);
		$session->set('f_name', $fn);
		$session->set('l_name', $ln);
		$session->set('p_thumb', $pc);
	}
}
?>
