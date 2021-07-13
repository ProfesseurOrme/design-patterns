<?php


	namespace Pattern\Behavioral\Strategy;


	class APIWriter implements WriterInterface
	{

		public function write($data) : string
		{
			return "You're writing in a <strong>" . $data . "</strong>.";
		}
	}