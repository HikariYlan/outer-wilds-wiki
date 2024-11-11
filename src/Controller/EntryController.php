<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EntryController extends AbstractController
{
    #[Route('/{entry_name}_entry', name: 'app_entry')]
    public function index(string $entry_name): Response
    {
        return $this->render('entry/index.html.twig', [
            'controller_name' => 'EntryController',
        ]);
    }
}
