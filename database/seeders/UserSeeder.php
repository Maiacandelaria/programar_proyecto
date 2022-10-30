<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()

    {
       $user =  User::create([
            'name' => 'Maia Figueredo',
            'email' => 'maiafigueredo0525@gmail.com',
            'password' => bcrypt('$pastelitopastelito$')
        ]);
        $user->assignRole('Admin');
        User::factory(30)->create();
    }
}
