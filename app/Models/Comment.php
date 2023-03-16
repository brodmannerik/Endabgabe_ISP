<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

   // Relationship With Podcasts
    public function podcasts() {
        return $this->belongsTo(Podcast::class, 'podcast_id');
    }
}
