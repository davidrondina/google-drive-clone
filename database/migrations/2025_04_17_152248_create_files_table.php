<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('files', function (Blueprint $table) {
            // $table->id();
            // $table->foreignId('user_id')->constrained('users')
            //     ->cascadeOnDelete();
            // $table->foreignId('parent_id')
            //     ->nullable()
            //     ->constrained('files')
            //     ->cascadeOnDelete();
            // $table->string('name');
            // $table->string('content');
            // $table->string('path');
            // $table->string('type');
            // $table->bigInteger('size')->nullable();
            // $table->string('mime')->nullable();
            // $table->timestamps();

            $table->id();

            // The owner of the file or folder
            $table->foreignId('user_id')
                ->constrained('users')
                ->cascadeOnDelete();

            // For nested folder structure
            $table->foreignId('parent_id')
                ->nullable()
                ->constrained('files')
                ->cascadeOnDelete();

            // The name shown in UI (can be same as original_name or customized)
            $table->string('name');

            // File or folder
            $table->enum('type', ['file', 'folder']);

            // Only for files
            $table->string('path')->nullable();           // path to the file in storage
            $table->string('mime')->nullable();           // MIME type of file (e.g., image/png)
            $table->bigInteger('size')->nullable();       // File size in bytes
            $table->string('original_name')->nullable();  // Original uploaded filename

            // Optional: text description or notes
            $table->text('description')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('files');
    }
};
