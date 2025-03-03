<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
//use Symfony\Component\Routing\Annotation\Route;

class HomeController {
    public function hello(): Response{
        return new Response('Hello World !');
    }

    // #[Route(path:'/helloworld', name:'app_home_helloworld')]
    public function helloWorld(): Response{
        return new Response('Hello Worlddd !');
    }
}

