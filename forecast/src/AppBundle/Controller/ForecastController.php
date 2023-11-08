<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ForecastController extends Controller
{
    public function indexParamsAction($weather, $temperature){
        return new Response('<html><body>Weather info: Esta '.$weather.'y la temperatura es: '.$temperature.'</body></html');
    }
}
