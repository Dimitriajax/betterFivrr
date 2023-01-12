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
        Schema::create('business_accounts', function (Blueprint $table) {
            $table->id();
            $table->string("company_name")->unique();
            $table->string("address");
            $table->string("zipcode");
            $table->string('country');
            $table->string('sector');
            $table->text('about');
            $table->string('company_logo');
            $table->timestamps();
            $table->foreignId('user_id')->nullable()->constrained('users')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('business_accounts');
    }
};