<?php

	namespace Pattern\Behavioral\Observer;


	use SplObserver;

	class UpdateObserver implements SplObserver
	{
		/**
		 * @inheritDoc
		 */
		public function update(\SplSubject $subject)
		{
			//Do what you want here

			echo("La classe UpdateObserver a été alerté. L'article '" . $subject->getArticle()->getTitle() . "' a été crée.<br />");
		}
	}