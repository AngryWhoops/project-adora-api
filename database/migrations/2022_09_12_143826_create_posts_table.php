<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id()->comment('Id поста, первичный ключ');
            $table->timestamps();
            $table->string('header')
                ->default(null)
                ->comment('Заголовок поста');
            $table->string('text')
                ->default(null)
                ->comment('Текст внутри поста');
            $table->foreignIdFor(User::class, 'user_id')
                ->index()
                ->comment('Id автора поста');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
};
