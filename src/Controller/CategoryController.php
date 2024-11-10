<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CategoryController extends AbstractController
{
    #[Route('/{category_name}_category', name: 'app_category')]
    public function index(string $category_name): Response
    {
        return $this->render('category/'.$category_name.'.html.twig', ['category_name' => $category_name]);
    }
}
