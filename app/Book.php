<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public static function findByID($id)
    {
    	return Book::where('id', $id)->first();
    }
}
