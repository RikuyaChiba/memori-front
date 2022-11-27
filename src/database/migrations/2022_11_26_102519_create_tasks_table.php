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
        Schema::create('recurrings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->tinyText('name')->comment('Recurring name');
            $table->unsignedTinyInteger('status')->comment('Recurring day, 1: First day, 2: 1day recurring, 3: 3day recurring, 4: 1week recurring, 5: 2weeks recurring, 6: 1month recurring');
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
        Schema::dropIfExists('tasks');
    }
};
