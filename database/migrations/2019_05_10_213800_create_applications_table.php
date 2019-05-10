<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    	/* pašu dalībnieku tabula */
	    Schema::create('participants', function (Blueprint $table) {
		    $table->increments('id');
		    $table->string('name');
		    $table->string('surname');
		    $table->string('pcode', 12);
		    $table->string('email');
		    $table->string('average');
		    $table->timestamps();
	    });

	    /* pieteikumu tabula */
        Schema::create('applications', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('participant_id');
			$table->integer('program_id');
			$table->char('CElevel');
            $table->timestamps();
        });

        /* programmu saraksts */
	    Schema::create('programs', function (Blueprint $table) {
		    $table->increments('id');
		    $table->string('name');
		    $table->smallInteger('budget_count');
		    $table->integer('price');
		    $table->timestamps();
	    });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists(['participants','applications', 'programs']);
    }
}
