<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trainings', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->double('price')->nullable();
            $table->string('cover')->default('training-cover.png');
            $table->text('description');
            $table->boolean('is_paid')->default(true);
            $table->boolean('online')->default(false);
            $table->boolean('with_certification')->default(true);
            $table->dateTime('start_at');
            $table->dateTime('end_at');
            $table->double('lat');
            $table->double('lon');
            $table->string('address');
            $table->timestamps();
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('city_id')->nullable();
            $table->unsignedBigInteger('advertiser_id')->nullable();

            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('city_id')->references('id')->on('cities')->onDelete('cascade');
            $table->foreign('advertiser_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trainings');
    }
}
