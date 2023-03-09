<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateObservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('observations', function (Blueprint $table) {
            $table->id();
            $table->string('type_media')->nullable();
            $table->string('name_media')->nullable();
            $table->string('emission')->nullable();
            $table->string('date_diffusions')->nullable();
            $table->string('video')->nullable();
            $table->string('audio')->nullable();
            $table->string('text_faute')->nullable();
            $table->string('screenshot')->nullable();
            $table->string('url_article')->nullable();
            $table->string('docs_pdf')->nullable();
            $table->string('comments')->nullable();
            $table->string('decision_finale')->nullable();
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
        Schema::dropIfExists('observations');
    }
}
