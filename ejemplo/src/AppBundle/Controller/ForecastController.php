<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class ForecastController extends Controller{

    public function indexAction(){
        return new Response('Ejemplo');
    }

}

