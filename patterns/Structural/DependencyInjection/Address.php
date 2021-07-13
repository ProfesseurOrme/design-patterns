<?php

	namespace Pattern\Structural\DependencyInjection;

	class Address
	{
		private $number;
		private $phone;
		private $address;
		private $zipCode;

		public function __construct($number, $phone, $address, $zipCode)
		{
			$this->number = $number;
			$this->phone = $phone;
			$this->address = $address;
			$this->zipCode = $zipCode;
		}

		public function getFullAddress() {
			return "Number : " . $this->number . ', ' . $this->address . ". Zip Code : "  . $this->zipCode . ". Tel : " .$this->phone . ".";
		}
	}