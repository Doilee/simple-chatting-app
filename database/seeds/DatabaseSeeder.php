<?php

use App\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        factory(User::class)->create([
            'name' => 'Me',
            'email' => 'me@example.com'
        ]);

        factory(User::class)->create([
            'name' => 'Friend',
            'email' => 'friend@example.com'
        ]);
    }
}