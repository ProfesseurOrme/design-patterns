<?php

namespace Pattern\Creational\Factory\Database;

use Pattern\Creational\Factory\Database\DatabaseInterface;

class Sqlite implements DatabaseInterface
{
	public function connect()
	{
		// TODO: Implement specifics Sqlite connect() method.
	}

	public function query()
	{
		return "This is a query from Sqlite";
	}
}