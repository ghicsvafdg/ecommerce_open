<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUserSessionIdToCart extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('carts', function (Blueprint $table) {
            $table->unsignedInteger('user_id')->nullable()->change();
            $table->string('user_session_id')->nullable()->after('user_id');
            $table->string('size')->nullable()->after('user_session_id');
            $table->string('color')->nullable()->after('size');
            $table->string('quantity')->after('color');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cart', function (Blueprint $table) {
            //
        });
    }
}
