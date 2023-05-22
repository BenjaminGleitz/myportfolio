<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/skill', name: 'skill_')]
class SkillController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(): Response
    {

        $page = 'skill';
        
        return $this->render('skill/index.html.twig', [
            'page' => $page,
        ]);
    }
}