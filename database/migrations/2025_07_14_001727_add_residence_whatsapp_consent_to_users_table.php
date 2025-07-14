<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddResidenceWhatsappConsentToUsersTable extends Migration
{
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('residence')->nullable();
            $table->string('whatsapp')->unique()->nullable();
            $table->boolean('consent_accepted')->default(false);
        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['residence', 'whatsapp', 'consent_accepted']);
        });
    }
}
