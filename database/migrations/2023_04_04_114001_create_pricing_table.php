<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePricingTable extends Migration
{
    public function up()
    {
        Schema::create('pricing', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('plan_id');
            $table->string('currency');
            $table->decimal('price', 8, 2);
            $table->timestamps();
            $table->foreign('plan_id')->references('id')->on('plans')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('pricing');
    }
}
