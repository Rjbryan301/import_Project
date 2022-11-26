<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Uploads;
use App\Form\UploadsType;

class DefaultController extends AbstractController
{
    /**
     * @Route("/default", name="app_default")
     */
    public function index(): Response
    {
        return $this->render('default/index.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }

    /**
     * @Route("/", name="home_page")
     */
    public function homepage(Request $request): Response

    {
        $Uploads = new Uploads();


        $form = $this->createForm(UploadsType::class, $Uploads);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            // $form->getData() holds the submitted values
            // but, the original `$task` variable has also been updated
            $Uploads = $form->getData();

            // ... perform some action, such as saving the task to the database

            return $this->redirectToRoute('home_page');
        }

        return $this->render('default/index.html.twig', [
            'form' =>  $form,
        ]);
    }
}
