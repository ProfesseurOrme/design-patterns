<?php


	namespace Pattern\Structural\Adapter;


	class Book implements BookInterface
	{

		public function open(): string
		{
			return "Vous venez d'ouvrir le livre";
		}

		public function nextPage(): string
		{
			return "Vous tournez la page";
		}

		public function writeSomething(): string
		{
			return "Vous écrivez quelque chose dans votre livre";
		}
	}