<?php

namespace Tests\Unit;

use App\Book;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class BookModelTest extends TestCase
{
	use DatabaseTransactions;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_it_can_find_book_by_its_id()
    {
        $book = factory(Book::class)->create(['title' => 'This is a book']);
        $queriedBook = Book::findByID(2);

        $this->assertEquals($queriedBook->id, $book->id);
        $this->assertEquals($queriedBook->title, $book->title);
    }
}
