<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPostMetaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      if (!Schema::hasTable('postmeta')) {
        Schema::create('postmeta', function(Blueprint $table)
        {
          $table->increments('id');
          $table->integer('post_id');
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
      if (Schema::hasTable('postmeta')) {
        Schema::drop('postmeta');
      }
    }
}
