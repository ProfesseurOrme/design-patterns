<?php

	namespace Pattern\Structural\Adapter;

	interface EBookInterface
	{
		public function unlock() : string;

		public function goToNext() : string;

		public function typeSomething() : string;
	}