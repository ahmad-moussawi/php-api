<?php

class Twitter {

    private $settings = array(
        'oauth_access_token' => "628746897-7G4cbAk9ZW0KM6ptsQXc5KnlS3c5SHTWvfjNLsV7",
        'oauth_access_token_secret' => "h6hftB40TUZijIwHa4AbCHASkb4rqjzxSohOeQsqdTzD8",
        'consumer_key' => "ByepCYBxvsKxl3hzQ59AD5ymq",
        'consumer_secret' => "fKbuOZmL1jwuY1se30FRidOga8esE6qN8s1CSV4vt7K6cloqey"
    );

    function __construct() {
        
    }

    public function get($url, $params = '') {
        $twitter = new TwitterAPIExchange($this->settings);
        return $twitter->setGetfield($params)
                        ->buildOauth($url, 'GET')
                        ->performRequest();
    }

    public function post($url, $params = array()) {
        $twitter = new TwitterAPIExchange($settings);
        return $twitter->buildOauth($url, 'POST')
                        ->setPostfields($params)
                        ->performRequest();
    }

}
