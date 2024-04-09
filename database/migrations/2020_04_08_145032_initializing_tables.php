<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('vip_details', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->float('rate');
        });

        Schema::create('role_permissions', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->tinyInteger('on_users');
            $table->tinyInteger('on_roles');
            $table->tinyInteger('on_dashboard');
            $table->tinyInteger('on_notification');
            $table->tinyInteger('on_overview');
            $table->tinyInteger('on_auto_approve');
        });

        Schema::create('sponsors', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('photo');
        });

        Schema::create('settings', function (Blueprint $table) {
            $table->string('company_name');
            $table->string('short_name');
            $table->string('email');
            $table->string('currency');
            $table->string('marquee');
            $table->string('company_image');
            $table->string('language');
            $table->string('contacts');
            $table->string('line_id');
            $table->string('work_hour');
            $table->string('company_description');
            $table->string('commission');
            $table->tinyInteger('allow_login');
            $table->tinyInteger('allow_signup');
            $table->string('logo');
            $table->string('login_background');
            $table->string('login_background_mobile');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
        Schema::dropIfExists('sponsors');
        Schema::dropIfExists('role_permissions');
        Schema::dropIfExists('vip_details');
    }
};
