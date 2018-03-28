<?php
namespace App\DesignPattern\Structural\Facade;

class GoogleClient
{
    /**
     * @param string $url
     */
    public function share(string $url)
    {
        var_dump(sprintf('Shared on Google plus: %s', $url));
    }
}
