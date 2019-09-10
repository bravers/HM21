<?php


	namespace App\Repositories;


	use App\File;

	class FileRepository extends AbstractRepository {

        /**
         * @return string
         */
        protected function getClassName() : string


		{
			return File::class;
		}


	}
