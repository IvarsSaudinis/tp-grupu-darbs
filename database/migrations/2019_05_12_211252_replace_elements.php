<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ReplaceElements extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    	// add
	    Schema::table('participants', function (Blueprint $table) {
		    $table->char('CElevel1')->after('average');
		    $table->char('CElevel2')->after('CElevel1');
		    $table->smallInteger('subject_id1');
		    $table->smallInteger('subject_id2');

	    });

	    // drop
	    Schema::table('applications', function (Blueprint $table) {
		    $table->dropColumn('subject_id1');
		    $table->dropColumn('subject_id2');
		    $table->dropColumn('CElevel');
		    $table->dropColumn('CElevel2');
	    });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
