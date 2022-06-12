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
    // route histoire et render du template 
    #[Route('/histoire', name: 'histoire')]
    public function histoireIzyDrive(): Response
    {  
        return $this->render('navleft/presentations/histoire.html.twig', [
            'controller_name' => 'HomeController',
          
        ]);
    }
    // route vehicules et render ............
    #[Route('/vehicules', name: 'vehicules')]
    public function IzyDriveCars(): Response
    {  
        return $this->render('navleft/presentations/vehicules.html.twig', [
            'controller_name' => 'HomeController',
          
        ]);
    }
    // route les avis clients et template 
    #[Route('/avis', name: 'avis')]
    public function IzyDriveNotices(): Response
    {  
        return $this->render('navleft/presentations/avis.html.twig', [
            'controller_name' => 'HomeController',
          
        ]);
    }
    // route dans sous dossier Services/disposition et le render 
    #[Route('/disposition', name: 'disposition')]
    public function IzyDriveDisposition(): Response
    {  
        return $this->render('navleft/services/disposition.html.twig', [
            'controller_name' => 'HomeController',
            
        ]);
    }
    // route de chaufferprivée 
    #[Route('/chauffeur', name: 'chauffeur')]
    public function IzyDriveChauffeur(): Response
    {  
        return $this->render('navleft/services/chauffeur.html.twig', [
            'controller_name' => 'HomeController',
          
        ]);
    }
    // route visite dans services 
    #[Route('/visite', name: 'visite')]
    public function IzyDriveVisite(): Response
    {  
        return $this->render('navleft/services/visite.html.twig', [
            'controller_name' => 'HomeController',
          
        ]);
    }
    // route pour personne template/services/personne.html.twig 
    #[Route('/personne', name: 'personne')]
    public function IzyDrivePersonnePass(): Response
    {  
        return $this->render('navleft/services/personne.html.twig', [
            'controller_name' => 'HomeController',
          
        ]);
    }
    // route template aeroport_gare 
    #[Route('/aeroport_gare', name: 'aeroport_gare')]
    public function IzyDriveAeroGare(): Response
    {  
        return $this->render('navleft/services/aeroport_gare.html.twig', [
            'controller_name' => 'HomeController',
          
        ]);
    }
    // a propos template/legales
    #[Route('/apropos', name: 'apropos')]
    public function Apropos(): Response
    {  
        return $this->render('navleft/legales/apropos.html.twig', [
            'controller_name' => 'HomeController',
          
        ]);
    }
    // mentions legales 
    #[Route('/mentionslegales', name: 'mentionslegales')]
    public function MentionsLegales(): Response
    {  
        return $this->render('navleft/legales/mentionslegales.html.twig', [
            'controller_name' => 'HomeController',
          
        ]);
    }
    // condition générales router =>conditionsgenerales
    #[Route('/conditionsgenerales', name: 'conditionsgenerales')]
    public function ConditionsGenerales(): Response
    {  
        return $this->render('navleft/legales/conditionsgenerales.html.twig', [
            'controller_name' => 'HomeController',
          
        ]);
    }
   

}
