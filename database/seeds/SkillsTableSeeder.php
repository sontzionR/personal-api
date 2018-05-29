<?php

use Illuminate\Database\Seeder;

class SkillsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('skill')->insert([
            [
                'name' =>("javascript"),
                'years' =>(1)
            ],
            [
                'name' =>("php"),
                'years' =>(1)
            ],
            [
                'name' =>("mysql"),
                'years' =>(1)
            ],
            [
                'name' =>("java"),
                'years' =>(1)
            ],
            [
                'name' =>("jquery"),
                'years' =>(1)
            ],
            [
                'name' =>("laravel"),
                'years' =>(1)
            ],
            [
                'name' =>("virtual machines"),
                'years' =>(1)
            ],
            [
                'name' =>("angular"),
                'years' =>(1)
            ],
            [
                'name' =>("reactjs"),
                'years' =>(1)
            ],
            [
                'name' =>("node"),
                'years' =>(1)
            ],
            [
                'name' =>("mongoDb"),
                'years' =>(1)
            ],
            [
                'name' =>("git"),
                'years' =>(2)
            ],
            [
                'name' =>("software development"),
                'years' =>(2)
            ],
            [
                'name' =>("web development"),
                'years' =>(1)
            ],
            [
                'name' =>("REST API's"),
                'years' =>(1)
            ],
            [
                'name' =>("Team collaboration"),
                'years' =>(2)
            ]

        ]);
    }
}
