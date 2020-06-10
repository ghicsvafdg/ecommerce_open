<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('province', function (Blueprint $table) {
            $table->char('id',6)->collation('utf8_unicode_ci');
            $table->string('name',45)->collation('utf8_unicode_ci');
            $table->string('type',45)->collation('utf8_unicode_ci');
        });
        Schema::create('district', function (Blueprint $table) {
            $table->char('id',6)->collation('utf8_unicode_ci');
            $table->string('name',45)->collation('utf8_unicode_ci');
            $table->string('type',45)->collation('utf8_unicode_ci');
            $table->char('province_id',6)->collation('utf8_unicode_ci');
        });
        Schema::create('ward', function (Blueprint $table) {
            $table->char('id',6)->collation('utf8_unicode_ci');
            $table->string('name',45)->collation('utf8_unicode_ci');
            $table->string('type',45)->collation('utf8_unicode_ci');
            $table->char('district_id',6)->collation('utf8_unicode_ci');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('address_tables');
    }
}
