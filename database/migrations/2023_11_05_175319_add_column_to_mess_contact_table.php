<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnToMessContactTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('mess_contact', function (Blueprint $table) {
            $table->date('date_booking')->after('mess')->nullable();
            $table->time('time_booking')->after('date_booking')->nullable();
            $table->string('service')->after('time_booking')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('mess_contact', function (Blueprint $table) {
            $table->dropColumn('date_booking');
            $table->dropColumn('time_booking');
            $table->dropColumn('service');
        });
    }
}
