<?php
// src/Posdta/TestBundle/Controller/HelloController.php
namespace Posdta\TestBundle\Controller;

use Symfony\Component\HttpFoundation\Response;

class HelloController {
	
	public function indexAction($name) {
		return new Response('<html><body>Hello '.$name.'!</body></html>');
	}
}
?>
