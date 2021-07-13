<?php

	namespace Pattern\Structural\DependencyInjection;

	use Pattern\Structural\DependencyInjection\Address;
	use Pattern\Structural\DependencyInjection\Person;

	class PersonFactory {

		public function createPerson($number, $phone, $address, $zipCode): Person
		{
			$address = new Address($number, $phone, $address, $zipCode);

			return new Person($address);
		}
	}