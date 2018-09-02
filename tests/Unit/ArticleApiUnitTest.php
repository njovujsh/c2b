<?php

namespace Tests\Unit;

use Tests\TestCase;

class ArticleApiUnitTest extends TestCase {
	/**
	 * A basic test example.
	 *
	 * @return void
	 */
	public function testExample() {
		$this->assertTrue ( true );
	}
	public function testcancreatartical() {
		{
			$data = [ 
					'title' => $this->faker->sentence,
					'content' => $this->faker->paragraph 
			];
			// $this->post ( route ( 'articles.store' ), $data )->assertStatus ( 201 )->assertJson ( $data );
			$this->post ( "api/v1/articles", $data )->assertStatus ( 201 )->assertJsonStructure ( array_keys ( $data ), $data );
		}
	}
}
