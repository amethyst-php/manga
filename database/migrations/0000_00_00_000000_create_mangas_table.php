<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Schema;

class CreateMangasTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create(Config::get('amethyst.manga.data.manga.table'), function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('description')->nullable();
            $table->string('status')->default('ongoing');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create(Config::get('amethyst.manga.data.manga-category.table'), function (Blueprint $table) {
            $table->integer('manga_id')->unsigned();
            $table->foreign('manga_id')->references('id')->on(Config::get('amethyst.manga.data.manga.table'))->onDelete('cascade');
            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on(Config::get('amethyst.category.data.category.table'))->onDelete('cascade');
            $table->unique(['manga_id', 'category_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists(Config::get('amethyst.manga.data.manga.table'));
        Schema::dropIfExists(Config::get('amethyst.manga.data.manga-category.table'));
    }
}
