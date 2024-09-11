<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'posts';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'content',
    ];

    /**
     * Define the relationship with the users table
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany<User>
     */
    public function users()
    {
        return $this->belongsToMany(User::class, 'user_posts');
    }

    /**
     * Define the relationship with the comments table
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany<Comment>
     */
    public function comments()
    {
        return $this->hasMany(Comment::class, 'comment_id', 'id');
    }

    /**
     * Define the relationship with the post contents table
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany<PostContent>
     */
    public function contents()
    {
        return $this->hasMany(PostContent::class, 'post_id', 'id');
    }
}
