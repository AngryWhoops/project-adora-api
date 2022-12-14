<?php

use App\Models\Hashtag;
use App\Models\Post;
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
        Schema::create('hashtag_post', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignIdFor(Hashtag::class, 'hashtag_id')
                ->index()
                ->comment('Id хештега');
            $table->foreignIdFor(Post::class, 'post_id')
                ->index()
                ->comment('Id поста');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hashtag_post');
    }
};
