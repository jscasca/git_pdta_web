<?php
// src/Posdta/Bundle/SiteBundle/Controller/LoginController.php
namespace Posdta\Bundle\SiteBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;

class LoginController extends Controller{
	
	public function indexAction() {
		return $this->render(
				'PosdtaSiteBundle:Login:index.html.twig'
			);
		//return new Response('<html><body>Welcome to the login!</body></html>');
	}
	
	public function posdtaAction() {
		$request = $this->container->get('request');
		$content = $this->get("request")->getContent();
		if(empty($content)){ return new Response('Go fuck yourself',501);}
		$ui = $request->get('ml');
		$pw = $request->get('pw');
		
		return $this->login($ui, $pw);
	}
	
	public function logoutAction() {
		$this->logout();
		return $this->redirect($this->generateUrl('login'));
	}
	
	public function testlogoutAction() {
		return $this->logout();
	}
	
	public function testAction() {
		return $this->login('test@mail.com','juanito');
	}
	
	protected function login($ui, $ps) {
		
		$existingLogin = $this->getDoctrine()
			->getRepository('Posdta:LoginPosdta')
			->findOneBy(
				array(
					"email"=>$ui,
					"password"=>md5($ps)
				)
			);
			
		if(!$existingLogin) {
			//return incorrect password
			return new Response(
				json_encode(array("code"=>"1002001")),
				200,
				array('Content-Type','text/json')
				);
		}
		
		$user = $existingLogin->getUser();
		$this->createSession($user->getId(),$user->getFirstName(),$user->getLastName(),$user->getUserPicture()->getThumb());
		return new Response(json_encode(array("code"=>"0000000")), 200, array('Content-Type', 'text/json'));
	}
	
	protected function logout() {
		$this->destroySession();
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
	
	protected function destroySession() {
		$session = new Session();
		$session->start();
		$session->clear();
	}
}
?>
