<?php


namespace Gestion\API;


class Comite extends API
{
    public function list()
    {
        return $this->get('/comite/list');
    }

    public function getComite($comite_id)
    {
        return $this->get('/comite/'.$comite_id);
    }
}
