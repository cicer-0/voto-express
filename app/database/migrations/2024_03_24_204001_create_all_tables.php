<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('Institution', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 255);
            $table->string('address', 255)->nullable();
            $table->string('city', 100)->nullable();
            $table->string('country', 100)->nullable();
            $table->timestamps();
        });

        Schema::create('Election', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 255);
            $table->dateTime('start_date');
            $table->dateTime('end_date');
            $table->unsignedInteger('institution_id');
            $table->text('description')->nullable();
            $table->enum('status', ['Planned', 'Ongoing', 'Finished'])->default('Planned');
            $table->foreign('institution_id')->references('id')->on('Institution');
            $table->timestamps();
        });

        Schema::create('Option', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 255);
            $table->text('description')->nullable();
            $table->string('image_url', 255)->nullable();
            $table->unsignedInteger('election_id');
            $table->foreign('election_id')->references('id')->on('Election');
            $table->timestamps();
        });

        Schema::create('Candidate', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 255);
            $table->string('last_name', 255);
            $table->string('political_party', 255)->nullable();
            $table->unsignedInteger('option_id');
            $table->string('photo_url', 255)->nullable();
            $table->date('date_of_birth')->nullable();
            $table->text('experience')->nullable();
            $table->foreign('option_id')->references('id')->on('Option');
            $table->timestamps();
        });

        Schema::create('User', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 255);
            $table->string('last_name', 255);
            $table->string('dni', 20)->unique();
            $table->string('email', 255)->unique()->nullable();
            $table->string('password')->nullable();
            $table->unsignedInteger('institution_id');
            $table->timestamp('registration_date')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->enum('type', ['Administrator', 'Regular User', 'Institucion'])->default('Regular User');
            $table->foreign('institution_id')->references('id')->on('Institution');
            $table->timestamps();
        });
        Schema::create('Vote', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('option_id');
            $table->timestamp('vote_date')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->foreign('user_id')->references('id')->on('User');
            $table->foreign('option_id')->references('id')->on('Option');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('User');
        Schema::dropIfExists('Vote');
        Schema::dropIfExists('Candidate');
        Schema::dropIfExists('Option');
        Schema::dropIfExists('Election');
        Schema::dropIfExists('Institution');
    }
};
