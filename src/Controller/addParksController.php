<?php

namespace App\Controller;
use App\Service\parkService;
use App\Entity\Parks;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class addParksController extends AbstractController {

    #[Route('/add/park/')]
    public function insert(parkService $arrayparques ,EntityManagerInterface $entityManager){
            $parks=$arrayparques->findAll();
        foreach ($parks as $key => $parque) {
            $park= new Parks();
            $park->setNombre($parque["nombre"]);
            $park->setProvincia($parque["provincia"]);
            $park->setEcosistema($parque["ecosistema"]);
            $park->setFichero($parque["fichero"]);
            $entityManager->persist($park);
            $entityManager->flush();

        };
        
        return new Response(sprintf(
            'Park number %d added',
            $park->getId(),
        ));
    }

}

?>