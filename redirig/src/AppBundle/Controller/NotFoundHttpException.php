<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class NotFoundHttpException extends Controller{

    public function getAction($id){
        if ($id == null || $id != 1){
            throw $this->createNotFoundException('No existe');
        }else{
            return new Response("Registro " .$id);
    }

}
}
