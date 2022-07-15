<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOutagesTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('outages', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->integer('applicant')->unsigned();
            $table->integer('equipment_id')->unsigned();
            $table->integer('protection_id')->unsigned();
            $table->string('work');
            $table->dateTime('from');
            $table->dateTime('to');
            $table->integer('relayed_by')->unsigned();
            $table->dateTime('received_date');
            $table->string('remarks')->nullable();
            $table->string('status');
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
}
