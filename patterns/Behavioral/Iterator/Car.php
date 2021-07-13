<?php

	namespace Pattern\Behavioral\Iterator;


	class Car
	{
		public $name;

		public $model;

		public function __construct(string $name, string $model) {
			$this->name = $name;
			$this->model = $model;
		}

		public function getName(): string
		{
			return $this->name;
		}

		public function getModel(): string
		{
			return $this->model;
		}

		public function getCar(): string
		{
			return "Brand : " . $this->name . ". Model: " .$this->model;
		}
	}