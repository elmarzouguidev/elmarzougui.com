<?php

use App\Models\CMS\Category;
use App\Models\User;
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
        Schema::create('posts', function (Blueprint $table) {

            $table->id();
            $table->uuid();
            $table->foreignIdFor(Category::class)->index()->nullable()->constrained();
            $table->foreignIdFor(User::class)->index()->constrained();
            $table->string('title');
            $table->string('slug')->unique();
            $table->mediumText('excerpt')->nullable();
            $table->longText('content')->nullable();
            $table->date('published_at');
            $table->json('options')->nullable();

            $table->boolean('published')->default(false);
            $table->boolean('active')->default(true);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
