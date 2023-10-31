<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\AjoutCafeType;

class BaseController extends AbstractController
{
    #[Route('/', name: 'app_accueil')]
    public function index(): Response
    {
        return $this->render('base/index.html.twig', []);
    }

    #[Route('/cafe', name: 'app_cafe')]
    public function cafe(): Response
    {
        $form = $this->createForm(AjoutCafeType::class);
        return $this->render('base/cafe.html.twig', [
            'form' => $form->createView()
        ]);
    }
}
