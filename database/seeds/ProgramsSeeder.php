<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class ProgramsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	/* vienkāršākā realizācija */

	    DB::table('programs')->insert([
	    	'name' => 'Pirmsskolas izglītības skolotājs', 'budget_count' =>5,'price' => 800, // semestrī
	    ]);

	    DB::table('programs')->insert([
		    'name' => 'Jauno mediju māksla', 'budget_count' => 5,'price' => 800, // semestrī
	    ]);

	    DB::table('programs')->insert([
		    'name' => 'Eiropas valodu un kultūras studijas (3g.)', 'budget_count' => 15,'price' => 800, // semestrī
	    ]);

	    DB::table('programs')->insert([
		    'name' => 'Baltu filoloģija, kultūra un komunikācija', 'budget_count' => 5,'price' => 800, // semestrī
	    ]);

	    DB::table('programs')->insert([
		    'name' => 'Biznesa un organizācijas vadība', 'budget_count' => 5,'price' => 800, // semestrī
	    ]);

	    DB::table('programs')->insert([
		    'name' => 'Kultūras vadība', 'budget_count' => 5,'price' => 800, // semestrī
	    ]);

	    DB::table('programs')->insert([
		    'name' => 'Tūrisma un rekreācijas vadība', 'budget_count' => 5,'price' => 800, // semestrī
	    ]);

	    DB::table('programs')->insert([
		    'name' => 'Mehatronika', 'budget_count' => 5,'price' => 800, // semestrī
	    ]);

	    DB::table('programs')->insert([
		    'name' => 'Informācijas tehnoloģija', 'budget_count' => 25,'price' => 800, // semestrī
	    ]);

	    DB::table('programs')->insert([
		    'name' => 'Sociālais darbinieks', 'budget_count' => 10,'price' => 800, // semestrī
	    ]);
    }
}
