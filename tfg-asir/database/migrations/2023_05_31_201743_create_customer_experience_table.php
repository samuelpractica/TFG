<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerExperienceTable extends Migration
{
    public function up()
    {
        Schema::create('customer_experience', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sales_point_id');
            $table->foreign('sales_point_id')->references('id')->on('sales_points')->onDelete('cascade');
            $table->unsignedBigInteger('order_id');
            $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
            $table->integer('rating');
            $table->string('feedback');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('customer_experience');
    }
}
