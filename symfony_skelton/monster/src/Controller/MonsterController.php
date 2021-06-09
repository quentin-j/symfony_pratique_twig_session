<?php

namespace App\Controller;

use App\Model\MonsterModel;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class MonsterController extends AbstractController
{
    /**
     * @Route("/monsters", name="monsters_list", methods={"GET"})
     */
    public function monsterList(SessionInterface $session): Response
    {
        // on récupère les info du dernier monstre consulté
        $lastMonsterId = $session->get('monster_id');
        $lastMonster = $session->get('monster');
        
        $monsterModel = new MonsterModel;
        $allMonster = $monsterModel->getAll();
        return $this->render('location/list.html.twig', [
            'all_monsters' => $allMonster,
            'last_monster_id' => $lastMonsterId,
            'last_monster' => $lastMonster,
        ]);
    }
   /**
    * @Route("/monster/{id}", name="monster_solo", methods={"GET"})
    */
    public function monsterSolo($id, SessionInterface $session): Response
    {
        // ce if devient inutile grâce au requirements définit sur la route
        // if (!is_integer($id))
        // {
        //     throw $this->createNotFoundException('the monster id must be an integer');
        // }
        
        $monsterModel = new MonsterModel;
        $monster = $monsterModel->getById($id);

        if (null === $monster)
        {
            return $this->render('location/404.html.twig', [
                'monster_id' => $id,
            ]);
        }
        // on stock l'info du monstre qu'on est entrain d'afficher
        $session->set('monster_id', $id);
        $session->set('monster', $monster);
        return $this->render('location/solo.html.twig', [
            'monster_id' => $id,
            'monster' => $monster,
        ]);
    }

    /**
     * @Route("/grimoire", name="grimoire", methods={"GET"})
     */
    public function grimoire(): Response
    {
        // on force le téléchargement du manuel des monstre
        return $this->file(__DIR__ . '/../../public/files/Monstres.pdf');
    }
}