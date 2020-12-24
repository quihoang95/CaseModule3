<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnImage1ToProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->longText('image1')->nullable()->after('image');
            $table->longText('image2')->nullable()->after('image1');
            $table->longText('image3')->nullable()->after('image2');
            $table->longText('image4')->nullable()->after('image3');
            $table->longText('image5')->nullable()->after('image4');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            //
        });
    }
}
