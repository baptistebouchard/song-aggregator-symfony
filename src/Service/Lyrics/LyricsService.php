<?php

namespace App\Service\Lyrics;

use App\Entity\Song;

class LyricsService
{
    private $lyricsOvhClient;

    /**
     * LyricsService constructor.
     * @param $lyricsOvhClient
     */
    public function __construct(OvhClient $lyricsOvhClient)
    {
        $this->lyricsOvhClient = $lyricsOvhClient;
    }

    public function getLyrics(string $artist, string $title) : Song
    {
        return new Song($this->lyricsOvhClient->getLyrics($artist, $title));
    }
}