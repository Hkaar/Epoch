<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    use HasFactory, HasUuids;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'replies';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'comment_id',
        'content',
    ];

    /**
     * Define the relationship with the users table
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo<User, Reply>
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    /**
     * Define the relationship with the comments table
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo<Comment, Reply>
     */
    public function comment()
    {
        return $this->belongsTo(Comment::class, 'comment_id', 'id');
    }
}
