<?php

namespace Enqueue\AmqpBunny;

use Bunny\Client;
use Bunny\Exception\ClientException;

class BunnyClient extends Client
{
    public function __destruct()
    {
//        try {
        parent::__destruct();
//        } catch (ClientException $e) {
//            if ('' === $e->getMessage()
//        }
    }
}
