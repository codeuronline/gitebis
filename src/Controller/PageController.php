<?php 
namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class PageController extends AbstractController
{
  
    public function index() : Response {
    return $this->render('page.html.twig', );
            }
}