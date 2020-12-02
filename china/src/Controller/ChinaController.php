<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ChinaController extends AbstractController
{
    /**
     * @Route("/china", name="china")
     */
    public function index(): Response
    {
        return $this->render('china/index.html.twig', [
            'controller_name' => 'ChinaController',
        ]);
    }
}
