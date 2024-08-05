<?php

namespace App\Models\Entity;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\AppAuthenticatable;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends AppAuthenticatable
{
    use Notifiable, HasFactory, SoftDeletes;

    const ROLE_OG       = 'OPERATOR GUDANG';
    const ROLE_KG      = 'KEPALA GUDANG';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'users';

    protected $keyType = 'string';
    public $incrementing = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'role',
        'password',
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
    ];
}
