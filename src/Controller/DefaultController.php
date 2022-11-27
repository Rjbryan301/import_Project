<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Uploads;
use App\Form\UploadsType;
use App\Service\UploadService;

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
    public function homepage(Request $request, UploadService $uploadService): Response

    {
        $uploads = new Uploads();


        $form = $this->createForm(UploadsType::class, $uploads);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $files = $form->get('files')->getData();
            if ($files) {
                $files = $form->get('files')->getData();
                $fileName = $uploadService->upload($files);

                var_dump($fileName);
                die;
            }



            return $this->redirectToRoute('home_page');
        }



        return $this->render('default/index.html.twig', [
            'form' =>  $form->createView(),
        ]);
    }
}
