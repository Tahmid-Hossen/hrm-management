<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('employee_id')->unique();
            $table->string('full_name');
            $table->string('email')->unique();
            $table->string('phone')->unique();
            $table->date('birth_year');
            $table->enum('gender', ['Male', 'Female', 'Other']);
            $table->string('address');
            $table->string('designation');
            $table->date('joining_date');
            $table->string('password');
            $table->string('profile_photo')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        // Hash the password
        DB::statement("ALTER TABLE employees MODIFY COLUMN password VARCHAR(255) NOT NULL");

        // Remove length restriction for gender column
        DB::statement("ALTER TABLE employees MODIFY COLUMN gender ENUM('Male', 'Female', 'Other')");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
