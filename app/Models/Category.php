<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $appends = ['tags'];

    public function tags()
    {
        return $this->morphMany(Tag::class, 'taggable');
    }

    /**
     * Get all of the category's attachments
     */
    public function attachment()
    {
        return $this->morphOne(Attachment::class, 'attachable');
    }

    public function getTagsAttribute()
    {
        return $this->tags()->pluck('name')->toArray();
    }
}
