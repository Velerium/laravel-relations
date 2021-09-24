<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function Article() {
        return $this->belongsToMany(Article::class);
    }
}
