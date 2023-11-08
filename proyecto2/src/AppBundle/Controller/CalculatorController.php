<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
// use Symfony\Component\Routing\Annotation\Route;

class CalculatorController
{
    public function indexAction($age){
        $currentYear = date('Y');
        return new Response ('<html><body>Current year: ' . $currentYear . '<br/>Year of birth: ' . ($currentYear = $age) .'</body></html>');
    }
}
    
