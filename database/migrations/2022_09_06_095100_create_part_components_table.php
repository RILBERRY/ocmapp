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
        Schema::create('part_components', function (Blueprint $table) {
            $table->id();
            $table->integer('part_number');
            $table->string('description');
            $table->integer('required_qty');
            $table->decimal('unit_price',10,2);
            $table->string('img_url');
            $table->foreignId('part_id')->constrained('parts');
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
        Schema::dropIfExists('part_components');
    }
};
