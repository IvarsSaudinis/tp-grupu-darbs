<?php

use Illuminate\Database\Seeder;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	    DB::table('subject')->insert(['name' => 'Matemātika']);
	    DB::table('subject')->insert(['name' => 'Latviešu valoda']);
	    DB::table('subject')->insert(['name' => 'Angļu valoda']);
	    DB::table('subject')->insert(['name' => 'Dabas zinības']);
	    DB::table('subject')->insert(['name' => 'Vēsture']);
	    DB::table('subject')->insert(['name' => 'Vācu valoda']);
	    DB::table('subject')->insert(['name' => 'Krievu valoda']);
	    DB::table('subject')->insert(['name' => 'Fizika']);
    }
}
