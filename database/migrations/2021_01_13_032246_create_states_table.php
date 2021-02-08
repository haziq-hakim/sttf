<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('STTF_STATES', function (Blueprint $table) {
            
            $table->bigIncrements('STATE_ID'); 
            $table->string('STATE_NAME')->nullable();     

        });

        DB::table('STTF_STATES')->insert(
            array(
                [ 
                    'STATE_ID'        => '1' ,
                    'STATE_NAME'      => 'KUALA LUMPUR' 
                ],
                [ 
                    'STATE_ID'        => '2' ,
                    'STATE_NAME'      => 'PUTRAJAYA' 
                ], 
                [ 
                    'STATE_ID'        => '3' ,
                    'STATE_NAME'      => 'LABUAN' 
                ], 

                [ 
                    'STATE_ID'        => '4' ,
                    'STATE_NAME'      => 'SELANGOR' 
                ], 
                [ 
                    'STATE_ID'        => '5' ,
                    'STATE_NAME'      => 'NEGERI SEMBILAN' 
                ], 
                [ 
                    'STATE_ID'        => '6' ,
                    'STATE_NAME'      => 'MALACCA' 
                ], 
                [ 
                    'STATE_ID'        => '7' ,
                    'STATE_NAME'      => 'JOHOR' 
                ], 
                [ 
                    'STATE_ID'        => '8' ,
                    'STATE_NAME'      => 'PAHANG' 
                ], 
                [ 
                    'STATE_ID'        => '9' ,
                    'STATE_NAME'      => 'PERAK' 
                ], 
                [ 
                    'STATE_ID'        => '10' ,
                    'STATE_NAME'      => 'KEDAH' 
                ], 
                [ 
                    'STATE_ID'        => '11' ,
                    'STATE_NAME'      => 'PENANG' 
                ], 
                [ 
                    'STATE_ID'        => '12' ,
                    'STATE_NAME'      => 'PERLIS' 
                ], 
                [ 
                    'STATE_ID'        => '13' ,
                    'STATE_NAME'      => 'KELANTAN' 
                ], 
                [ 
                    'STATE_ID'        => '14' ,
                    'STATE_NAME'      => 'TERENGGANU' 
                ], 
                [ 
                    'STATE_ID'        => '15' ,
                    'STATE_NAME'      => 'SABAH' 
                ], 
                [ 
                    'STATE_ID'        => '16' ,
                    'STATE_NAME'      => 'SARAWAK' 
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
        Schema::dropIfExists('states');

        Schema::table('STTF_STATES', function($table) {
            $table->dropColumn('STATE_ID'); 
            $table->dropColumn('STATE_NAME');  
        }); 
    }
}
