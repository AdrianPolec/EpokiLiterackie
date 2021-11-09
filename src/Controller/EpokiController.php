<?php

namespace App\Controller;

use App\Entity\Epoki;
use App\Repository\EpokiRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/api/epoki', name: 'epoki')]

class EpokiController extends AbstractController
{
    private $entityManager;
    private $epokiRepository;

    public function __construct(EntityManagerInterface $entityManager, EpokiRepository $epokiRepository)
    {
        $this-> entityManager = $entityManager;
        $this-> epokiRepository = $epokiRepository;
    }
    #[Route('/read', name: 'epoki')]

    public function index() {
        $epoki = $this->epokiRepository->findAll();

        $arrEpoki = [];
        foreach ($epoki as $epoka) {
            $arrEpoki[] = $epoka->toArray();
        }
        return $this->json($arrEpoki);

    }

}