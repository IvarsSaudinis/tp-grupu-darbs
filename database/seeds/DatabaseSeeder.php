<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	/* Programmas nosaukumi, semestra maksas un budžeta vietas */
        $this->call(ProgramsSeeder::class);

        /* Eksāmenu mācībpriekšmeti */
        $this->call(SubjectSeeder::class);
    }
}
