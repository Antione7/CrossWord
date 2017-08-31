<?php

namespace CrossWordApiBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Controller\Annotations\Get;
use Symfony\Component\HttpFoundation\Request;

class WordsController extends FOSRestController {

    /**
     * @Get("/words")
     */
    public function getWordsAction(Request $request) {

        $repository = $this->get('doctrine_mongodb')
                ->getManager()
                ->getRepository('CrossWordApiBundle:Word');

        $word = $repository->findOneBy(['Libelle' => 'observable']);
        
        $view = $this->view(['data' => $word]);
        return $this->handleView($view);
    }

}
