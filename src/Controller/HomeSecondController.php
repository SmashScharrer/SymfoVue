<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeSecondController extends AbstractController
{
    /**
     * @Route("/home/second", name="home_second")
     */
    public function index(): Response
    {
        return $this->render('home_second/index.html.twig', [
            'controller_name' => 'HomeSecondController',
        ]);
    }
}
