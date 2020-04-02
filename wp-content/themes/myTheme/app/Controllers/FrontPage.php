<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class FrontPage extends Controller
{
    protected $acf = true;

    public function realisations()
    {

        $args = array(
            'post_type' => 'realisation',
            'posts_per_page' => 5
        );
    $myQueries = get_posts($args);
    return $myQueries;  //renvoi du résultat de la requête

        
    }
}


