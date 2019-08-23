<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class LaratrustSetupTables extends Migration
{
  /**
   * Run the migrations.
   *
   * @return  void
   */
  public function up()
  {
    // Create table for storing roles
    Schema::create('roles', function (Blueprint $table) {
      $table->increments('id');
      $table->string('name')->unique();
      $table->string('display_name')->nullable();
      $table->string('description')->nullable();
      $table->timestamps();
    });

    // Create table for storing teams
    Schema::create('teams', function (Blueprint $table) {
      $table->increments('id');
      $table->string('name')->unique();
      $table->string('display_name')->nullable();
      $table->string('description')->nullable();
      $table->timestamps();
    });

    // Create table for associating roles to users and teams (Many To Many Polymorphic)
    Schema::create('role_user', function (Blueprint $table) {
      $table->unsignedInteger('role_id');
      $table->unsignedInteger('user_id');
      $table->string('user_type');
      $table->unsignedInteger('team_id')->nullable();

      $table->foreign('role_id')->references('id')->on('roles')
          ->onUpdate('cascade')->onDelete('cascade');
      $table->foreign('team_id')->references('id')->on('teams')
          ->onUpdate('cascade')->onDelete('cascade');

      $table->unique(['user_id', 'role_id', 'user_type', 'team_id']);
    });
  }

    /**
     * Reverse the migrations.
     *
     * @return  void
     */
  public function down()
  {
    Schema::dropIfExists('role_user');
    Schema::dropIfExists('roles');
    Schema::dropIfExists('teams');
  }
}
