<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    public function getBodyHtmlAttribute()
    {
        return \Parsedown::instance()->text($this->body);
    }

    public function getCreatedDateAttribute(){
        return $this->created_at->diffForHumans();
    }
}
