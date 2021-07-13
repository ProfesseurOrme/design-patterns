<?php
namespace Pattern\Creational\Factory;

class DatabaseFactory {

	public static function create($db) {
		try {

			$className = "Pattern\\Creational\\Factory\\Database\\" . ucfirst($db);

			return new $className();

		} catch (\Exception $exception) {
			return "Unknown database";
		}
	}
}