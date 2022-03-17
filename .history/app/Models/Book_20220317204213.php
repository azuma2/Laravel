<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    protected $fillable = [
    'uuid', 'name', 'price'
    ];
}
public function fillBook() {
        $book = new Book();
        $uuid = (string)Str::uuid();
        $book->fill([
            'id' => 20,
            'uuid' =>  $uuid,
            'name' => 'FillBook',
            'price' => 1500,
        ]) ;
        $book->save();
    }
    public function createBook() {
        $uuid = (string)Str::uuid();
        Book::create([
            'id' => 20,
            'uuid' =>  $uuid,
            'name' => 'CreateBook',
            'price' => 1200,
        ]);
    } 
    public function insertBook() {
        $book = new Book();
        $uuid = (string)Str::uuid();
        $book::insert([
            'id' => 20,
            'uuid' =>  $uuid,
            'name' => 'InsertBook',
            'price' => 1800,
        ]);