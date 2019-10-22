<?php


namespace Gestion\API\Infrastructure;


use Gestion\API\API;

class Server extends API
{
    public function checkServerOne()
    {
        return $this->get('/infrastructure/server/check/server1');
    }

}
