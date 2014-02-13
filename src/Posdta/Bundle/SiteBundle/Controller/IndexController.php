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

class IndexController extends Controller {
	
	public function indexAction() {
		$session = new Session();
		$session->start();
		if($session->has('user_id')) {
			return $this->render(
				'PosdtaSiteBundle:Index:userIndex.html.twig',
				array(
					'session'=>array(
						'id'=>$session->get('user_id'),
						'first_name'=>$session->get('f_name'),
						'last_name'=>$session->get('l_name'),
						'picture_thumb'=>$session->get('p_thumb')//'../appImages/defaultUser.png'
						)
				)
			);
		} else {
			return $this->render(
				'PosdtaSiteBundle:Index:userlessIndex.html.twig'
			);
		}
		//return new Response('<html><body>Welcome to the registry!</body></html>');
	}
}
?>
