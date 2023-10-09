<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use PhpParser\Node\Expr\Cast\String_;
use Ramsey\Uuid\Type\Integer;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('admision_number')->prima();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('gender');
            $table->string('address');
            $table->date('dob');
            $table->string('house_id');
            $table->string('grade_id');
            $table->string('nic')->unique();
            $table->timestamps();
            $table->softDeletes($column = 'deleted_at', $precision = 0);

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
