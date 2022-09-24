<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'body', 'user_id', 'parent_id'];
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function Parent()
    {
        return $this->belongsTo(Post::class, 'parent_id', 'id');
    }

    public function Children()
    {
        return $this->HasMany(Post::class, 'parent_id', 'id');
    }

    public function likes()
    {
        return $this->belongsToMany(User::class, 'post_likes', 'post_id', 'user_id');
    }
}
