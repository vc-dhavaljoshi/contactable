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
        Schema::create($this->getTableName(), function (Blueprint $table) {
            $table->increments('id');
            $table->integer('model_id');
            $table->string('model_type');
            $table->string('name',100)->nullable();
            $table->string('email',50)->nullable();
            $table->string('phone')->nullable();
            $table->tinyInteger('order')->default(0);
            $table->json('extra_attributes')->nullable();
            $table->timestamps();
        });
    }

    public function getTableName()
    {
        return config('contact-table.tables.contacts');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists($this->getTableName());
    }
}
