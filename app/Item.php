<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Item extends Model
{
    protected $fillable = [
        'title', 'price', 'image', 'content'
    ];

    public static function add($fields)
    {
        $item = new static;
        $item->fill($fields);
        $item->save();

        return $item;
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function edit($fields)
    {
        $this->fill($fields);
        $this->save();
    }

    public function remove()
    {
        $this->removeImage();
        $this->delete();
    }

    public function removeImage()
    {
        if ($this->image != null) {
            Storage::delete('uploads/' . $this->image);
        }
    }

    public function uploadImage($image)
    {
        if ($image == null) {
            return;
        }

        $this->removeImage();
        $filename = str_random(10) . '.' . $image->extension();
        $image->storeAs('uploads', $filename);
        $this->image = $filename;
        $this->save();
    }

    public function getImage()
    {
        if ($this->image == null) {
            return '/img/no-image.png';
        }
        return '/uploads/' . $this->image;
    }

    public function setCategory($id)
    {
        if ($id == null) {
            return;
        }
        $this->category_id = $id;
        $this->save();
    }

    public function getCategoryTitle()
    {
        return ($this->category != null)
            ? $this->category->title
            : 'Нет категории';
    }

    public function getCategoryID()
    {
        return $this->category != null ? $this->category->id : null;
    }
}
