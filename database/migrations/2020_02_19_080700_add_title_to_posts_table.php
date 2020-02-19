<?php
// A way to add a column AFTER pushing work to production
// So we would need to add these columns 'manually'
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTitleToPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::table('posts', function (Blueprint $table) {
        //     $table->string('title');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::table('posts', function (Blueprint $table) {
        //     $table->dropColumn('title');
        // });
    }
}
