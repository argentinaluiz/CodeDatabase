<?php


namespace CodePress\CodeDatabase\Model;


use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "codepress_categories";

    protected $fillable = ['name', 'description'];
}