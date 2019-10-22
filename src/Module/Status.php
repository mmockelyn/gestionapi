<?php


namespace Gestion\API;


class Status extends API
{
    public function groupList()
    {
        return $this->get('/support/status/group/list');
    }

    public function incidentDays()
    {
        return $this->get('/support/status/incident/days');
    }

    public static function getInfoComponentField($component_id, $field)
    {
        $component = self::getStatic('/support/status/component/'.$component_id);
        return $component;
    }

    public static function countComponentOperationnal($group_id)
    {
        return self::getStatic('/support/status/group/'.$group_id.'/component/countGreen');
    }

    public static function countComponentOrange($group_id)
    {
        return self::getStatic('/support/status/group/'.$group_id.'/component/countOrange');
    }

    public static function countComponentRed($group_id)
    {
        return self::getStatic('/support/status/group/'.$group_id.'/component/countRed');
    }

    public static function stateComponent($state)
    {
        switch ($state)
        {
            case 0: return 'color--success'; break;
            case 1: return 'color--primary'; break;
            case 2: return 'color--warning'; break;
            case 3: return 'color--error'; break;
        }
    }

    public static function stateComponentTitle($state)
    {
        switch ($state)
        {
            case 0: return 'Opérationnel'; break;
            case 1: return 'Problème de performance'; break;
            case 2: return 'Panne Partielle'; break;
            case 3: return 'Panne Majeure'; break;
        }
    }


}
