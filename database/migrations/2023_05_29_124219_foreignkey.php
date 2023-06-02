<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ForeignKey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('posts', function (Blueprint $table) {
         $table->foreignId('user_id')->constrained()->onDelete('cascade');
         $table->foreignId('category_id')->constrained()->onDelete('cascade');
     });
     Schema::table('comments', function (Blueprint $table) {
      $table->foreignId('user_id')->constrained()->onDelete('cascade');
      $table->foreignId('post_id')->constrained()->onDelete('cascade');
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
