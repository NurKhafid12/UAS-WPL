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
    Schema::table('penerimas', function (Blueprint $table) {
        $table->string('jenis_kelamin')->nullable()->after('no_hp');
        $table->date('tanggal_lahir')->nullable()->after('jenis_kelamin'); // <- nullable
    });
}

public function down(): void
{
    Schema::table('penerimas', function (Blueprint $table) {
        $table->dropColumn(['jenis_kelamin', 'tanggal_lahir']);
    });
}

};
