<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LuckyController extends AbstractController {
    /**
     * @Route("/lucky")
     */
    public function lucky(SessionInterface $session) {
        $number = random_int(0, 100);

        //throw $this->createNotFoundException("Cette page est en cours de construction");
        $session->set("token", "30339393DLDKKDKKDK");

        $session->get("token");
        
        return $this->render("base.html.twig");
    }
}