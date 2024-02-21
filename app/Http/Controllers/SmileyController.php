<?php

// app/Http/Controllers/SmileyController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SmileyController extends Controller
{
    public function index()
    {
        // Nombre de caractères par page
        $caracteres_par_page = 256;

        // Code de départ pour les smileys UTF-8
        $code_de_depart = 128512;

        // Tableau pour stocker les smileys UTF-8
        $smileys = [];

        // Générer les caractères UTF-8
        for ($i = 0; $i < $caracteres_par_page; $i++) {
            // Calculer le code de caractère
            $code = $code_de_depart + $i;
            
            // Ajouter le caractère UTF-8 au tableau
            $smileys[] = '&#' . $code;
        }

        // Passer les smileys à la vue
        return view('smileys.index', ['smileys' => $smileys]);
    }
}
