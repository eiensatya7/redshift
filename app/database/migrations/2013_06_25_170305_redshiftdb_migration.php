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
    $table->timestamps();
    $table -> unique('alias');
  });

  Schema::table('years',function($table){

    $table -> engine = 'InnoDB';
    $table -> create();
    $table -> increments('id');
    $table->timestamps();
    $table -> string('alias',64);
    $table -> unique('alias');


  });

  Schema::table('branches',function($table){

    $table -> engine = 'InnoDB';
    $table -> create();
    $table -> increments('id');
    $table->timestamps();
    $table -> string('alias',64);
    $table -> string('name',256);
    $table -> unique('alias');


  });

  Schema::table('students', function($table) {
    $table -> engine = 'InnoDB';
    $table -> create();
    $table -> increments('id');
    $table->  integer('user_ext_id') -> unsigned();    
    $table -> string('registration_id', 128);    
    $table -> integer('college_id') -> unsigned();
    $table -> integer('year_id') -> unsigned();
    $table -> integer('branch_id') -> unsigned();
    $table->timestamps();
    $table -> unique('registration_id');       
    $table -> foreign('user_ext_id') -> references('id') -> on('users');
    $table -> foreign('year_id') -> references('id') -> on('years');
    $table -> foreign('branch_id') -> references('id') -> on('branches');
    $table -> foreign('college_id') -> references('id') -> on('colleges');

  });

}    /**
     * Reverse the migrations.
     *
     * @return void
     */
public function down() {
  Schema::drop('students');
  Schema::drop('colleges');
  Schema::drop('years');
  Schema::drop('branches');
}

}
