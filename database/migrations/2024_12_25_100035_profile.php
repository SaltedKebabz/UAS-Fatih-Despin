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
        Schema::create('Profile', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->text('kelas');
            $table->text('nim');
            $table->text('biografi')->nullable();
            $table->text('alamat')->nullable();
            $table->bigInteger('no_telpon')->nullable();
            $table->string('ProfilePic')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Profile');
    }
};
