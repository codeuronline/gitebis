<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class LuckyController
{
    /** 
     * 
    */
    
     
    public function number(): Response
    {
        $number = random_int(0, 100);

        return new Response(
            '<!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Page '.$number.'</title>
            </head>
            <body>
            <center>
            <h1>Le Nouveau site de Référence des Gites</h1></center></body></html>');
    }
}