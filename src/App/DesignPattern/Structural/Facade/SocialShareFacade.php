<?php
namespace App\DesignPattern\Structural\Facade;

class SocialShareFacade
{
    /**
     * @var FacebookClient
     */
    private $facebookClient;

    /**
     * @var GoogleClient
     */
    private $googleClient;

    /**
     * @var TwitterClient
     */
    private $twitterClient;

    /**
     * @param FacebookClient $facebookClient
     * @param GoogleClient $googleClient
     * @param TwitterClient $twitterClient
     */
    public function __construct(FacebookClient $facebookClient, GoogleClient $googleClient, TwitterClient $twitterClient)
    {
        $this->facebookClient = $facebookClient;
        $this->googleClient = $googleClient;
        $this->twitterClient = $twitterClient;
    }

    /**
     * @param string $facebookTitle
     * @param string $tweetStatus
     * @param string $url
     */
    public function share(string $facebookTitle, string $tweetStatus, string $url)
    {
        $this->facebookClient->share($facebookTitle, $url);
        $this->googleClient->share($url);
        $this->twitterClient->tweet($tweetStatus, $url);
    }
}
