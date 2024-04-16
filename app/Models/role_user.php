<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class role_user extends Model
{
    use HasFactory;
    /*public function users()
    {
        return $this->belongsToMany(User::class, 'id');
    }
*/
    protected $fillable = [
        'user_id',
        'role_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id');
    }

    public function role()
    {
        return $this->belongsTo(Role::class, 'role_id');
    }

}
