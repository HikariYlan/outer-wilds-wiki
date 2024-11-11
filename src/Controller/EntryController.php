<?php

namespace App\Controller;

use App\Entity\EntriesList;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EntryController extends AbstractController
{
    #[Route('/{category_name}_category/{entry_name}_entry', name: 'app_entry')]
    public function index(string $category_name, string $entry_name): Response
    {
        return $this->render('entry/index.html.twig',
            [
                'entry_title' => EntriesList::getEntryFromList(EntriesList::getEntriesList($category_name), $entry_name)
            ]
        );
    }
}
