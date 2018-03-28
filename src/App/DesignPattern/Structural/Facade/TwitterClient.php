<?php
namespace App\DesignPattern\Structural\Facade;

class TwitterClient
{
    /**
     * @param string $status
     * @param string $url
     */
    public function tweet(string $status, string $url)
    {
        var_dump(sprintf('Tweeted: %s from url: %s', $status, $url));
    }
}
