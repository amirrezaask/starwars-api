<?php



namespace FunRest;


class StarWars
{

    function __construct()
    {
    }
    private static function sendGET($uri)
    {
        $baseUrl = "https://swapi.co/api/";
        $url = $baseUrl . $uri;
        $resp = \Requests::get($url);
        return $resp;
    }


    static function getAllAvailData() 
    {
        return self::sendGET("");
    }
}