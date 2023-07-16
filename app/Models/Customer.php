<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model implements Authenticatable
{
   
    protected $table = 'customer';
    const UPDATED_AT = null;
    const CREATED_AT = NULL;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'customer_fullname',
        'customer_email',
        'password',
        'customer_phone',
        'customer_address',
        'remember_token',
    ];

    protected $guarded = [
        'remember_token',
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
    
    public function getAuthIdentifierName()
    {
        return 'customer_email';
    }

    public function getAuthIdentifier()
    {
        return $this->customer_email;
    }

    public function getAuthPassword()
    {
        return $this->customer_password;
    }

    public function getRememberToken()
    {
        return $this->remember_token;
    }

    public function setRememberToken($value)
    {
        $this->remember_token = $value;
    }

    public function getRememberTokenName()
    {
        return 'remember_token';
    }
}
