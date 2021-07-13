<?php

	namespace Pattern\Creational\Factory\Database;

	interface DatabaseInterface {
		public function connect();
		public function query();
	}