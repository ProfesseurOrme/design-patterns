<?php


	namespace Pattern\Creational\Builder;


	interface Builder
	{
		public function setWheels(int $wheels);

		public function setEngine(string $engine);

		public function setDoors(int $doors);

		public function getVehicle() : Vehicle;

	}