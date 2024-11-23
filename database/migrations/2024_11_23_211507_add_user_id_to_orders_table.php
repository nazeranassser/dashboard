<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUserIdToOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('orders', function (Blueprint $table) {
            // إضافة عمود user_id الذي يشير إلى جدول users
            $table->unsignedBigInteger('user_id')->nullable();

            // تحديد العلاقة بين العمود و جدول users
            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('orders', function (Blueprint $table) {
            // حذف العمود في حالة التراجع عن الهجرة
            $table->dropForeign(['user_id']);
            $table->dropColumn('user_id');
        });
    }
}

