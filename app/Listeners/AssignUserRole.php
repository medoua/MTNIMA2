<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Events\UserCreated;
use App\Models\Role;
class AssignUserRole
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(object $event): void
    {
         // 1 "Super Admin" sinom "User"
         $role = $event->user->id === 1 ? 'super admin' : 'user';

         // role
         $userRole = Role::firstOrCreate(['name' => $role]);
 
         // تعيين الدور للمستخدم
         $event->user->roles()->attach($userRole);
    }
}
