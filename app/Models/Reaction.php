<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reaction extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'reactions';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
    ];

    /**
     * Define the relationship with the post reactions table
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany<PostReaction>
     */
    public function postReactions()
    {
        return $this->hasMany(PostReaction::class, 'reaction_id', 'id');
    }

    /**
     * Scope a query by it's name
     *
     * @param  \Illuminate\Database\Eloquent\Builder<Reaction>  $query
     * @return \Illuminate\Database\Eloquent\Builder<Reaction>
     */
    public function scopeStrictByName(Builder $query, string $name)
    {
        return $query->where('name', '=', $query);
    }
}
