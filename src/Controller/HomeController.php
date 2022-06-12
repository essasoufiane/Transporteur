<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{

 

    #[Route('/', name: 'home_page')]
    public function index(): Response
    {  
        

  
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
           
          
        ]);
    }
    #[Route('/histoire', name: 'histoire')]
    public function histoireIzyDrive(): Response
    {  
        return $this->render('navleft/presentations/histoire.html.twig', [
            'controller_name' => 'HomeController',
          
        ]);
    }

    #[Route('/vehicules', name: 'vehicules')]
    public function IzyDriveCars(): Response
    {  
        return $this->render('navleft/presentations/vehicules.html.twig', [
            'controller_name' => 'HomeController',
          
        ]);
    }
    #[Route('/avis', name: 'avis')]
    public function IzyDriveNotices(): Response
    {  
        return $this->render('navleft/presentations/avis.html.twig', [
            'controller_name' => 'HomeController',
          
        ]);
    }

}
