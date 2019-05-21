<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class Image_UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('image_user')->insert([
            'alert' => '1',
            'id' => '1',
            'user_id' => '1',
            'image_id' => '1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('image_user')->insert([
            'alert' => '1',
            'id' => '2',
            'user_id' => '1',
            'image_id' => '1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('image_user')->insert([
            'alert' => '1',
            'id' => '3',
            'user_id' => '2',
            'image_id' => '4',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('image_user')->insert([
            'alert' => '1',
            'id' => '4',
            'user_id' => '3',
            'image_id' => '7',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
