<?php


namespace App\Services;

use App\Repositories\AuthorsRepository;


class Zaeb
{
    protected $authors_repository;

    public function __construct(AuthorsRepository $authors_repository)
    {

        $this->authors_repository = $authors_repository;

    }

    public function store(array $data)
    {
        return $this->authors_repository->store($data);
    }

}
