<?php

namespace App\Controller\Admin;

use App\Entity\User;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\EmailField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class UserCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return User::class;
    }

    public function configureFields(string $pageName): iterable
    {

      
        return [
            IdField::new('id'),
            EmailField::new('email'), 
            TextField::new('lastname'),
            TextField::new('firstname'),
            TextField::new('lastname'),
           IntegerField::new('age'), 
            TextField::new('adresse'),
            TextField::new('image'), 
           
          
          

        ];
    }
    
}
