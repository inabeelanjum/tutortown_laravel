<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('image')->nullable()->default('N/A');
            $table->string('about')->nullable()->default('N/A');
            $table->string('location')->nullable()->default('N/A');
            $table->string('charges')->nullable()->default('N/A');
            $table->string('phone')->nullable()->default('N/A');
            $table->string('subj1')->nullable()->default('N/A');
            $table->string('subj2')->nullable()->default('N/A');
            $table->string('subj3')->nullable()->default('N/A');
            $table->string('subj4')->nullable()->default('N/A');
            $table->string('subj5')->nullable()->default('N/A');
            $table->string('subj6')->nullable()->default('N/A');
            $table->char('lat')->nullable()->default('N/A');
            $table->char('lang')->nullable()->default('N/A');
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
        Schema::dropIfExists('profiles');
    }
}
