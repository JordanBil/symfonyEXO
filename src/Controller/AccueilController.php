<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;


class AccueilController {
    public function negatif(int $nbr1, int $nbr2): Response{
        $total = $nbr1 + $nbr2 ;
        if($total < 0){
            return new Response('Le resultat est négatif');
        }
        return new Response("<p>L’addition de $nbr1 et $nbr2 est égale au résultat : $total </p>");
    }

    public function calcul(int $nbr1, int $nbr2, string $ordre){
        $result = 0;
        $msg = "";

        if (is_numeric($nbr1) && is_numeric($nbr2) && $nbr2 != 0) {
            if($ordre == "add"){
                $result = $nbr1 + $nbr2;
                $msg = "l'addition";
            } else if ($ordre == "multi"){
                $result = $nbr1 * $nbr2;
                $msg = "la multiplication";
            } else if ($ordre == "sous"){
                $result = $nbr1 - $nbr2;
                $msg = "la soustraction";
            } else if($ordre == "div"){
                $result = $nbr1 / $nbr2;
                $msg = "la division";
            } else {
                
            }
        }
        

        return new Response("<p>$msg de $nbr1 et $nbr2 est égale a : $result</p>");
    }
}

