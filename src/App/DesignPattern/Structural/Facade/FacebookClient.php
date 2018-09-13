<?php
namespace App\DesignPattern\Structural\Facade;

use Tracy\Debugger;

class FacebookClient
{

    /**
     * @param string $title
     * @param string $url
     */
    public function share(string $title, string $url)
    {
        Debugger::dump(sprintf('Shared post %s with url %s on facebook', $title, $url));
    }
}
