<?php


namespace Gestion\API;


class Module extends API
{
    public function listModule()
    {
        return $this->get('/prestation/module');
    }

    public function getModule($module_id)
    {
        return $this->get('/prestation/module/'.$module_id);
    }

    public function countTask($modules_id)
    {
        return $this->get('/prestation/module/'.$modules_id.'/countTasks');
    }

    public function countChangelog($modules_id)
    {
        return $this->get('/prestation/module/'.$modules_id.'/countChangelog');
    }

    public function getTask($modules_id, $task_id)
    {
        return $this->get('/prestation/module/'.$modules_id.'/task/'.$task_id);
    }

    public function getChangelog($modules_id, $changelog_id)
    {
        return $this->get('/prestation/module/'.$modules_id.'/changelog/'.$changelog_id);
    }

    public function activateBetaModule($modules_id)
    {
        $espace = new Espace();
        $es = $espace->getEspace();

        return $this->post('/espace/'.$es["data"]['id'].'/beta', [
            "espaces_id"    => $es["data"]["id"],
            "modules_id"    => $modules_id
        ]);
    }
}
