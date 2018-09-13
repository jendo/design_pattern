<?php
namespace App\DesignPattern\Structural\Facade;

use Tracy\Debugger;

class GoogleClient
{

    /**
     * @param string $url
     */
    public function share(string $url)
    {
        Debugger::dump(sprintf('Shared on Google plus: %s', $url));
    }
}
