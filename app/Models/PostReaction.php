<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostReaction extends Model
{
    use HasUuids, HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'post_reactions';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'post_id',
        'reaction_id',
    ];

    /**
     * Define the relationship with the users table
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo<User, PostReaction>
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    /**
     * Define the relationship with the posts table
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo<Post, PostReaction>
     */
    public function post()
    {
        return $this->belongsTo(Post::class, 'post_id', 'id');
    }

    /**
     * Define the relationship with the reactions table
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo<Reaction, PostReaction>
     */
    public function reaction()
    {
        return $this->belongsTo(Reaction::class, 'reaction_id', 'id');
    }
}
