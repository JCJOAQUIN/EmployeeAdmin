<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('user')->after('email_verified_at');
            $table->integer('postal_code')->nullable()->after('name');
            $table->text('address')->nullable()->after('name');
            $table->string('city')->nullable()->after('name');
            $table->string('township')->nullable()->after('name');
            $table->string('state')->nullable()->after('name');
            $table->integer('phone')->nullable()->after('name');
            $table->string('nss',15)->nullable()->after('name');
            $table->string('rfc',13)->nullable()->after('name');
            $table->string('curp',18)->nullable()->after('name');
            $table->date('birthday')->nullable()->after('name');
            $table->enum('gender',['Female','Male'])->after('name');
            $table->string('second_last_name',25)->nullable()->after('name');
            $table->string('last_name',25)->after('name');
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
            $table->dropColumn('last_name');
            $table->dropColumn('second_last_name');
            $table->dropColumn('gender');
            $table->dropColumn('birthday');
            $table->dropColumn('curp');
            $table->dropColumn('rfc');
            $table->dropColumn('nss');
            $table->dropColumn('phone');
            $table->dropColumn('state');
            $table->dropColumn('township');
            $table->dropColumn('city');
            $table->dropColumn('postal_code');
            $table->dropColumn('address');
            $table->dropColumn('user');
        });
    }
}
