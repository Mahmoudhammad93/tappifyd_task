<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = \App\Models\User::create([
            'user_type' => 'admin',
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'mobile' => '01004460433',
            'password' => bcrypt('123456789'),
        ]);
    }
}
