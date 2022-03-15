<?php

namespace App\Controller;

use App\Entity\User;
use App\Repository\UserRepository;
use App\Service\TestService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class TestController
 * @package App\Controller
 *
 * @Route("/")
 */

class TestController extends AbstractController
{

    /**
     * @param Request $request
     *
     * @Route("/home", name="home", methods={"GET"})
     * @return Response
     */

    public function testController(Request $request,   $tservice, UserRepository $urepo): Response
    {

        $userDB = $urepo->findOneBy(['id'=>2]);

//        $newUser = new User();
//        $newUser->setName('NOLO');
//        $newUser->setEmail('nolo@upm.es');
//
//        $urepo->add($newUser);

        $userDB->setEmail('otromail@upm.es');
        $urepo->update($userDB);

        $miTexto = $tservice->metodoDePruebas();

        return $this->render('prueba.html.twig', [
            'mi_texto' => $userDB->getEmail()
        ]);

    }


}