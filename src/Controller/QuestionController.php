<?php

namespace App\Controller;

use App\Repository\QuestionRepository;
use Symfony\Component\HttpFoundation\JsonResponse;

class QuestionController
{
    public function index(QuestionRepository $questionRepository)
    {
        $response = array_map(function($question){
            /** @var \App\Entity\Question $question */
            return $question->toArray();
        }, $questionRepository->findAll());
        
        return new JsonResponse($response);
    }
}