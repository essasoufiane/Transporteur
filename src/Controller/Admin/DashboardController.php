<?php

namespace App\Controller\Admin;

use App\Entity\Contact;
use App\Entity\User;
use App\Entity\Order;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use EasyCorp\Bundle\EasyAdminBundle\Config\Assets;


class DashboardController extends AbstractDashboardController
{
    public function __construct(private AdminUrlGenerator $adminUrlGenerator){


    }

    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {
        //une crud administration very easiest for me Daouda 
        $url=$this->adminUrlGenerator
        ->setController(UserCrudController::class)
        ->generateUrl();
        return $this->redirect($url); 

    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('TRANSPORTEUR ');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Dashboard', 'fa fa-home');
     
        yield MenuItem::linkToCrud('Utilisateurs', 'fas fa-user', User::class);
        yield MenuItem::linkToCrud('Réservations', 'fas fa-car', Order::class);
        yield MenuItem::linkToCrud('Messages reçus', 'fa fa-envelope', Contact::class);
    }
    public function configureAssets(): Assets
    {
        return Assets::new()->addCssFile('css/admin.css');
        return Assets::new()->addCssFile('css/all.min.css');
        return Assets::new()->addCssFile('css/sb-admin-2.min.css');
    }
}
