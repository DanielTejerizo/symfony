<?php
 
namespace AppBundle\Controller;
 
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
 
// use Symfony\Component\HttpFoundation\Response;
 
class OperacionesController extends Controller
{
    public function sumarAction($num1,$num2){
        $resultado = $num1 + $num2;
 
        return new Response('El resultado de la suma es: '.$resultado);
    }
 
    public function restarAction($num1,$num2){
 
 
        $resultado = $num1 - $num2;
        return new Response('El resultado de la resta es: '.$resultado);
       
    }
 
    public function multiplicarAction($num1,$num2){
 
        $resultado = $num1 * $num2;
        return new Response('El resultado de la mutiplicacion es: '.$resultado);
       
    }
 
    public function dividirAction($num1,$num2){
 
        if($num2 == 0){
            return new Response('No se puede dividir entre 0 porque da infinito');
        }
        else {
            $resultado = $num1 / $num2;
            return new Response('El resultado de la división es: '.$resultado);
        }
       
    }
}