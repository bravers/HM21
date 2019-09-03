<?php


	namespace App\Repositories;


	use App\Author;

	class AuthorsRepository extends AbstractRepository {

        /**
         * @return string
         */
        protected function getClassName() : string


		{
			return Author::class;
		}


	}
