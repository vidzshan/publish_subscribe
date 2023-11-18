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
        Schema::create('messages', function (Blueprint $table) {
            $table->id(); // Auto-incrementing primary key
            $table->text('content'); // Text column for message content
            $table->unsignedBigInteger('user_id'); // Unsigned big integer for user_id (foreign key)
            $table->foreign('user_id')->references('id')->on('users'); // Define the user_id as a foreign key referencing the 'id' column in the 'users' table
            $table->timestamps(); // Created_at and updated_at timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('messages');
    }
};

