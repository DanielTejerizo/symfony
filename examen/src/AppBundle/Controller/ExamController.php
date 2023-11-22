<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ExamController extends Controller{
    public function indexRequestAction($weather, $temperature, Request $request){
        return new Response('<html><body>Weather info: ' .$request->query->get("city").' es ' .$weather. ' y la temperatura es: '. $temperature. 'ºC</body></html>');
    }
}
