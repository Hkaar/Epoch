<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory, HasUuids;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'notifications';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'content',
        'notification_type_id',
        'user_id',
    ];

    /**
     * Define the relationship with notification types
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo<NotificationType, Notification>
     */
    public function type()
    {
        return $this->belongsTo(NotificationType::class, 'notification_type_id', 'id');
    }

    /**
     * Define the relationship with users
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo<User, Notification>
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
