<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(FieldSeeder::class);
        // User::factory(10)->create();

        $users = [
            (object)[
                'email' => 'bagasapg@gmail.com',
                'password' => '123'
            ]
            ];

        foreach($users as $user){
            $u = new User();
            $u->email = $user->email;
            $u->password = bcrypt($user->password);
            $u->save();
        }
    }
}
