<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function blogs()
    {
      return $this->hasMany(Blog::class);
    }

    public function publish()
    {
      // $this->blogs->save($blog);
      Blog::create([
          'title'=>request('title'),
          'body'=>request('body'),
          'user_id'=>auth()->id()
      ]);
    }
}
