<?php

use Illuminate\ Database\ Seeder;

class ImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->insert([
            'name' => '5zoEddmwca52gwBfgLE431SP8QexdDd09U7ZG4vN.jpeg',
            'id' => '1',
            'location_id' => '2',
            'user_id' => '4',
            'created_at' => '2019-04-17 04:40:34',
            'updated_at' => '2019-04-17 04:40:34',
        ]);
        DB::table('images')->insert([
            'name' => '6T8IU6U0Zo63CAn2p3SAvyKQBsZbiEAnURpmC3Vz.jpeg',
            'id' => '2',
            'location_id' => '3',
            'user_id' => '3',
            'created_at' => '2019-04-17 04:41:28',
            'updated_at' => '2019-04-17 04:41:28',
        ]);
        DB::table('images')->insert([
            'name' => 'ntrNQe5iSLCM1sL7wlBC3elEc0fMfVaLPDwYLtGF.jpeg',
            'id' => '3',
            'location_id' => '2',
            'user_id' => '1',
            'created_at' => '2019-04-17 04:42:19',
            'updated_at' => '2019-04-17 04:42:19',
        ]);
        DB::table('images')->insert([
            'name' => 'GUEYigTOXDrll082I3EaArl5LKkWwGezlfWbA32m.jpeg',
            'id' => '4',
            'location_id' => '2',
            'user_id' => '3',
            'created_at' => '2019-04-17 04:42:30',
            'updated_at' => '2019-04-17 04:42:30',
        ]);
        DB::table('images')->insert([
            'name' => '9LAYQevwPkOKE7JpSI5IfRAOYrxYqJBEPzeBYJ08.jpeg',
            'id' => '5',
            'location_id' => '4',
            'user_id' => '1',
            'created_at' => '2019-04-17 04:42:53',
            'updated_at' => '2019-04-17 04:42:53',
        ]);
        DB::table('images')->insert([
            'name' => 'Z7wOkZFrQcu6p2bFI5EkNMbZmAKiEy22iG3cdbgO.jpeg',
            'id' => '6',
            'location_id' => '6',
            'user_id' => '2',
            'created_at' => '2019-04-23 18:26:52',
            'updated_at' => '2019-04-23 18:26:52',
        ]);
        DB::table('images')->insert([
            'name' => 'hT2xFG4cfgYUfI9uB0NkTx01oOJVcSuGHRPimeZB.jpeg',
            'id' => '7',
            'location_id' => '6',
            'user_id' => '2',
            'created_at' => '2019-04-23 18:27:06',
            'updated_at' => '2019-04-23 18:27:06',
        ]);
        DB::table('images')->insert([
            'name' => 'Rbf1D4pf2pwpmLYniAJcOUTCNxK4pPRMDiUIZf4Z.jpeg',
            'id' => '8',
            'location_id' => '7',
            'user_id' => '4',
            'created_at' => '2019-04-27 05:30:43',
            'updated_at' => '2019-04-27 05:30:43',
        ]);
        DB::table('images')->insert([
            'name' => 'vNvUZKQUXl32fh9LdOkeo69or5BKisXnR0UN0Y0v.jpeg',
            'id' => '9',
            'location_id' => '7',
            'user_id' => '3',
            'created_at' => '2019-04-27 05:31:28',
            'updated_at' => '2019-04-27 05:31:28',
        ]);
        DB::table('images')->insert([
            'name' => 'DLb0MT697BkaZ04FlIBJrgrlpXeNY6txHhP6Ddah.jpeg',
            'id' => '10',
            'location_id' => '3',
            'user_id' => '1',
            'created_at' => '2019-04-27 06:03:57',
            'updated_at' => '2019-04-27 06:03:57',
        ]);
        DB::table('images')->insert([
            'name' => '7mtjsj0bZE16yK1jpAoZk6yIq1lmPxGVVzFtdpVK.jpeg',
            'id' => '11',
            'location_id' => '7',
            'user_id' => '1',
            'created_at' => '2019-04-27 07:00:35',
            'updated_at' => '2019-04-27 07:00:35',
        ]);
        DB::table('images')->insert([
            'name' => 'cNS702VUOsyAtYKyQk7Qx6JITHfcYWpF23ujwuwE.jpeg',
            'id' => '12',
            'location_id' => '1',
            'user_id' => '5',
            'created_at' => '2019-04-27 07:10:12',
            'updated_at' => '2019-04-27 07:10:12',
        ]);
        DB::table('images')->insert([
            'name' => 'cRSg4E3ubw20vjErfnhd8efPNVJhxikACiy9TpGb.jpeg',
            'id' => '13',
            'location_id' => '3',
            'user_id' => '1',
            'created_at' => '2019-04-27 07:10:41',
            'updated_at' => '2019-04-27 07:10:41',
        ]);
        DB::table('images')->insert([
            'name' => 'SsuzP5Niw92LlUotkI3DuSGpusLHXaMKSDZQqNqT.jpeg',
            'id' => '14',
            'location_id' => '6',
            'user_id' => '1',
            'created_at' => '2019-05-06 22:58:04',
            'updated_at' => '2019-05-06 22:58:04',
        ]);
    }
}
