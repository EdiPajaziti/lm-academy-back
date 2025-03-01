<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\UserInfo;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'gender',
        'image',
        'email',
        'password',
        'date_of_birth',
        'academic_year',
        'acc_status',
        'profile_status',

    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
public function scopeSelectSomeUserData($query) {
    
}
 
    public function userInfo()
    {
        return $this->hasOne(UserInfo::class. 'user_id'. 'id');
    }
 
    public function userLists()
    {
        return $this->belongsToMany(UserList::class, 'user_list', 'user_id', 'list_id');

    public function scoreBoard() 
    {
        this->hasOne(ScoreBoard::class, 'user_id', 'id');

    }
