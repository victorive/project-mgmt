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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('project');
            $table->date('end_date');
            $table->string('subtask');
            $table->string('stage_one');
            $table->string('stage_two');
            $table->string('stage_three');
            $table->string('stage_four');
            $table->string('description');
            $table->date('start_date');
            $table->foreignId('client_id')->constrained('clients')->onDelete('cascade');
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
        Schema::dropIfExists('projects');
    }
};
