<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('outages', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->string('applicant');
            $table->integer('protection_id')->unsigned();
            $table->string('work');
            $table->dateTime('from');
            $table->dateTime('to');
            $table->string('relayed_by');
            $table->integer('received_by')->unsigned()->nullable();
            $table->dateTime('received_date')->nullable();
            $table->integer('approved_by')->unsigned()->nullable();
            $table->dateTime('approval_date')->nullable();
            $table->string('remarks')->nullable();
            $table->string('status');
            $table->boolean('done')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('outages');
    }
};
