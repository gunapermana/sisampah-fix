<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->unsignedBigInteger('role_id')->required()->after('address');
            $table->foreign('role_id')->references('id')->on('roles')->onDelete('restrict');

            $table->unsignedBigInteger('saving_id')->required()->after('role_id');
            $table->foreign('saving_id')->references('id')->on('savings')->onDelete('restrict');

            $table->unsignedBigInteger('poin_id')->required()->after('saving_id');
            $table->foreign('poin_id')->references('id')->on('poins')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['role_id']);
            $table->dropColumn('role_id');
            $table->dropForeign(['saving_id']);
            $table->dropColumn('saving_id');
            $table->dropForeign(['poin_id']);
            $table->dropColumn('poin_id');
        });
    }
};