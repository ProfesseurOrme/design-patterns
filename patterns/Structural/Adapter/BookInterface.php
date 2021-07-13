<?php

	namespace Pattern\Structural\Adapter;

	interface BookInterface
	{
		public function open() : string;

		public function nextPage() : string;

		public function writeSomething() : string;
	}