<?php

namespace AppBundle\Controller;

class ForecastController extends Controller {
    public function indexAction()
    {
        return new Response('It/s freezing cold');
    }
}
