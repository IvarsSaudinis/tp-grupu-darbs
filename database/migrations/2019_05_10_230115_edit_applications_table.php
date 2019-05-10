<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EditApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
	    Schema::table('applications', function (Blueprint $table) {
		    $table->string('program_id_2')->after('CElevel');
		    $table->string('CElevel2')->after('program_id_2');
	    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
	    Schema::table('users', function (Blueprint $table) {
		    $table->dropColumn('program_id_2');
		    $table->dropColumn('CElevel2');
	    });
    }
}
