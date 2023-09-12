<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Usuario;

class UsuarioFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        for ($i = 1; $i < 6; $i++) {
            $usuario = new Usuario();
            $usuario->setNombre('usuario '.$i);
            $usuario->setEmail('usuario'.$i."@gmail.com");
            $usuario->setPassword('$2y$13$WOlIqi4sxY7AK3v12zKeGOVs.i1FmQu/2phSbHQzpODWHi2NtKJSm');
            $manager->persist($usuario);
            }
           
        $manager->flush();
        
        

        
    }
}
