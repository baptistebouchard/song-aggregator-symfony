<?php

// src/Controller/LuckyController.php
namespace App\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Component\HttpFoundation\Request;


class SongController  extends FOSRestController
{
    /**
         * @Rest\Get("/song", name="_song")
     */
    public function getSongAction(Request $request)
    {
        $title = $request->get('title');
        $artist = $request->get('artist');
        $response = $this->get('app.lyrics')->getLyrics($artist, $title);
        return $this->view($response);
    }
}