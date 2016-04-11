<?php

// src/AppBundle/Controller/LuckyController.php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class LuckyController extends Controller
{
    /**
     * @Route("/lucky/{routeSubName}")
     */
    public function numberAction($routeSubName)
    {
        return $this->render('lucky/show.html.twig', [
            'name' => $routeSubName
        ]);

        return new Response($html);
    }
}