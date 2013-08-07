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
        $table->  integer('user_ext_id');        
        $table -> string('registration_id', 128);
        $table -> string('email', 128);
        $table -> string('password', 128);
        $table -> integer('college_id') -> unsigned();
        $table -> integer('year_id') -> unsigned();
        $table -> integer('branch_id') -> unsigned();
        $table -> unique('registration_id');
        $table -> unique('email');
        $table -> foreign('user_type_id') -> references('id') -> on('userTypes');
        $table -> foreign('year_id') -> references('id') -> on('years');
        $table -> foreign('branch_id') -> references('id') -> on('branches');
        $table -> foreign('college_id') -> references('id') -> on('colleges');

    });

    Schema::table('years',function($table){

      $table -> engine = 'InnoDB';
      $table -> create();
      $table -> increments('id');
      $table -> string('year_alias',64);


  });

    Schema::table('branches',function($table){

      $table -> engine = 'InnoDB';
      $table -> create();
      $table -> increments('id');
      $table -> string('branch_alias',64);
      $table -> string('branch_full_name',256);



  });

    Schema::table('userTypes', function($table){
        $table -> engine = 'InnoDB';
        $table -> create();
        $table -> increments('id');
        $table -> string('user_type',128);
        $table -> unique('user_type');

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
