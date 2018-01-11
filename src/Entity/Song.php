<?php

namespace App\Entity;

use JMS\Serializer\Annotation as JMS;
/**
 * @JMS\ExclusionPolicy("All")
 */
class Song
{
    /**
     * @JMS\Expose
     */
    private $lyrics;

    /**
     * Song constructor.
     * @param $lyrics
     */
    public function __construct($lyrics)
    {
        $this->lyrics = $lyrics;
    }

    /**
     * @return mixed
     */
    public function getLyrics()
    {
        return $this->lyrics;
    }

    /**
     * @param mixed $lyrics
     */
    public function setLyrics($lyrics) : void
    {
        $this->lyrics = $lyrics;
    }


}