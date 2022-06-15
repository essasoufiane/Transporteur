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

        $url = "http://api.openweathermap.org/data/2.5/weather?q=Paris&lang=fr&units=metric&appid=fd7f4e76060b245952329d86d0a4d642";

        // Ajouter  les resultat
        $raw = file_get_contents($url);
        // Décode la chaine JSON 
        $json = json_decode($raw);

        // Nom de la ville, vous pouvez choisir la ville où vous voulez 
        $name = $json->name;

        // Météo
        $weather = $json->weather[0]->main;
        $desc = $json->weather[0]->description;

        // Températures
        $temp = $json->main->temp;
        $feel_like = $json->main->feels_like;

        // Vent
        $speed = $json->wind->speed;
        $deg = $json->wind->deg;




        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'ville'=>$name,
            'temperature'=>$temp, 
            'description'=> $desc, 
            'vent'=>$speed, 
            'deg'=>$deg, 
            'feel_like'=>$feel_like, 
            'weather'=>$weather


        ]);
    }
    // route histoire et render du template 
    #[Route('/monhistoire', name: 'monhistoire')]
    public function monhistoire(): Response
    {
        return $this->render('navleft/presentations/monhistoire.html.twig');
    }

    // route histoire et render du template 
    #[Route('/apropos', name: 'apropos')]
    public function histoireIzyDrive(): Response
    {
        return $this->render('navleft/legales/apropos.html.twig');
    }

    // route vehicules et render ............
    #[Route('/vehicules', name: 'vehicules')]
    public function IzyDriveCars(): Response
    {
        return $this->render('navleft/presentations/vehicules.html.twig');
    }
    // route les avis clients et template 
    #[Route('/avis', name: 'avis')]
    public function IzyDriveNotices(): Response
    {
        return $this->render('navleft/presentations/avis.html.twig');
    }
    // route dans sous dossier Services/disposition et le render 
    #[Route('/disposition', name: 'disposition')]
    public function IzyDriveDisposition(): Response
    {
        return $this->render('navleft/services/disposition.html.twig');
    }
    // route de chaufferprivée 
    #[Route('/chauffeur', name: 'chauffeur')]
    public function IzyDriveChauffeur(): Response
    {
        return $this->render('navleft/services/chauffeur.html.twig');
    }
    // route visite dans services 
    #[Route('/visite', name: 'visite')]
    public function IzyDriveVisite(): Response
    {
        return $this->render('navleft/services/visite.html.twig');
    }
    // route pour personne template/services/personne.html.twig 
    #[Route('/personne', name: 'personne')]
    public function IzyDrivePersonnePass(): Response
    {
        return $this->render('navleft/services/personne.html.twig');
    }
    // route template aeroport_gare 
    #[Route('/aeroport_gare', name: 'aeroport_gare')]
    public function IzyDriveAeroGare(): Response
    {
        return $this->render('navleft/services/aeroport_gare.html.twig');
    }
    // mentions legales 
    #[Route('/mentionslegales', name: 'mentionslegales')]
    public function MentionsLegales(): Response
    {
        return $this->render('navleft/legales/mentionslegales.html.twig');
    }
    // condition générales router =>conditionsgenerales
    #[Route('/conditionsgenerales', name: 'conditionsgenerales')]
    public function ConditionsGenerales(): Response
    {
        return $this->render('navleft/legales/conditionsgenerales.html.twig');
    }

    //nous contacter 

    #[Route('/nouscontacter', name: 'nouscontacter')]
    public function ContacterNous(): Response
    {
        return $this->render('navleft/legales/nouscontacter.html.twig');
    }

    //
    #[Route('/templategares', name: 'templategares')]
    public function GaresInfos(): Response
    {
        return $this->render('navleft/seervices/templategares.html.twig');
    }

    // ---route--du--nevleft--pour--mobile--ne-pas-toucher--ou--contacter--MR--Soufiane
    #[Route('/navleftmobile', name: 'navleftMobile')]
    public function navleftMobile(): Response
    {
        return $this->render('mobileView/navleftMobile.html.twig');
    }
}
