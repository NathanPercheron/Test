<?php
namespace App\Controller;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
/**
 * Description of TestController
 *
 * @author perch
 */
class TestController extends Controller{
   
   
   

   /**
    *@Route("/",name="homepage")
    *@return Response
    */
    
   public function indexAction() {
        
   $uneVariable = new \stdClass();
   $uneVariable->v1 = "la variable 1";
   $uneVariable->v2 = "la variable 2";
   
   return $this->render('testUtilisateur/index.html.twig',['unevariable'=>$uneVariable]);
        
    }
    
    /**
    *@Route("/contact",name="lecontact")
    *@return Response
    */
    
    public function contactAction() {
        return new Response ('Bienvenue sur contact');
    }
}
