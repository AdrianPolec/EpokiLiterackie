<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\RedirectResponse;


class IndexController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(): RedirectResponse
    {
        return $this->redirect('/Home');
    }
    #[Route('/EpokiLiterackie', name: 'EpokiLiterackie')]
    public function EpokiLiterackie(): RedirectResponse
    {
        return $this->redirect('/Home');
    }
    #[Route('/Antyk', name: 'DzielaEpoki')]
    public function Antyk(): RedirectResponse
    {
        return $this->redirect('/Home');
    }
    #[Route('/Średniowiecze', name: 'DzielaEpoki1')]
    public function Średniowiecze(): RedirectResponse
    {
        return $this->redirect('/Home');
    }
    #[Route('/Renesans', name: 'DzielaEpoki2')]
    public function Renesans(): RedirectResponse
    {
        return $this->redirect('/Home');
    }
    #[Route('/Barok', name: 'DzielaEpoki3')]
    public function Barok(): RedirectResponse
    {
        return $this->redirect('/Home');
    }
    #[Route('/Oświecenie', name: 'DzielaEpoki4')]
    public function Oświecenie(): RedirectResponse
    {
        return $this->redirect('/Home');
    }
    #[Route('/Romantyzm', name: 'DzielaEpoki5')]
    public function Romantyzm(): RedirectResponse
    {
        return $this->redirect('/Home');
    }
    #[Route('/Pozytywizm', name: 'DzielaEpoki6')]
    public function Pozytywizm(): RedirectResponse
    {
        return $this->redirect('/Home');
    }
    #[Route('/Młoda Polska', name: 'DzielaEpoki7')]
    public function MłodaPolska(): RedirectResponse
    {
        return $this->redirect('/Home');
    }
    #[Route('/Dwudziestolecie Międzywojenne', name: 'DzielaEpoki8')]
    public function DwudziestolecieMiędzywojenne(): RedirectResponse
    {
        return $this->redirect('/Home');
    }
    #[Route('/Literatura Współczesna', name: 'DzielaEpoki9')]
    public function LiteraturaWspółczesna(): RedirectResponse
    {
        return $this->redirect('/Home');
    }


    #[Route('/Home', name: 'home')]
    public function home(): Response
    {
        return $this->render('index/index.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }
}