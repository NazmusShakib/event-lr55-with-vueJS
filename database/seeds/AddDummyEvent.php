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
            ['id'=> 1, 'title'=>'Finacial forum', 'updated_by'=> 1, 'description' => '1st events', 'start'=>'2018-01-12', 'end'=>'2018-01-15'],
            ['id'=> 2, 'title'=>'Devtalk', 'updated_by'=> 1, 'description' => '2nd event', 'start'=>'2018-01-13', 'end'=>'2018-01-25'],
            ['id'=> 3, 'title'=>'Super Event', 'updated_by'=> 2, 'description' => '3rd event', 'start'=>'2018-01-23', 'end'=>'2018-01-24'],
            ['id'=> 4, 'title'=>'wtf event', 'updated_by'=> 3, 'description' => '4th event', 'start'=>'2018-01-19', 'end'=>'2018-01-27'],
        ];
        \DB::table('events')->insert($data);
    }
}
