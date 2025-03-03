<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;


class AccueilController {
    public function negatif(int $nbr1, int $nbr2): Response{
        $total = $nbr1 + $nbr2 ;
        if($total < 0){
            return new Response('Les nombres sont négatifs');
        }
        return new Response("<p>L’addition de $nbr1 et $nbr2 est égale au résultat : $total </p>");
    }
}

