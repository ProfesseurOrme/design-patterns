<?php

	namespace Pattern\Behavioral\Iterator;


	use Pattern\Behavioral\Iterator\Car;

	class CarIterator implements \Countable, \Iterator
	{

		private $cars= [];
		private $i= 0;

		public function addCar(Car $car) {
			$this->cars[] = $car;
		}

		public function removeCar(Car $car) {
			foreach ($this->cars as $value => $key) {
				if($car->getCar() === $value->getCar()) {
					unset($this->cars[$key]);
				}
			}

			$this->cars = array_values($this->cars);
		}

		public function count() : int
		{
			return count($this->cars);
		}

		public function current() : Car
		{
			return $this->cars[$this->i];
		}

		public function key() : int
		{
			return $this->i;
		}

		public function next()
		{
			$this->i++;
		}

		public function rewind()
		{
			$this->i = 0;
		}

		public function valid() : bool
		{
			return isset($this->cars[$this->i]);
		}
	}