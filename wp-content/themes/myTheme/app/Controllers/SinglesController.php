<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class SinglesController extends Controller
{
    protected $acf = true;

    public function singles()
    {

        $args = array(
            'post_type' => 'realisation',
            'posts_per_page' => 1
        );
    $myQueries = get_posts($args);
    return $myQueries;  //renvoi du résultat de la requête
        
    }
}