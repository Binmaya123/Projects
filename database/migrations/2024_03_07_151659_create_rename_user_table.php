<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRenameUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('rename_user', function (Blueprint $table) {
        //     $table->id();
        //     $table->timestamps();
        // });
        Schema::table('users', function (Blueprint $table) {
            $table->renameColumn('name', 'username');
        });
       
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rename_user');
    }
}
