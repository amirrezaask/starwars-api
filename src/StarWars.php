<?php

namespace StarWars;

class StarWars {

	private static function get($uri = "") {
		$baseUrl = "https://swapi.co/api/";
		$url = $baseUrl . $uri;
		$resp = \Requests::get($url);
		return $resp;
	}
	static function __callStatic(string $methodName, $arguments)
	{
		if (count($arguments) != 1)
		{
			throw new \Exception("Wrong number of arguments");
		}
		// methodName would be like : searchPeopleById or searchFilmsByName
		$nameSplitted = explode("By", $methodName);
		$resourceName = strtolower(explode("search",$nameSplitted[0])[1]);
		
		if($nameSplitted[1] == "Id"){
			return self::getResourceById($resourceName, $arguments[0]);
		} elseif ($nameSplitted[1] == "Name") {
			return self::searchResource($resourceName, $arguments[0]);
		}
		else {
			throw new \Exception("Method not defined ");
		}
	}

	protected static function getSchema(string $resource)
	{
		return self::get($resource . "/schema");
	}
	protected static function getResourceById(string $resource,int $id)
	{
		return self::get($resource . "/" . $id);
	}
	protected static function searchResource(string $resource, string $query)
	{
		return self::get($resource . "/?search" . $query);
	}

}