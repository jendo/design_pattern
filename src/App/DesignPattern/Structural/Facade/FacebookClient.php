<?php
namespace App\DesignPattern\Structural\Facade;

class FacebookClient
{
    /**
     * @param string $title
     * @param string $url
     */
    public function share(string $title, string $url)
    {
        var_dump(sprintf('Shared post %s with url %s on facebook', $title, $url));
    }
}
