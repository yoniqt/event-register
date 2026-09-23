<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('registrations', function (Blueprint $table) {
            $table->string('first_name')->default('')->after('id');
            $table->string('last_name')->default('')->after('first_name');
        });

        DB::table('registrations')->orderBy('id')->each(function ($registration) {
            $parts = preg_split('/\s+/', trim($registration->full_name), 2);

            DB::table('registrations')->where('id', $registration->id)->update([
                'first_name' => $parts[0] ?? '',
                'last_name' => $parts[1] ?? '',
            ]);
        });

        Schema::table('registrations', function (Blueprint $table) {
            $table->dropColumn('full_name');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('registrations', function (Blueprint $table) {
            $table->string('full_name')->default('')->after('id');
        });

        DB::table('registrations')->orderBy('id')->each(function ($registration) {
            DB::table('registrations')->where('id', $registration->id)->update([
                'full_name' => trim("{$registration->first_name} {$registration->last_name}"),
            ]);
        });

        Schema::table('registrations', function (Blueprint $table) {
            $table->dropColumn(['first_name', 'last_name']);
        });
    }
};
