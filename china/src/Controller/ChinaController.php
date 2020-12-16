<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ChinaController extends AbstractController
{
    /**
     * @Route("/", name="china")
     */
    public function index(): Response
    {
        return $this->render('china/index.html.twig', [
            'controller_name' => 'ChinaController',
        ]);
    }
        /**
     * @Route("/evenements", name="evenements")
     */
    public function evenements()
    {
        return $this->render('china/evenements.html.twig');
    }
         /**
     * @Route("/carteweekend", name="carteweekend")
     */
    public function carteweekend()
    {
        return $this->render('china/carteWE.html.twig');
    }


    /** 
     * @Route("/Hye", name="Hye")
     */
   
     public function Hye()
     {
         return $this->render('china/Hye.html.twig');
     }

    /** 
     * @Route("/cartesemaine", name="cartesemaine")
     */
   
    public function semaine()
    {
        return $this->render('china/cartesemaine.html.twig');
    }

  


    /** 
     * @Route("/evenements", name="evenements")
     */
   
    public function event()
    {
        return $this->render('china/evenements.html.twig');
    }

  

}   