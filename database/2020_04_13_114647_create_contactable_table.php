<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactableTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contactable', function (Blueprint $table) {
            $table->id();
            $table->integer('model_id');
            $table->string('model_type');
            $table->string('first_name',50)->nullable();
            $table->string('last_name',50)->nullable();
            $table->string('email',50)->nullable();
            $table->integer('phone')->nullable();
            $table->dateTime('birth_date')->nullable();
            $table->tinyInteger('order')->default(0);
            $table->tinyInteger('is_primary')->comment("1=> true, 0=> false");
            $table->json('extra_attributes')->nullable();
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
        Schema::dropIfExists('contactable');
    }
}
