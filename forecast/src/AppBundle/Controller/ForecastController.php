<?php

namespace AppBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ForecastController extends Controller {
    public function indexAction()
    {
        return new Response('It/s freezing cold');
    }
}
