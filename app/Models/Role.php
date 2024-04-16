<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    protected $fillable = ['name'];

    public function users2()
    {
        return $this->belongsToMany(User::class);
    }


    public function users1(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }


    public function users()
    {
        return $this->belongsToMany(User::class, 'role_user', 'role_id', 'user_id');
    }

    
}
