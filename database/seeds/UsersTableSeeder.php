<?php

use Carbon\ Carbon;
use Illuminate\ Database\ Seeder;

class UsersTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('users') -> insert([
            'name' => 'admin',
            'email' => 'admin@admin.ca',
            'password' => bcrypt('123456'),
            'role' => 'admin',
            'email_verified_at' => Carbon::now() -> format('Y-m-d H:i:s'),
            'created_at' => Carbon::now() -> format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now() -> format('Y-m-d H:i:s'),
        ]);
        DB::table('users') -> insert([
            'name' => 'user1',
            'email' => 'user1@user1.ca',
            'password' => bcrypt('123456'),
            'role' => 'user',
            'email_verified_at' => Carbon::now() -> format('Y-m-d H:i:s'),
            'created_at' => Carbon::now() -> format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now() -> format('Y-m-d H:i:s'),
        ]);
        DB::table('users') -> insert([
            'name' => 'user2',
            'email' => 'user2@user2.ca',
            'password' => bcrypt('123456'),
            'role' => 'user',
            'email_verified_at' => Carbon::now() -> format('Y-m-d H:i:s'),
            'created_at' => Carbon::now() -> format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now() -> format('Y-m-d H:i:s'),
        ]);
        DB::table('users') -> insert([
            'name' => 'user3',
            'email' => 'user3@user3.ca',
            'password' => bcrypt('123456'),
            'role' => 'user',
            'email_verified_at' => Carbon::now() -> format('Y-m-d H:i:s'),
            'created_at' => Carbon::now() -> format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now() -> format('Y-m-d H:i:s'),
        ]);
        DB::table('users') -> insert([
            'name' => 'user4',
            'email' => 'user4@user4.ca',
            'password' => bcrypt('123456'),
            'role' => 'user',
            'email_verified_at' => Carbon::now() -> format('Y-m-d H:i:s'),
            'created_at' => Carbon::now() -> format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now() -> format('Y-m-d H:i:s'),
        ]);
    }
}
