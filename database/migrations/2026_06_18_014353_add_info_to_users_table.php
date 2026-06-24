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
        Schema::table('users', function (Blueprint $table) {
                $table->string('fname', 100);
                $table->string('lname', 100);
                $table->string('contact_number', 50) -> nullable();
                $table->string('birthdate') -> nullable();
                $table->string('address') -> nullable();
                $table->string('profile_photo') -> nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            
                $table->dropColumn('fname');
                $table->dropColumn('lname');
                $table->dropColumn('contact_number');
                $table->dropColumn('birthdate');
                $table->dropColumn('address');
                $table->dropColumn('profile_photo');

        });
    }
};
