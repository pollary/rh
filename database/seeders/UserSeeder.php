<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users=[
            ['name' => 'Dyego Santos',
             'email' => 'diegopollary@gmail.com',
             'password' => Hash::make(config('app.admin_password'))]
        ];

        foreach ($users as $key=>$value)
        {
            User::create($value);
        }

    }
}
