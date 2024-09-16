<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $fillable=[
        'author_id',
        'title',
        'synopsis',
        'avatar',
        'donwload',
        'due_date',
        'categorie_id',
        'file'
    ];
    public function author(){
        return $this->hasOne(Author::class, 'id', 'author_id')->with('user');
    }
    public function categorie(){
        return $this->hasMany(Categorie::class, 'id', 'categorie_id');
    }
}
