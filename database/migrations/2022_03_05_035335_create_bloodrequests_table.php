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
        Schema::create('bloodrequests', function (Blueprint $table) {
            $table->id();
            $table->string('userid');
            $table->string('request_number');
            $table->string('patient_name');
            $table->string('type');
            $table->string('unit');
            $table->string('blood_group');
            $table->dateTime('required_date');
            $table->string('requisition_form');
            $table->string('location');
            $table->string('pin');
            $table->string('hospital');
            $table->string('patient_status');
            $table->string('status')->nullable();
            $table->string('donation_status')->nullable();
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
        Schema::dropIfExists('bloodrequests');
    }
};
