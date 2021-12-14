<?php

namespace App\Services;

class Twitter
{
    private $apiKey;

    public function __construct($apiKey)
    {
        $this->apiKey = $apiKey;
    }

    public function tweet($text)
    {
        $newString = $text.$this->apiKey;
        dd($newString);
    }
}
