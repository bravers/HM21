<?php

namespace App\Http\Controllers;

use App\Author;
use App\Http\Requests\StoreAuthorRequest;
use App\Services\AuthorsService2;

class AuthorsController extends Controller
{

    protected $authors_service;


    /**
     * AuthorsController constructor.
     */
    public function __construct(AuthorsService2 $authors_service)
    {

        $this->authors_service = $authors_service;

    }

    public function store(StoreAuthorRequest $request)
    {
    	$data = $request->all();

    	$this->authors_service->store($data);

    	return response()->json([
    		'success' => true
    	]);
    }

    public function show(StoreAuthorRequest $request){

        $data = $request->all();


        $this->authors_service->store($data);

        return response()->json([
            'success' => true
        ]);

    }

    public function update(StoreAuthorRequest $request, Author $author)
    {
    	$data = $request->only(['name']);

    	$author->fill($data);
    	$author->save();

    	return response()->json([
    		'success' => true
    	]);
    }

    public function delete(Author $author)
    {
    	$author->delete();

    	return response()->json([
    		'success' => true
    	]);
    }

    public function index()
    {
    	$authors = Author::all();

    	return $authors;
    }


}
