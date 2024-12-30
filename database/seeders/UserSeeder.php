<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users=[
            ['Super Admin','SA1','Super','Admin 1','sa1@star.com'],//Super Admin
            
            ['Editor','ED1','Editor','Editor 1','ed1@star.com'],//Editor
        ];

        foreach($users as $u){
            $user = User::create([
                'username' => $u[1],
                'first_name' => $u[2],
                'last_name' => $u[3],
                'email' => $u[4],
                'phone' => '000',
                'password' => Hash::make('secret'),
            ]);
            $user->assignRole($u[0]);
        }
    }
}
