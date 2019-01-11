# StarWars PHP Client

simple php client for [StarWars Api](https://swapi.co)

## Usage

```php
<?php

require_once __DIR__ . "/vendor/autoload.php";


use StarWars\StarWars;

// Call methods in this format search{resourceName}By{Id|Name}
// example:
StarWars::searchFilmsById(1)
StarWars::searchPeopleByName("Luke SkyWalker")

```