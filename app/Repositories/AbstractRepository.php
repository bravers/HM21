<?php

	namespace App\Repositories;

	abstract class AbstractRepository
	{

		protected abstract function getClassName() : string;

		public function store(array $data)
		{
			$class = $this->getClassName();


			$model = new $class();
			$model ->fill($data);
			$model ->save();
			$model ->fresh();

			return $model;
		}


        public function destroy(array $data)
        {
            $class = $this->getClassName();
            $model = new $class();
            $model ->fill($data);
            $model ->delete();
            $model ->fresh();
            return $model;
        }

	}
