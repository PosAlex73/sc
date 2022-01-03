<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Installation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_notifications', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable(false);
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('title', 255)->nullable(false);
            $table->text('message')->nullable(true);
            $table->string('status', 1)->default(\App\Enums\ThreadMessageTypes::UNREAD);
            $table->string('type', 1)->default(\App\Enums\AdminNotificationTypes::COMMON);
            $table->timestamps();
        });

        Schema::table('users', function (Blueprint $table) {
            $table->string('status', 1)->default(\App\Enums\UserStatuses::ACTIVE);
            $table->string('type')->default(\App\Enums\UserTypes::SIMPLE);
        });

        Schema::table('groups', function (Blueprint $table) {
            $table->id();
            $table->string('title', 255)->nullable(false);
            $table->text('description');
            $table->string('status', 1)->default(\App\Enums\CommonStatuses::ACTIVE);
            $table->text('short_description', 1024)->nullable(true);
            $table->unsignedBigInteger('user_id')->nullable(false);
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('type', 1)->default(\App\Enums\GroupTypes::ACTIVE);
        });

        Schema::table('groups_users', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('group_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('group_id')->references('id')->on('groups');
        });

        Schema::table('group_messages', function (Blueprint $table) {
            $table->id();
            $table->string('title', 255)->nullable(false);
            $table->text('message')->nullable(false);
            $table->unsignedBigInteger('user_id')->nullable(false);
            $table->unsignedBigInteger('group_id')->nullable(false);
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('group_id')->references('id')->on('groups');
            $table->timestamps();
        });

        Schema::table('pages', function (Blueprint $table) {
            $table->id();
            $table->string('title', 255)->nullable(false);
            $table->text('text')->nullable(false);
            $table->string('status', 1)->default(\App\Enums\CommonStatuses::ACTIVE);
            $table->string('type', 1)->default(\App\Enums\PageTypes::WAITING);
            $table->timestamps();
        });

        Schema::table('settings', function (Blueprint $table) {
            $table->id();
            $table->string('title', 255);
            $table->text('value',);
            $table->timestamps();
        });

        Schema::table('tags', function (Blueprint $table) {
            $table->id();
            $table->string('title', 255);
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
        Schema::dropIfExists('admin_notifications');
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['status', 'type']);
        });
        Schema::dropIfExists('groups');
        Schema::dropIfExists('groups_users');
        Schema::dropIfExists('group_messages');
        Schema::dropIfExists('pages');
        Schema::dropIfExists('settings');
        Schema::dropIfExists('tags');
    }
}
