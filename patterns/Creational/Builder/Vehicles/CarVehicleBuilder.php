<?php

	namespace Pattern\Creational\Builder\Vehicles;

	use Pattern\Creational\Builder\Builder;
	use Pattern\Creational\Builder\Vehicle;

	class CarVehicleBuilder implements Builder
	{

		private $vehicle;

		public function __construct(Vehicle $vehicle) {
			$this->vehicle = $vehicle;
		}

		public function setWheels($wheels): CarVehicleBuilder
		{
			$this->vehicle->wheels = $wheels;

			return $this;

		}

		public function setEngine($engine): CarVehicleBuilder
		{
			$this->vehicle->engine = $engine;

			return $this;
		}

		public function setDoors($doors): CarVehicleBuilder
		{
			$this->vehicle->doors = $doors;

			return $this;
		}

		public function getVehicle(): Vehicle
		{
			return $this->vehicle;
		}
	}