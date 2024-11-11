<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NotificationType extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'notification_types';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
    ];

    /**
     * Define the relationship with notifications
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany<Notification>
     */
    public function notifications()
    {
        return $this->hasMany(Notification::class, 'notification_type_id', 'id');
    }

    /**
     * Scope a query by the given name
     *
     * @param  \Illuminate\Database\Eloquent\Builder<NotificationType>  $query
     * @return \Illuminate\Database\Eloquent\Builder<NotificationType>
     */
    public function scopeStrictByName(Builder $query, string $name)
    {
        return $query->where('name', '=', $name);
    }
}
