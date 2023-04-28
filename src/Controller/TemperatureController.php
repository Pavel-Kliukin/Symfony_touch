<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TemperatureController {

  #[Route('/')]
  public function hellosymfony() {
    return new Response("Hello Symfony!");
  }

}