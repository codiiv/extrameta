<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTermMetaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      if (!Schema::hasTable('termmeta')) {
        Schema::create('termmeta', function(Blueprint $table)
        {
          $table->increments('id');
          $table->integer('term_id');
          $table->string('meta_key');
          $table->text('meta_value');
          $table->timestamps();
        });
      }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      if (Schema::hasTable('termmeta')) {
        Schema::drop('termmeta');
      }
    }
}
