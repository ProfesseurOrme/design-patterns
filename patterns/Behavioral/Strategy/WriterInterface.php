<?php


	namespace Pattern\Behavioral\Strategy;


	interface WriterInterface
	{
		public function write($data) : string;
	}