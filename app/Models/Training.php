<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    use HasFactory;

    protected $appends = ['tags'];

    public function tags()
    {
        return $this->morphMany(Tag::class, 'taggable');
    }

    public function getTagsAttribute()
    {
        return $this->tags()->pluck('name')->toArray();
    }
}
