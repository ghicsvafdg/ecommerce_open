<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateVoucherTable extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */
    public function up()
    {
        //
        Schema::table('vouchers', function (Blueprint $table) {
            $table->dropForeign('vouchers_product_id_foreign');
            $table->dropColumn('product_id');
        });
        
    }
    
    /**
    * Reverse the migrations.
    *
    * @return void
    */
    public function down()
    {
        
    }
}
