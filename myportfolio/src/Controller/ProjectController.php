<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/project', name: 'project_')]
class ProjectController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(): Response
    {

        $page = 'project';

        return $this->render('project/index.html.twig', [
            'page'  => 'page',
            'controller_name' => 'ProjectController',
        ]);
    }
}
