<?php

	namespace Pattern\Behavioral\Observer;

	use SplObjectStorage;
	use SplSubject;

	class ArticleManager implements SplSubject
	{
		private $article;

		protected $observers;

		public function __construct() {
			$this->observers = new SplObjectStorage();
		}

		/**
		 * @inheritDoc
		 */
		public function attach(\SplObserver $observer)
		{
			$this->observers->attach($observer);
		}

		/**
		 * @inheritDoc
		 */
		public function detach(\SplObserver $observer)
		{

			$this->observers->detach($observer);
		}

		/**
		 * @inheritDoc
		 */
		public function notify()
		{
			foreach ($this->observers as $observer) {
				$observer->update($this);
			}
		}

		/**
		 * Crée un article dans la base de données et alerte les observateurs.
		 *
		 * @param Article $article
		 */
		public function create(Article $article)
		{
			$this->article = $article;

			// Ici dans un cas réel, la méthode va insérer l'article en base

			// Une fois tous les traitements effectués, on alerte les observateurs
			$this->notify();
		}

		/**
		 * @return Article
		 */
		public function getArticle(): Article
		{
			return $this->article;
		}
	}