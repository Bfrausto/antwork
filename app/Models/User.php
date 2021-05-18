<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable, Followable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    // protected $fillable = [
    //     'username',
    //     'name',
    //     'email',
    //     'password',
    // ];
    protected $guarded=[];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function timeline()
    {
        $friends = $this->follows()->pluck('id');
        return Question::whereIn('user_id',$friends)
            ->orWhere('user_id',$this->id)
            ->latest()->paginate(15);
        // return Question::where('user_id',$this->id)->latest()->get();
        //include all questions of the user following_user_id
        //an the questions of the follows
        // $ids = $this->follows()->pluck('id');
        // $ids->push($this->id);
        // return Question::whereIn('user_id',$ids)->latest()->get();

    }
    public function questions()
    {
        return $this->hasMany(Question::class)
                ->latest();
    }
    public function getAvatarAttribute($value)
    {
        if($value)
            return asset('storage/' .$value);
        return "https://i.pravatar.cc/200?u=".$this->email;
    }
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }
    public function path($append='')
    {
        $path =route('profile',$this->username);
        return $append? "{$path}/{$append}":$path;
        return route('profile',$this->name).$append;
    }
    // public function getRouteKeyName()
    // {
    //     return 'name';
    // }

}
