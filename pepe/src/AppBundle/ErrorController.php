<?php

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ErrorController extends Controller
{

    public function getAction($id){
        if($id == null || $id != 1){
            throw $this->createNotFoundException('Este es el error que saca php cuando no le pasas bien el parametro'); // Es el nombre de la excepción
        }
        else {
            return new Response('Register: '.$id);
        }
    }
 
    public function createAction($username){
        if($username == null || $username != 'Admin'){
            throw $this->createAccessDeniedException('Acceso Denegado');
        }
        else {
            return new Response('Usuario: '.$username);
        }
    }

}
