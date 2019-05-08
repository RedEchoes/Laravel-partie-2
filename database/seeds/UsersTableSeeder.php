<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
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
      'name' => 'admin',
      'email' => 'admin@admin.ca',
      'password' => bcrypt('123456'),
      'role' => 'admin',
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
  ]);
  DB::table('users')->insert([
      'name' => 'user1',
      'email' => 'user1@user1.ca',
      'password' => bcrypt('123456'),
      'role' => 'user',
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
  ]);
  DB::table('users')->insert([
      'name' => 'user2',
      'email' => 'user2@user2.ca',
      'password' => bcrypt('123456'),
      'role' => 'user',
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
  ]);
    }
}
