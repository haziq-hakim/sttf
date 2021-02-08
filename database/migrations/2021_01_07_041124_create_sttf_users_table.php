<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSttfUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('STTF_USERS', function (Blueprint $table) {
            $table->bigIncrements('USER_ID'); 
            $table->string('STAFF_NAME')->nullable();
            $table->string('EMAIL_ADDRESS')->nullable();
            $table->string('EXT_NO')->nullable();
            $table->string('TOKEN_JWT')->nullable();  
            $table->string('LEVEL_ACCESS')->nullable(); 
            $table->string('MODULE_ACCESS')->nullable(); 
            $table->string('ACTIVE')->nullable(); 
            $table->datetime('LAST_LOGIN')->nullable(); 
            $table->datetime('LAST_LOGOUT')->nullable(); 

            $table->string('CREATED_BY_EMAIL')->nullable(); 
            $table->datetime('CREATED_BY_DATE')->nullable(); 
            $table->string('CREATED_REMARK')->nullable(); 
            $table->string('UPDATED_STATUS')->nullable(); 
            $table->integer('UPDATED_COUNT')->nullable(); 
            $table->string('UPDATED_BY_EMAIL')->nullable(); 
            $table->datetime('UPDATED_BY_DATE')->nullable(); 
            $table->string('UPDATED_REMARK')->nullable(); 
        });

        DB::table('STTF_USERS')->insert(
            array(
                [ 
                    'USER_ID'          => '1' ,
                    'STAFF_NAME'       => 'ROZAIMI BIN ZAMAHRI' ,
                    'EMAIL_ADDRESS'    => 'rozaimi.zamahri@smebank.com.my',
                    'EXT_NO'           => '2108',
                    'TOKEN_JWT'        => '',
                    'LEVEL_ACCESS'     => 'SUPERADMIN',
                    'MODULE_ACCESS'    => 'DITP|ITBS|INFRA',
                    'ACTIVE'           => 'Y',
                    'LAST_LOGIN'       => '2021-01-06 10:10:10',
                    'LAST_LOGOUT'      => '2021-01-06 10:10:10',

                    'CREATED_BY_EMAIL' => 'rozaimi.zamahri@smebank.com.my',
                    'CREATED_BY_DATE'  => '2021-01-06 10:10:10',
                    'CREATED_REMARK'   => 'default remark',
                    'UPDATED_STATUS'   => 'N',
                    'UPDATED_COUNT'    => '0',
                    'UPDATED_BY_EMAIL' => 'rozaimi.zamahri@smebank.com.my',
                    'UPDATED_BY_DATE'  => '2021-01-06 10:10:10',
                    'UPDATED_REMARK'   => 'default remark'
                ] 
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sttf_users');

        Schema::table('STTF_USERS', function($table) {
            $table->dropColumn('USER_ID'); 
            $table->dropColumn('STAFF_NAME');
            $table->dropColumn('EMAIL_ADDRESS');
            $table->dropColumn('EXT_NO');
            $table->dropColumn('TOKEN_JWT');  
            $table->dropColumn('LEVEL_ACCESS'); 
            $table->dropColumn('MODULE_ACCESS'); 
            $table->dropColumn('ACTIVE'); 
            $table->dropColumn('LAST_LOGIN'); 
            $table->dropColumn('LAST_LOGOUT'); 

            $table->dropColumn('CREATED_BY_EMAIL'); 
            $table->dropColumn('CREATED_BY_DATE'); 
            $table->dropColumn('CREATED_REMARK'); 
            $table->dropColumn('UPDATED_STATUS'); 
            $table->dropColumn('UPDATED_COUNT'); 
            $table->dropColumn('UPDATED_BY_EMAIL'); 
            $table->dropColumn('UPDATED_BY_DATE'); 
            $table->dropColumn('UPDATED_REMARK');  
        });
    }
}
