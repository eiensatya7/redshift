<?php

use Illuminate\Database\Migrations\Migration;

class RedshiftdbMigration extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {

        Schema::table('colleges', function($table) {
            $table -> engine = 'InnoDB';
            $table -> create();
            $table -> increments('id');
            $table -> string('name', 256);
            $table -> string('alias', 64);
            $table -> unique('alias');
        });

        Schema::table('students', function($table) {
            $table -> engine = 'InnoDB';
            $table -> create();
            $table -> increments('id');
            $table -> string('name', 128);
            $table -> string('registration_id', 128);
            $table -> string('email', 128);
            $table -> string('password', 128);
            $table -> integer('college_id') -> unsigned();
            $table -> integer('year');
            $table -> string('brach', 64);
            $table -> timestamps();
            $table -> boolean('active');
            $table -> unique('registration_id');
            $table -> unique('email');
            $table -> foreign('college_id') -> references('id') -> on('colleges');

        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('students');
        Schema::drop('colleges');
    }

}
