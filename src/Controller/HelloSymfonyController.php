<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloSymfonyController { // Name of this class should match with the name of this file (HelloSymfonyController.php)

  #[Route('/')]
  public function hellosymfony() {
    return new Response("Hello Symfony!");
  }

}