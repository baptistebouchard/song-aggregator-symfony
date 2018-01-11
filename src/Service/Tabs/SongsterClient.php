<?php

namespace App\Service\Tabs;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;

/**
 * Created by PhpStorm.
 * User: baptistebouchard
 * Date: 17-12-09
 * Time: 19:02
 */
class SongsterClient
{
    private $songsterBaseUri;

    /**
     * OvhClient constructor.
     * @param $songsterBaseUri
     */
    public function __construct($songsterBaseUri)
    {
        $this->ovhBaseUri = $songsterBaseUri;
        $this->client = $this->createClient();
    }


    public function getLyrics(string $artist, string $title) : string
    {
        try {
            $response = $this->client->get("{$artist}/{$title}");
            return json_decode($response->getBody())->lyrics ?? '';
        } catch (RequestException $e) {
            throw new ResourceNotFoundException('Lyrics not found');
        }

    }

    private function createClient() : Client
    {
        return new Client([
            'base_uri' => $this->ovhBaseUri,
            'timeout'  => 2.0,
        ]);
    }
}