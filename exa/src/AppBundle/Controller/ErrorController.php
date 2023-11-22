<?php

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class ErrorController extends Controller
{

    public function getAction($id,SessionInterface $session){
        if($id == null || $id != 1){
            throw $this->createNotFoundException('Este es el error que saca php cuando no le pasas bien el parametro'); // Es el nombre de la excepción
        }
        else {
            
            $session->set('username',$id);

            $idsesion = $session->get('username');
            $session->remove('username'); 
            $idsesion = $session->get('username');
            return new Response('Register: '.$id.', el username de sesion es: '.$idsesion);
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