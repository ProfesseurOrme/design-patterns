<?php


	namespace Pattern\Creational\Builder;


	class VehicleDirector
	{
		protected $wheels;

		protected $engine;

		protected $doors;

		public function __construct(int $wheels, string $engine, int $doors)
		{
			$this->wheels = $wheels;
			$this->engine = $engine;
			$this->doors = $doors;
		}

		public function build(Builder $builder) : Vehicle
		{
			$vehicle = $builder->setWheels($this->wheels)
				->setEngine($this->engine)
				->setDoors($this->doors)
			;

			return $builder->getVehicle();
		}

	}