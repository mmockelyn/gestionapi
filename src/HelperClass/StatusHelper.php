<?php


namespace Gestion\API\HelperClass;


class StatusHelper
{
    public static function stateIncidentIcon($state)
    {
        switch ($state)
        {
            case 0: return 'fa fa-search'; break;
            case 1: return 'fa fa-warning'; break;
            case 2: return 'fa fa-eye'; break;
            case 3: return 'fa fa-edit'; break;
            case 4: return 'fa fa-check-circle'; break;
            default: return 'fa fa-times-circle'; break;
        }
    }

    public static function stateIncidentColor($state)
    {
        switch ($state)
        {
            case 0: return "primary"; break;
            case 1: return "info"; break;
            case 2: return "warning"; break;
            case 3: return "warning"; break;
            case 4: return "success"; break;
            default: return "secondary"; break;
        }
    }

    public static function stateIncidentText($state)
    {
        switch ($state)
        {
            case 0: return "Examen de la cause en cours..."; break;
            case 1: return "Panne identifié"; break;
            case 2: return "Surveillance en cours"; break;
            case 3: return "Correction en cours"; break;
            case 4: return "Clôturer"; break;
            default: return "Inconnue"; break;
        }
    }
}
