<?php

namespace Kanboard\Plugin\TNID;

use Kanboard\Core\Plugin\Base;

class Plugin extends Base
{
    public function initialize()
    {
        $this->template->hook->attach("template:task:details:first-column",
            "TNID:task/number");
    }

    public function getPluginName()
    {
        return 'TaskNumberInDetails';
    }

    public function getPluginDescription()
    {
        return 'Add the Tasknumber to the details';
    }

    public function getPluginAuthor()
    {
        return 'Tomas Dittmann';
    }

    public function getPluginVersion()
    {
        return '1.0.0';
    }
    
    public function getPluginHomepage()
    {
        return "https://github.com/Chaosmeister/TNID"
    }
}
