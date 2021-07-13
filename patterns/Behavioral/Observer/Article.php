<?php
	namespace Pattern\Behavioral\Observer;

	class Article {

		public $title;

		public function getTitle() {
			return $this->title;
		}

		public function setTitle(string $title) {
			$this->title = $title;
		}
	}