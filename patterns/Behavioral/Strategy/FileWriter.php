<?php


	namespace Pattern\Behavioral\Strategy;


	class FileWriter implements WriterInterface
	{

		public function write($data): string
		{
			return "You're writing in a <strong>" . $data . "</strong>.";
		}
	}