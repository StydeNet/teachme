<?php

namespace TeachMe\Entities;

use Illuminate\Auth\Authenticatable;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Entity implements AuthenticatableContract, CanResetPasswordContract
{
    use Authenticatable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'password'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    public function tickets()
    {
        return $this->hasMany(Ticket::getClass());
    }

    public function voted()
    {
        return $this->belongsToMany(Ticket::getClass(), 'ticket_votes')->withTimestamps();
    }

    public function hasVoted(Ticket $ticket)
    {
        return $this->voted()->where('ticket_id', $ticket->id)->count();
    }

}
