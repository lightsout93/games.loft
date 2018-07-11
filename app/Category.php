<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['title'];

    public function items()
    {
        return $this->hasMany(Item::class);
    }

    public static function add($title)
    {
        $category = new static;
        $category->title = $title;
        $category->save();
    }

    public function edit($fields)
    {
        $this->fill($fields);
        $this->save();
    }

    public function remove()
    {
        $this->delete();
    }
}
