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
        Schema::create('comantables', function (Blueprint $table) {
            $table->id();
            $table->text('body');
            $table->timestamp('dateAjout');
            $table->unsignedBigInteger('comantables_id');
            $table->String('comantables_type');
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
        Schema::dropIfExists('comantables');
    }
};
