<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class CreateSuperUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $superUser = User::create([
            'name'=>('Admin'),
            'second_name'=>('ss'),
            'role_id'=>'1',
            'email'=>('admin@mail.ru'),
            'password'=>Hash::make('1234567890')
        ]);
        Role::create([
            'name'=>'super_admin'
        ]);
        $superUser->assignRole('super_admin');
    }
}
