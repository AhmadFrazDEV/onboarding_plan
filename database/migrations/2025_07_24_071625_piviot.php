<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        schema::create('piviot' , function(blueprint $table){
            $table->id();

            $table->foreignId('post_id')
            ->constrained('posts')
            ->onDelete('cascade');

            $table->foreignId('tag_id')
            ->constrained('tags')
            ->onDelete('cascade');
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
};
