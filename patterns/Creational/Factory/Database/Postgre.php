<?php
	namespace Pattern\Creational\Factory\Database;

	use Pattern\Creational\Factory\Database\DatabaseInterface;

	class Postgre implements DatabaseInterface {

		public function connect()
		{
			// TODO: Implement specifics Postgre connect() method.
		}
		public function query()
		{
			return "This is a query from Postgre";
		}
	}