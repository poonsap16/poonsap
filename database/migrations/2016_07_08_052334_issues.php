<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Issues extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('issues', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('requester');
            $table->tinyInteger('service_type_id')->nullable();
            $table->tinyInteger('service_domain_id')->nullable();
            $table->string('requester_detail_issue',256);
            $table->tinyInteger('queued')->nullable();
            $table->datetime('service_begin_at')->nullable();
            $table->string('checkup_detail',256);
            $table->datetime('service_end_estimated')->nullable();
            $table->datetime('service_end_at')->nullable();
            $table->tinyInteger('issue_status_id')->unsigned()->nullable();
            $table->string('summary_report',500)->nullable();
            $table->boolean('need_followup')->nullable();
            $table->integer('service_by')->unsigned()->nullable();
            $table->tinyInteger('requester_rate_service')->nullable();
            $table->integer('creator')->unsigned();
            $table->integer('updater')->unsigned();
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
        Schema::drop('issues');
    }
}
