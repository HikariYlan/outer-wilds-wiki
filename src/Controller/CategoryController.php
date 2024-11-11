<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CategoryController extends AbstractController
{
    private array $endings = [
        'break-time-and-space-ending' => 'Break Time And Space Ending',
        'echoes-of-the-eye-ending' => 'Echoes Of The Eye Endings',
        'eye-of-the-universe-ending' => 'Eye Of The Universe Ending',
        'game-over-ending' => 'Game Over',
        'isolation-ending' => 'Isolation Ending',
        'self-ending' => 'Self Ending',
    ];

    #[Route('/{category_name}_category', name: 'app_category')]
    public function index(string $category_name): Response
    {
        $titles = [
            'endings' => 'fins du jeu',
            'achievements' => 'succès du jeu',
            'gameplay' => 'gameplay du jeu',
            'technologies' => 'technologies du jeu',
            'planets' => 'planètes du jeu',
            'species' => 'races du jeu',
            'characters' => 'personnages du jeu',
            'musics' => 'musiques du jeu'
        ];

        return $this->render(
            'category/'.$category_name.'.html.twig',
            [
                'category_name' => $category_name,
                'category_title' => $titles[$category_name],
                'pages_list' => $this->$category_name
            ]
        );
    }
}
