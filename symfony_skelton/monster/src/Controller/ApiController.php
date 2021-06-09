<?php

namespace App\Controller;

use App\Model\MonsterModel;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ApiController extends AbstractController
{
    /**
     * @Route("/api/monsters", name="api")
     */
    public function index(): Response
    {
       // récupérer les monstres
       $monsterModel = new MonsterModel;
       $allMonster = $monsterModel->getAll();
       // renvoyer du json
       return $this->json($allMonster);
    }
}
