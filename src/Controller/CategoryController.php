<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CategoryController extends AbstractController
{
    private array $endings = [
        'break-time-and-space-ending' => 'Break Time And Space Ending',
        'echoes-of-the-eye-endings' => 'Echoes Of The Eye Endings',
        'eye-of-the-universe-ending' => 'Eye Of The Universe Ending',
        'game-over-ending' => 'Game Over',
        'isolation-ending' => 'Isolation Ending',
        'self-ending' => 'Self Ending',
    ];

    private array $achievements = [
        'archeologist-achievement' => 'Archéologist (Archéologue)',
        'beginner-luck-achievement' => 'Beginner\'s Luck (Chance du Débutant)',
        'cutting-it-close-achievement' => 'Cutting it Close (Un peu juste)',
        'deep-impact-achievement' => 'Deep Impact (Grand plongeon)',
        'die-hard-achievement' => 'Die Hard (Coriace)',
        'from-hearth-to-moon-achievement' => 'From the Hearth to the Moon (D\'Âtrebois à laLune)',
        'gone-in-sixty-seconds-achievement' => 'Gone In 60 Seconds (60 secondes chrono)',
        'harmonic-convergence-achievement' => 'Harmonic Convergence (Convergence harmonique)',
        'hey-whats-this-button-do-achievement' => 'Hey, what\'s this button do ? (Ça fait quoi si j\'appuie là?)',
        'hotshot-achievement' => 'Hotshot (As)',
        'belongs-to-museum-achievement' => 'It belongs in a museum! (Sa place est dans un musée !)',
        'worth-the-shot-achievement' => 'It was worth a shot. (Ça valait le coup d\'essayer.',
        'micas-wrath-achievement' => 'Mica\'s Wrath (Pauvre Mica)',
        'carcinogens-achievement' => 'Mmmm, Carcinogens (Miam, des cancérogènes)',
        'pchoo-achievement' => 'Pchooooooo! (Pffffuittt !)',
        'rigibody-achievement' => 'Rigidbody (Rigidbody)',
        'terrible-fate-achievement' => 'You\'ve met a terrible fate. (Ta terrible destinée)',
        'one-outof-nine-hundred-achievement' => '1/900 (1/900)',
        'celsius-achievement' => 'Celsius 232.78 (232,78 degrés Celsius)',
        'early-adopter-achievement' => 'Early Adopter (Pionnier)',
        'fire-arrows-achievement' => 'Fire Arrows (Flèches enflammées)',
        'flat-hearther-achievement' => 'Flat Hearther (Platiste terre à terre)',
        'ghosts-in-machine-achievement' => 'Ghosts in the Machine (Fantômes dans la machine)',
        'my-bones-achievement' => 'Oof Ouch, My Bones (Aïe ouille, mes os)',
        'simulation-hypthesis-achievement' => 'Simulation Hypothesis (Hypothèse de simulation)',
        'sleep-wake-repeat-achievement' => 'Sleep. Wake. Repeat. (Dormez. Réveillez-vous. Recommencez.)',
        'grate-filter-achievement' => 'The Grate Filter (Le filtre à grille)',
        'silenced-cartographer-achievement' => 'The Silenced Cartographer (Le cartographe muet)',
        'tubular-achievement' => 'Tubular! (Quel tube !)',
        'youll-never-take-me-alive-achievement' => 'You\'ll Never Take Me Alive! (Vous ne m\'aurez jamais en vie !)'
    ];

    private array $gameplay = [
        'codes-lancement-gameplay' => 'Codes de lancement',
        'easter-egg-gameplay' => 'Easter eggs',
        'feu-camp-gameplay' => 'Feu de camp',
        'fragements-quantiques-gameplay' => 'Fragements quantiques',
        'matiere-fantome-gameplay' => 'Matière fantôme',
        'mort-gameplay' => 'Mort',
        'supernova-gameplay' => 'Supernova'
    ];

    private array $technologies = [];

    private array $musics = [];

    private array $characters = [];

    private array $planets = [];

    private array $species = [];

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
                'entries_list' => $this->$category_name
            ]
        );
    }
}
