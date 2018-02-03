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
            ['id'=> 1, 'title'=>'Finacial forum', 'updated_by'=> 1, 'description' => '1st events', 'start'=>'2017-10-12', 'end'=>'2017-09-15'],
            ['id'=> 2, 'title'=>'Devtalk', 'updated_by'=> 1, 'description' => '2nd event', 'start'=>'2017-10-13', 'end'=>'2017-09-25'],
            ['id'=> 3, 'title'=>'Super Event', 'updated_by'=> 2, 'description' => '3rd event', 'start'=>'2017-09-23', 'end'=>'2017-09-24'],
            ['id'=> 4, 'title'=>'wtf event', 'updated_by'=> 3, 'description' => '4th event', 'start'=>'2017-09-19', 'end'=>'2017-09-27'],
        ];
        \DB::table('events')->insert($data);
    }
}
