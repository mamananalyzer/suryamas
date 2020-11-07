<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('brand');
            $table->string('categorie');
            $table->string('type')->unique();
            $table->integer('price');
            $table->string('picture')->unique();
            $table->text('description');
            $table->text('listdescription');
            $table->string('datasheet')->nullable();
            $table->string('usermanual')->nullable();
            $table->string('modbus')->nullable();
            $table->string('software')->nullable();
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
        Schema::dropIfExists('products');
    }
}
