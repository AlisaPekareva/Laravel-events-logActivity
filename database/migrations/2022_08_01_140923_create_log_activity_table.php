<?php


use Illuminate\Support\Facades\Schema;

use Illuminate\Database\Schema\Blueprint;

use Illuminate\Database\Migrations\Migration;


class CreateLogActivityTable extends Migration

{

    /**

     * Запуск миграций.

     *

     * @return void

     */

    public function up()

    {

        Schema::create('log_activities', function (Blueprint $table) {

            $table->increments('id');

            $table->string('subject');

            $table->string('url');

            $table->string('method');

            $table->string('ip');

            $table->string('agent')->nullable();

            $table->integer('user_id')->nullable();

            $table->timestamps();

        });

    }


    /**

     * Остановка миграций.

     *

     * @return void

     */

    public function down()

    {

        Schema::drop('log_activities');

    }

}

