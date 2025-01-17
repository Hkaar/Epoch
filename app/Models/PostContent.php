<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostContent extends Model
{
    use HasUuids, HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'post_contents';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'post_id',
        'content_type_id',
        'content',
    ];

    /**
     * Define the relationship with the content types table
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo<ContentType, PostContent>
     */
    public function type()
    {
        return $this->belongsTo(ContentType::class, 'content_type_id', 'id');
    }

    /**
     * Define the relationship with the posts table
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo<Post, PostContent>
     */
    public function post()
    {
        return $this->belongsTo(Post::class, 'post_id', 'id');
    }
}
