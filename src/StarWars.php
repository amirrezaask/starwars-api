<?php

namespace FunRest;

class StarWars {

	private static function get($uri = "") {
		$baseUrl = "https://swapi.co/api/";
		$url = $baseUrl . $uri;
		$resp = \Requests::get($url);
		return json_encode($resp);
	}

	/**
	 * gets all available data on this API
	 *
	 * @return string encoded json of response 
	 */
	static function getAllAvailData() {
		return self::get();
	}
	/**
	 * gets json schema of given resource name
	 *
	 * @param string $resource
	 * @return void
	 */
	static function getSchema(string $resource)
	{
		return self::get($resource . "/schema");
	}

	static function getResourceById(string $resource,int $id)
	{
		return self::get($resource . "/" . $id);
	}
	static function searchResource(string $resource, string $query)
	{
		return self::get($resource . "/?search" . $query);
	}

}