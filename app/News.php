<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = [
        'title', 'image', 'content'
    ];

    public static function add($fields)
    {
        $news = new static;
        $news->fill($fields);
        $news->save();
    }

    public function edit($fields)
    {
        $this->fill($fields);
        $this->save();
    }

    public function remove()
    {
        Storage::delete('uploads/news/', $this->image);
        $this->delete();
    }

    public function uploadImage($image)
    {
        if ($image == null) {
            return;
        }
        Storage::delete('uploads/news/', $this->image);
        $filename = str_random(10) . '.' . $image->extension();
        $image->saveAs('uploads/news', $filename);
        $this->image = $filename;
        $this->save();
    }

    public function getImage()
    {
        if ($this->image == null) {
            return '/img/no-image.png';
        }
        return 'uploads/news/' . $this->image;
    }
}
