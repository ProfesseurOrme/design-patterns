<?php

	namespace Pattern\Structural\Fluent;


	class QueryBuilder
	{
		protected $fields = [];

		protected $conditions = [];

		protected $from = [];

		public function select(): QueryBuilder
		{
			$this->fields = func_get_args();

			return $this;
		}

		public function from($table, $alias = null): QueryBuilder
		{
			if(is_null($alias)) {
				$this->from[] = $table;
			} else {
				$this->from[] = "$table AS $alias";
			}

			return $this;
		}

		public function where(): QueryBuilder
		{
			foreach (func_get_args() as $arguments) {
				$this->conditions[] = $arguments;
			}

			return $this;
		}

		public function __toString(){
			return 'SELECT '. implode(', ', $this->fields). ' FROM ' . implode(', ', $this->from). ' WHERE ' . implode(' AND ', $this->conditions);
		}
	}