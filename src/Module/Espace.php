<?php


namespace Gestion\API;


class Espace extends API
{
    public function getEspace()
    {
        return $this->get('/espace/'.env("COMITE_ID"));
    }
}
