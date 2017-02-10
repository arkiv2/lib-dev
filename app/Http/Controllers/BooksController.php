<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function index()
    {
    	return Book::first();
    }

    public function show($id)
    {
    	dd($id);
    }
}
