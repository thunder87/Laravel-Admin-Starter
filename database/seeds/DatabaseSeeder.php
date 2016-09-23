<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        DB::table('users')->insert([
            'firstname' => 'Laravel',
            'lastname' => 'Admin',
            'email' => 'test@test.com',
            'password' => bcrypt('test123'),
            'image' => '/img/avatar.png',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
            'remember_token' => str_random(10),
        ]);
    }
}
