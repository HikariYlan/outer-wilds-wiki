<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CategoryController extends AbstractController
{
    #[Route('/endings_category', name: 'app_endings_category')]
    public function endings_page(): Response
    {
        return $this->render('category/endings.html.twig', ['category_name' => 'les fins du jeu']);
    }
}
