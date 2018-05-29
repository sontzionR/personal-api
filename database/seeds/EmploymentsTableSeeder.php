<?php

use Illuminate\Database\Seeder;

class EmploymentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employment')->insert([
            [
                'name' =>("E.T. Trading"),
                'position' =>("Operations Manager (as needed basis)"),
                'start' =>("April 2010"),
                'end' =>("current")
            ],
            [
                'name' =>("BitBean"),
                'position' =>("Internship"),
                'start' =>("May 2018"),
                'end' =>("current")
            ]
        ]);
    }
}
