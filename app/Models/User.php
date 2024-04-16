<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
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
        'password' => 'hashed',
    ];

    /*public function role()
    {
        return $this->belongsTo(Role::class);
    }*/
    public function role_user(){

        return $this->hasMany(role_user::class, 'user_id');
        //return $this->belongsTo(role_user::class, 'user_id');
    }

    public function roles(){
        return $this->belongsToMany(Role::class, 'role_user', 'user_id', 'role_id');
    }

    public function isAdmin(){
        return $this->roles->contains('name', 'admin');
    }

    public function isSuperAdmin(){
        return $this->roles->contains('name', 'super admin');
    }

    protected static function booted(){
        // 
        static::created(function ($user) {
            // 1 user = "Super Admin" sinon "User"
            $role = $user->id === 1 ? 'super admin' : 'user';

            // Role  ou cree
            $userRole = Role::firstOrCreate(['name' => $role]);
            // selct role pour user
            $user->roles()->attach($userRole, ['created_at' => now(), 'updated_at' => now()]);
        });
    }

    public static function boot()
    {
        parent::boot();

        // Deleting event to also delete associated records in org_ch
        static::deleting(function ($user) {
            $user->role_user()->delete();
        });
    }
}
