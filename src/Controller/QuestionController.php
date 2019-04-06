<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;

class QuestionController
{
    public function index()
    {
        $number = random_int(0, 100);

        return new JsonResponse(['number' => $number]);
    }
}