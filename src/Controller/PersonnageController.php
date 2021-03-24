<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PersonnageController extends AbstractController
{
    /**
     * @Route("/", name="personnage")
     */
    public function index(): Response
    {
        return $this->render('personnage/index.html.twig');
    }
    /**
     * @Route("/personnage", name="personnage")
     */
    public function personnage(): Response
    {
        return $this->render('personnage/personnages.html.twig');
    }
}