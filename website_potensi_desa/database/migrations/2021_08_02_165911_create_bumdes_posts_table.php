<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBumdesPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bumdes_posts', function (Blueprint $table) {
            $table->id();
            $table->text('title');
            $table->text('author');
            $table->text('category');
            $table->text('slug');
            $table->text('excerpt');
            $table->text('body');
            $table->text('highlight_photo_path');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bumdes_posts');
    }
}