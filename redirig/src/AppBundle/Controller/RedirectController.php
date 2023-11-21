<?php

namespace AppBundle\Controller;

class RedirectController extends Controller{

    public function internalRedirectPermanentAction(){
        return $this->redirectToRoute('redirect_index', array(), 301);
    }

}
