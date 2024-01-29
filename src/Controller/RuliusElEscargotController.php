<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RuliusElEscargotController extends AbstractController
{
    #[Route('/rulius/el/escargot', name: 'app_rulius_el_escargot')]
    public function index(): Response
    {
        return $this->render('rulius_el_escargot/index.html.twig', [
            'controller_name' => 'RuliusElEscargotController',
        ]);
    }
}
