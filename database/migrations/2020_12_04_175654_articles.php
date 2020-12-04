<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Articles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
          $table->bigIncrements('id');
          // ilişkisel veritabanı işlemi için. unsigned sıfırdan büyük değer alacağı anlamına gelir
          $table->unsignedBigInteger('category_id');
          // unsigned ifadesinin alternatifi:
          // $table->integer('category_id')->unsigned();
          $table->string('title');
          $table->string('image');
          $table->longText('content');
          $table->integer('hit')->default(0);
          $table->string('slug');
          $table->timestamps();
          // ilişkisel veritabanı işlemleri
          // foreign kısmında bağlanılacak sütun yazılır.
          $table->foreign('category_id')
                ->references('id')
                ->on('categories')
                // eğer ilgili bağlı kategori tablosu silinirse ilişkili tabloda silinir.
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
        Schema::dropIfExists('articles');
    }
}
