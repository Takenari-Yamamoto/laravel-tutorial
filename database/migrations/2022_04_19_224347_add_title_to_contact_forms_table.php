<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTitleToContactFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    /*
        php artisan make:migration
        add_title_to_contact_forms_table --table=contact_forms
        で追加された分は table に変わる
    */
    public function up()
    {
        Schema::table('contact_forms', function (Blueprint $table) {
            //
            $table->string('title', 50)->after('name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('contact_forms', function (Blueprint $table) {
            //
            // $table->dropColumn('title');
        });
    }
}
