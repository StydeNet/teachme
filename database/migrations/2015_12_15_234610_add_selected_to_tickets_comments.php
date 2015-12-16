<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class AddSelectedToTicketsComments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ticket_comments', function(Blueprint $table){
            $table->boolean('selected')
                ->after('link')
                ->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ticket_comments', function(Blueprint $table){
            $table->dropColumn('selected');
        });
    }
}
