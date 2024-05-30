<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function Laravel\Prompts\table;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->id();
            $table->char('npm', 10);
            $table->string('nama', 45);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
       //
    }
    
}
