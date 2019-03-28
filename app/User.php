<?php

namespace App;

use Carbon\Carbon;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements JWTSubject
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','surname', 'email', 'password','phone','isAdmin','position','role'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $appends = [
        'full_name',
    ];

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    public function getJWTCustomClaims()
    {
        return [];
    }

    /**
     * @return string
     * Full Name Accessor
     */
    public function getFullNameAttribute()
    {
        return $this->name.' '.$this->surname; //mb_strtoupper($this->name).' '.mb_strtoupper($this->surname);
    }

    public function getCreatedAtColumn()
    {
        return Carbon::parse($this->created_at)->format('d-m-Y');
    }

    /**
     * @param $parmater
     * Setters function
     */
    public function setNameAttribute($name)
    {
        $this->name = mb_strtoupper($name);
    }

    public function setSurname($surname)
    {
        $this->surname = $surname;
    }




}
