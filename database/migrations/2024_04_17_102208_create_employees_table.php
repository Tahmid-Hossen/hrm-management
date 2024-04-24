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
            $table->string('emp_id')->unique();
            $table->string('full_name')->nullable();
            $table->string('email')->unique();
            $table->string('phone')->nullable();
            $table->string('emergency_contact')->nullable();
            $table->string('emergency_contact_relation')->nullable();
            $table->date('birth_year')->nullable();
            $table->enum('gender', ['Male', 'Female', 'Other'])->nullable();
            $table->string('present_address')->nullable();
            $table->string('permanent_address')->nullable();
            $table->string('company_name')->nullable();
            $table->string('designation')->nullable();
            $table->string('is_user')->nullable();
            $table->string('institution_name_one')->nullable();
            $table->string('degree_one')->nullable();
            $table->string('department_one')->nullable();
            $table->date('passing_year_one')->nullable();
            $table->string('result_one')->nullable();
            $table->string('institution_name_two')->nullable();
            $table->string('degree_two')->nullable();
            $table->string('department_two')->nullable();
            $table->date('passing_year_two')->nullable();
            $table->string('result_two')->nullable();
            $table->string('institution_name_three')->nullable();
            $table->string('degree_three')->nullable();
            $table->string('department_three')->nullable();
            $table->date('passing_year_three')->nullable();
            $table->string('result_three')->nullable();
            $table->string('institution_name_four')->nullable();
            $table->string('degree_four')->nullable();
            $table->string('department_four')->nullable();
            $table->date('passing_year_four')->nullable();
            $table->string('result_four')->nullable();
            $table->date('joining_date')->nullable();
            $table->string('password')->nullable();
            $table->string('profile_photo')->nullable();
            $table->string('cv')->nullable();
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
