<?php
/**
 * Created by PhpStorm.
 * User: baptistebouchard
 * Date: 17-12-09
 * Time: 19:45
 */

namespace App\Service\Lyrics;


use Symfony\Component\Routing\Exception\ResourceNotFoundException;

class OvhClientError extends ResourceNotFoundException
{
    public function __construct() {
        parent::__construct();
        $this->message = 'Ovh Lyrics not found.';
    }
}