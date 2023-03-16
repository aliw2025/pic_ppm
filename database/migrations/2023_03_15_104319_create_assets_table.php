<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assets', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('asset_technical_category')->nullable();
            $table->string('equipment_category_name')->nullable();
            $table->string('equipment_type')->nullable();;
            $table->string('manufacturer')->nullable();;
            $table->string('model')->nullable();;
            $table->string('serial_number')->nullable();;
            $table->string('fa#')->nullable();;
            $table->string('equipment_sequence_number')->nullable();;
            $table->date('manufacture_date')->nullable();;
            $table->date('installation_date')->nullable();
            $table->unsignedBigInteger('equipment_status')->nullable();
            $table->unsignedBigInteger('vendor')->nullable();
            $table->string('manual_file_path')->nullable();
            $table->unsignedBigInteger('building_block')->nullable();
            $table->unsignedBigInteger('floor')->nullable();
            $table->unsignedBigInteger('department')->nullable();
            $table->string('room_area')->nullable();
            $table->string('section')->nullable();
            $table->string('sub_section')->nullable();
            $table->string('custodian Name')->nullable();
            $table->string('office Extention')->nullable();
            $table->string('mobile')->nullable();
            $table->string('email')->nullable();
            $table->unsignedBigInteger('ppm_type')->nullable();
            $table->date('last_ppm_date')->nullable();
            $table->date('next_ppm_date')->nullable();
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
        Schema::dropIfExists('assets');
    }
}
