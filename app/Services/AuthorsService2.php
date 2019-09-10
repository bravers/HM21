<?php

namespace App\Services;

use App\Repositories\AuthorsRepository;


class AuthorsService2
{


    protected $authors_repository;

    protected $file_service;

    public function __construct(AuthorsRepository $authors_repository, FileService $file_service)
    {

        $this->authors_repository = $authors_repository;
        $this->file_service = $file_service;

    }

    public function store (array $data)
    {

        $model = $this->authors_repository->store(

        	['name'=> $data['name']]
        );


        if($data['file'] ?? null){

        	$this->file_service->store($model,$data['file']);

        }
        return $model;
    }

}
