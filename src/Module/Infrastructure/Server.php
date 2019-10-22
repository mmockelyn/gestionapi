<?php


namespace Gestion\API\Infrastructure;


use Gestion\API\API;

class Server extends API
{
    public function checkServerOne()
    {
        return $this->get('/infrastructure/server/check/server1');
    }

    public function checkServerTwo()
    {
        return $this->get('/infrastructure/server/check/server2');
    }

    public function checkServerDns()
    {
        return $this->get('/infrastructure/server/check/serverDns');
    }

    public function checkServerBackOne()
    {
        return $this->get('/infrastructure/server/check/serverBack1');
    }

    public function checkServerBackTwo()
    {
        return $this->get('/infrastructure/server/check/serverBack2');
    }

    public function checkServerBanker()
    {
        return $this->get('/infrastructure/server/check/serverBanker');
    }

    public function checkServerBilletterie()
    {
        return $this->get('/infrastructure/server/check/serverBilletterie');
    }

    public function checkPhone()
    {
        return $this->get('/infrastructure/server/check/serverPhone');
    }

    public function checkMail()
    {
        return $this->get('/infrastructure/server/check/serverMail');
    }

    public function checkChat()
    {
        return $this->get('/infrastructure/server/check/serverChat');
    }

}
