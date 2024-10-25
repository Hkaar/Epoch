<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use App\Enum\RoleEnum;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'username',
        'name',
        'email',
        'password',
        'role_id',
        'img',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    /**
     * Define the relationship with the roles table
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo<Role, User>
     */
    public function role()
    {
        return $this->belongsTo(Role::class, 'role_id', 'id');
    }

    /**
     * Define the relationship with the user following table for followers
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany<User>
     */
    public function followers()
    {
        return $this->belongsToMany(User::class, 'user_following', 'user_id', 'follower_id');
    }

    /**
     * Define the relationship with the user following table for following
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany<User>
     */
    public function following()
    {
        return $this->belongsToMany(User::class, 'user_following', 'follower_id', 'user_id');
    }

    /**
     * Definne the relationship with posts
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany<Post>
     */
    public function posts()
    {
        return $this->hasMany(Post::class, 'user_id', 'id');
    }

    /**
     * Define the relationship with the comments table
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany<Comment>
     */
    public function comments()
    {
        return $this->hasMany(Comment::class, 'user_id', 'id');
    }

    /**
     * Define the relationship with the replies table
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany<Reply>
     */
    public function replies()
    {
        return $this->hasMany(Reply::class, 'user_id', 'id');
    }

    /**
     * Define the relationship with the replies table
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany<Notification>
     */
    public function notifications()
    {
        return $this->hasMany(Notification::class, 'user_id', 'id');
    }

    /**
     * THIS IS DEPRECATED DO NOT USE THIS!!
     * 
     * Checks if the user has a certain role
     *
     * @param  array<string>|string  $roles
     */
    public function checkRole($roles): bool
    {
        if (is_string($roles)) {
            return $this->role->name === $roles;
        }

        return in_array($this->role->name, $roles, true);
    }

    /**
     * Scope a query by including the given roles
     */
    public function scopeByIncludingJabatan(Builder $query, array|RoleEnum|int $roles)
    {
        $roles = is_array($roles) ? $roles : [$roles];

        $roles = array_map(function ($type) {
            return $type instanceof RoleEnum ? $type->value : $type;
        }, $roles);

        return $query->whereIn('role_id', $roles);
    }

    /**
     * Check if the user has a role that is privileged
     * 
     * @param array<RoleEnum|int>|int|RoleEnum
     */
    public function checkPermission(int|array|RoleEnum $roles): bool
    {
        $roles = is_array($roles) ? $roles : [$roles];

        $roles = array_map(function ($type) {
            return $type instanceof RoleEnum ? $type->value : $type;
        }, $roles);

        return in_array($this->role_id, $roles);
    }
}
