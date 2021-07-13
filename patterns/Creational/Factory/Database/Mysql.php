<?php

	namespace Pattern\Creational\Factory\Database;

	use Pattern\Creational\Factory\Database\DatabaseInterface;

	class Mysql implements DatabaseInterface {

		public function connect()
		{
			// TODO: Implement specifics MySQL connect() method.
		}

		public function query()
		{
			return "This is a query from MySQL";
		}
	}