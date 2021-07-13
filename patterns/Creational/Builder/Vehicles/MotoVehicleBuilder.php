<?php

	namespace Pattern\Creational\Builder\Vehicles;

	use Pattern\Creational\Builder\Builder;
	use Pattern\Creational\Builder\Vehicle;

	class MotoVehicleBuilder implements Builder
	{

		private $vehicle;

		public function __construct(Vehicle $vehicle) {
			$this->vehicle = $vehicle;
		}

		public function setWheels($wheels): MotoVehicleBuilder
		{
			$this->vehicle->wheels = $wheels;

			return $this;
		}

		public function setEngine($engine): MotoVehicleBuilder
		{
			$this->vehicle->engine = $engine;

			return $this;
		}

		public function setDoors($doors): MotoVehicleBuilder
		{
			$this->vehicle->doors = $doors;

			return $this;
		}

		public function getVehicle(): Vehicle
		{
			return $this->vehicle;
		}
	}