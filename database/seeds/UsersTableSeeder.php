<?php

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
        DB::table('users')->insert([
        'name' => 'sara',
        'email' => 'saravalero11@gmail.com',
        'password' =>bcrypt('sara'),
        'updated_at' => new \Carbon\Carbon,
        'created_at' => new \Carbon\Carbon,
        'remember_token' => 'mi nombre'
]);
    }
}
