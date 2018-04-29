<?php

use App\Traits\MigrationHelper;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangePeopleToSignificantother extends Migration
{
    use MigrationHelper;

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('significant_others', function (Blueprint $table) {
            $table->dropColumn(
                'people_id'
            );
        });

        Schema::table('significant_others', function (Blueprint $table) {
            $this->default($table->integer('contact_id'), 0)->after('account_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('significant_others', function (Blueprint $table) {
            $table->integer('people_id')->after('account_id');
        });

        Schema::table('significant_others', function (Blueprint $table) {
            $table->dropColumn(
                'contact_id'
            );
        });
    }
}
