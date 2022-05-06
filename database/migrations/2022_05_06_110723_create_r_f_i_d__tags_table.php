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
        Schema::create('r_f_i_d__tags', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->dateTime('scan_at')->nullable();
            $table->foreignId('book_id')->nullable()->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('r_f_i_d__tags');
    }
};
