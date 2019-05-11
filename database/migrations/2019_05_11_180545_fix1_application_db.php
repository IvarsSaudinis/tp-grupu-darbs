<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Fix1ApplicationDb extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    	// rename
	    Schema::table('applications', function (Blueprint $table) {
		    $table->renameColumn('program_id_2', 'subject_id2');
	    });

	    // add
	    Schema::table('applications', function (Blueprint $table) {
		    $table->integer('subject_id1')->after('program_id');
	    });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
	    Schema::table('applications', function (Blueprint $table) {
		    $table->renameColumn('subject_id1', 'program_id_2');
	    });

	    Schema::table('applications', function (Blueprint $table) {
		    $table->dropColumn('subject_id1');
	    });
    }
}
