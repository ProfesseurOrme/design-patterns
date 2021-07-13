<?php

namespace Pattern\Creational\Singleton;

class Singleton {

	private $settings = [];

	private static $_instance;

	/**
	 * Singleton constructor. Prevents instantiation outside the class.
	 */
	private function __construct() {
		$this->settings = require "config.php";
	}

	/**
	 * Prevents instance duplication.
	 */
	private function __clone() {}

	/**
	 * Create and/or fetch class instance.
	 * @return Singleton
	 */
	public static function getInstance(): Singleton
	{
		if(is_null(self::$_instance)) {
			self::$_instance = new Singleton();
		}

		return self::$_instance;
	}

	/**
	 * Use case of database identifier retrieval by the correspondate key.
	 * @param $key
	 * @return mixed
	 */
	public function get($key) {
	 	return (!isset($this->settings[$key]) ? null : $this->settings[$key]);
	}
}