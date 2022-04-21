<?php 
namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class PageController extends AbstractController
{
  
    public function index() : Response {
    $index = random_int(0, 100);
    return $this->render('page/index.html.twig', [
      '
        index' => $index
    ]);
            }
}