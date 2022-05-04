<?php

namespace App\Controller;

use App\Repository\RegionRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(RegionRepository $regionRepository): Response
    {
        return $this->render('main/index.html.twig', [
            'regions'=>$regionRepository->findAll()
        ]);
    }

    #[Route('/single/{id}', name: 'single')]
    public function show(RegionRepository $regionRepository, $id): Response
    {
        return $this->render('main/single.html.twig', [
            'region'=>$regionRepository->find($id)
        ]);
    }

}
