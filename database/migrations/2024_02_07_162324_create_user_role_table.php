<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('user_roles', function (Blueprint $table) {
            //
            $table->id();
            $table->bigInteger('user')->unsigned()->index()->nullable();
            $table->foreign('user')->references('id')->on('users')->onDelete('cascade');
            $table->bigInteger('role')->unsigned()->index()->nullable();
            $table->foreign('role')->references('id')->on('role')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
