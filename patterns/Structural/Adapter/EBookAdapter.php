<?php

	namespace Pattern\Structural\Adapter;

	use Pattern\Structural\Adapter\EBookInterface;
	use Pattern\Structural\Adapter\BookInterface;

	class EBookAdapter implements BookInterface
	{

		public $eBook;

		public function __construct(EBookInterface $eBook) {
			$this->eBook = $eBook;
		}

		public function open() : string
		{
			 return $this->eBook->unlock();
		}

		public function nextPage() : string
		{
			return $this->eBook->goToNext();
		}

		public function writeSomething() : string
		{
			return $this->eBook->typeSomething();
		}
	}