<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // factory(User::class)->create([
        //     'name' => 'Shaun Willis',
        //     'email' => 'shaun@test.com',
        // ]);
        factory(User::class, 4)->create();
    }
}
