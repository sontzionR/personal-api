<?php

use Illuminate\Database\Seeder;

class EducationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('education')->insert([
            [
                'name' =>("Beth Medrash Gavoha"),
                'address' =>("617 6th Street"),
                'city' =>("Lakewood"),
                'state' =>("NJ"),
                'zip' =>("08701"),
                'subjects' =>("Talmudic law"),
                'start' =>("October 2010"),
                'end' =>("January 2018")
            ],
            [
                'name' =>("The School for Evolving Technologies (P.C.S."),
                'address' =>("1771 Madison AVE"),
                'city' =>("Lakewood"),
                'state' =>("NJ"),
                'zip' =>("08701"),
                'subjects' =>("Software/Web Development"),
                'start' =>("Nov 2016"),
                'end' =>("April 2018")
            ]
        ]);
    }
}
