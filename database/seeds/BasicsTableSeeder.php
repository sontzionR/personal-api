<?php

use Illuminate\Database\Seeder;

class BasicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('basics')->insert([
            'name' =>("Bentzion Ritterman"),
            'phone' =>("646-717-0029"),
            'email' =>("rittermanben@gmail.com")
        ]);
    }
}
