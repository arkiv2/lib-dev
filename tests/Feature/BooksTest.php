<?php

namespace Tests\Feature;

use App\Book;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class BooksTest extends TestCase
{
	use DatabaseTransactions;
	
    /**
     * Test it_shows_all_books
     *
     * @return void
     */
    public function test_it_shows_all_books()
    {
       	$book = factory(Book::class)->create(['title' => 'Book1']);

       	$this->get('/api/books')
       		->assertStatus(200)
       		->assertJson([
       			'title' => 'Book1',
       		]);
    }

    /**
     * Test it_shows_a_single_book
     *
     * @return void
     */
    public function it_shows_a_single_book()
    {
       	$book = factory(Book::class)->create(['title' => 'Book1']);

    	$this->get('/api/books/1')
    		 ->assertStatus(200)
    		 ->assertJson([
    		 	'id'	=> '1',
    		 	'title' => 'Book1',
    		 ]);
    }
}
