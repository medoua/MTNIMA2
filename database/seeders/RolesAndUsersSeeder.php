<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;

class RolesAndUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       // إنشاء الأدوار
       $superAdminRole = Role::create(['name' => 'super admin']);
       $userRole = Role::create(['name' => 'user']);

       // إنشاء المستخدم الأول
       $user = User::create([
           'name' => 'اسم المستخدم',
           'email' => 'example@example.com',
           'password' => bcrypt('كلمة المرور'),
       ]);

       // تعيين دور "super admin" للمستخدم الأول
       $user->roles()->attach($superAdminRole);
   }
    
}
