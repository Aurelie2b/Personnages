<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PersonnageController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function index(): Response
    {
        return $this->render('personnage/index.html.twig');
    }
    /**
     * @Route("/personnages", name="personnages")
     */
    public function personnage(): Response
    {
        return $this->render('personnage/personnages.html.twig', [
            "pseudo" => "Toto",
            "age" => 25,
            "carac" => [
                "force" => 3,
                "agi" => 2,
                "intel" => 3
            ]

        ]);
    }
}