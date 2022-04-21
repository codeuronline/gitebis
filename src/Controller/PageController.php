<?php 
namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;


class PageController{
    public function index() : Response {
        return new Response(
            '<!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Page d\'accueil</title>
            </head>
            <body>
            <ul class="nav">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="#">Active</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Acccueil</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Retour</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled">Disabled</a>
  </li>
</ul>
            </body></html>');
            }
}