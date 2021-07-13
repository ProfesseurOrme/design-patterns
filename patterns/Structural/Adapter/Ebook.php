<?php


	namespace Pattern\Structural\Adapter;


	use Pattern\Structural\Adapter\EBookInterface;

	class Ebook implements EBookInterface
	{

		public function unlock(): string
		{
			return "Vous venez de déverouiller votre appareil";
		}

		public function goToNext(): string
		{
			return "Vous appuyez sur le bouton suivant";
		}

		public function typeSomething(): string
		{
			return "Vous entrez de nouvelles données dans votre livre";
		}
	}