<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class FrontPage extends Controller
{
    protected $acf = true;

    public function realisations()
    {
        $args = array(
            'numberposts' => 1,
            'taxonomy' => 'realisations',
        );
        
        $postsList = get_posts($args);
        $posts = get_field('nom_realisation');

            return $posts;



        // return get_posts($args);
        
    }
}
