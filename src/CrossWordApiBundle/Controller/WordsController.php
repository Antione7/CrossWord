<?php

namespace CrossWordApiBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Controller\Annotations\Get;
use CrossWordApiBundle\Document\Word;
use CrossWordApiBundle\Document\Definition;
use Symfony\Component\HttpFoundation\Request;

class WordsController extends FOSRestController {

    /**
     * @Get("/words", name="word-list")
     */
    public function getWordByName(Request $request) {

        $repository = $this->get('doctrine_mongodb')
                ->getManager()
                ->getRepository();

        $word = $repository->find('abaisse');
        
        $view = $this->view(['data' => $word]);
        return $this->handleView($view);
    }

}
