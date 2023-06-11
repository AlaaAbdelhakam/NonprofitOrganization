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
        Schema::create('co_driver', function (Blueprint $table) {
            $table->id();
            $table->text('co_driver_name')->unique();
            $table->datetime('Date_of_birth')->nullable();
            $table->text('created_by')->nullable();
            $table->text('deleted_by')->nullable();
            $table->text('updated_by')->nullable();
            $table->softDeletes();
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
        Schema::table('co_driver', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });    }
};