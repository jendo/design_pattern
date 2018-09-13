<?php
namespace App\DesignPattern\Structural\Facade;

use Tracy\Debugger;

class TwitterClient
{

    /**
     * @param string $status
     * @param string $url
     */
    public function tweet(string $status, string $url)
    {
        Debugger::dump(sprintf('Tweeted: %s from url: %s', $status, $url));
    }
}
