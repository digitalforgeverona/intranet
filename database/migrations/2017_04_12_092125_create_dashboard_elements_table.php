<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDashboardElementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dashboard_elements', function (Blueprint $table) {
            $table->increments('id');
            $table->char('name',200);
            $table->char('class',200);
            $table->integer('row');
            $table->integer('col');
            $table->char('title',200);
            $table->char('title_icon',200);
            $table->char('bgcolor',7);
            $table->char('icon',200);
            $table->text('more_link');
            $table->char('text',200);
            $table->tinyInteger('enable');
            $table->char('users',250);
            $table->text('query');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('dashboard_elements');
    }
}