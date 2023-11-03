<?php

namespace AppBundle\Controller;

class ForecastController 
{
    public function indexAction()
    {
        return new Response('It/s freezing cold');
    }
}
