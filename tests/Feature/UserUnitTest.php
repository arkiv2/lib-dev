<?php

namespace Tests\Feature;

use App\Book;
use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UserUnitTest extends TestCase
{
	Use DatabaseTransactions;
    /**
     * @test
     *
     * @return void
     */
    public function it_can_borrow_a_book()
    {
     	$user = factory(User::class)->create(['name' => 'Onin']);
     	$book = factory(Book::class)->create(['title' => 'PHPSpec']);
     	$user->borrow($book);

     	$this->assertDatabasehas('book_user', [
     		'user_id' => $user->id,
     		'book_id' => $book->id,
     	]);
    }

    /**
     * @test
     *
     * @return void
     */
    public function it_can_return_a_book()
    {
        $user = factory(User::class)->create(['name' => 'Onin']);
     	$book = factory(Book::class)->create(['title' => 'PHPSpec']);
     	$user->return($book);
    }
}
