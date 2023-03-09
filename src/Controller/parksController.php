<?php

namespace App\Controller;

use App\Repository\ParksRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use function Symfony\Component\String\u;
class parksController extends AbstractController{

    #[Route('/', name:'home')]
    public function homepage(ParksRepository $repo){
        $array = $repo->findAll();

        return $this->render('home/homepage.html.twig',[
            'arrayParques' => $array,
        ]);
    }
   
    #[Route('/show/{park}',name:'show_info'),]
    public function showPark(ParksRepository $repository,$park=null){
        $array = $repository->findAll();
        if ($park) {
            $page = u(str_replace('-', ' ', $park));
        } else {
            $page = 'Non enviada';
        }
       
    
            return $this->render('home/showPark.html.twig',[
                'arrayParques' => $array,
                'nombreParque'=>$page
            ]);
    }

    #[Route('/ecosistema/{ecosistema}',name:'show_ecosistema'),]
    public function showEcosistema(ParksRepository $repository,$ecosistema=null){
        $arrayEco = $repository->findByEcosistema($ecosistema);
        
    
            return $this->render('show/eco.html.twig',[
                'arrayEco' => $arrayEco,
            ]);
    }
}







