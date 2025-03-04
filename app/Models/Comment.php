<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'content',
        'postId',
        'userId'
        ];

    // Define the relationship between Comment and Post
    public function post()
    {
        return $this->belongsTo(Post::class, 'postId');
    }

    // Define the relationship between Comment and User
    public function user()
    {
        return $this->belongsTo(User::class, 'userId');
    }
}

?>