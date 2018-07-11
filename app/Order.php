<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function user()
    {
        return $this->hasOne(User::class);
    }

    public function item()
    {
        return $this->hasOne(Item::class);
    }

    public function setUser($id)
    {
        if ($id == null) {
            return;
        }
        $this->user_id = $id;
        $this->save();
    }

    public function setItem($id)
    {
        if ($id == null) {
            return;
        }
        $this->item_id = $id;
        $this->save();
    }
}
