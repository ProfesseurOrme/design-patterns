<?php

	namespace Pattern\Structural\DependencyInjection;

	use Pattern\Structural\DependencyInjection\Address;

	class Person {

		private $address;

		public function __construct(Address $address) {
			$this->address = $address;
		}

		public function getAddress() {
			return $this->address;
		}
	}