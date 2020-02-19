<?php
// php artisan make:migration create_posts_table
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations --> 'php artisan migrate'
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('slug');
            // we added 'title' post-migrate, running 'php artisan migrate' wont work, so:
            // Option 1: run php artisan migrate:rollback (then) migrate (loose all data)
            // Option 2: 'php artisan migrate:fresh' - drops then migrates.
            $table->string('title');
            $table->text('body');
            $table->timestamps();
            $table->timestamp('published_at')->nullable();
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
}
