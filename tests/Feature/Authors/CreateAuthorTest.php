<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CreateAuthorTest extends TestCase {

	use RefreshDatabase;


	/**
	* @test
	*/
	public function testFail()
	{
		$data = [];

		$this->json('POST', route('authors.store'), $data) -> assertStatus(422);
	}

	/**
	* @test
	*/
	public function testSuccess()
	{
		$data = [
			'name' => 'Автор'
		];

		$this->json('POST', route('authors.store'), $data) -> assertStatus(200);

		$this->assertDatabaseHas(
			'authors',
			$data
		);
	}




}