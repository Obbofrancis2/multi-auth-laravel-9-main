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
        //
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('servicename');
            $table->string('servicetype');
            $table->string('serviceprice');
            $table->date('startdate');
            $table->date('enddate');
            $table->timestamp('service_added_at')->nullable();
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
