<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DefaulftController extends AbstractController
{
    /**
     * @Route("/", name="defaulft")
     */
    public function index()
    {
        return $this->render('defaulft/index.html.twig', [
            'controller_name' => 'DefaulftController',
        ]);
    }
}
