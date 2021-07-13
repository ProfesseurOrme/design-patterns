<?php


	namespace Pattern\Behavioral\Strategy;


	class ClientWriter
	{
		public $writer;

		public function __construct(WriterInterface $writer)
		{
			$this->writer = $writer;
		}

		public function write($data): string
		{
			return $this->writer->write($data);
		}
	}