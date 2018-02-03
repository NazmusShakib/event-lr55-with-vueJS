<?php

use Illuminate\Database\Seeder;

class AddDummyEvent extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['title'=>'Finacial forum', 'user_id'=> 1, 'description' => '1st events', 'start'=>'2017-10-12', 'end'=>'2017-09-15'],
            ['title'=>'Devtalk', 'user_id'=> 1, 'description' => '2nd event', 'start'=>'2017-10-13', 'end'=>'2017-09-25'],
            ['title'=>'Super Event', 'user_id'=> 2, 'description' => '3rd event', 'start'=>'2017-09-23', 'end'=>'2017-09-24'],
            ['title'=>'wtf event', 'user_id'=> 3, 'description' => '4th event', 'start'=>'2017-09-19', 'end'=>'2017-09-27'],
        ];
        \DB::table('events')->insert($data);
    }
}
