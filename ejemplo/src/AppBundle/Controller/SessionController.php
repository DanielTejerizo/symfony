<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class SessionController extends AbstractController{

    public function setSessionData(SessionInterface $session)
    {
        // Guardar datos en la sesión
        $session->set('user_id', 123);
        $session->set('user_name', 'john_doe');

        return new Response('Datos guardados en la sesión.');
    }

    public function getSessionData(SessionInterface $session)
    {
        // Recuperar datos de la sesión
        $userId = $session->get('user_id');
        $userName = $session->get('user_name');

        return new Response('ID de usuario: ' . $userId . ', Nombre de usuario: ' . $userName);
    }

    public function removeSessionData(SessionInterface $session)
    {
        // Eliminar datos específicos de la sesión
        $session->remove('user_id');

        return new Response('ID de usuario eliminado de la sesión.');
    }
}
