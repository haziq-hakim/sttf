<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSttfChecklistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('STTF_CHECKLISTS', function (Blueprint $table) {
            $table->bigIncrements('CHECKLIST_ID'); 
            $table->string('CHECKLIST_NAME')->nullable();
            $table->string('CHECKLIST_DESC')->nullable(); 

            $table->string('CR_BY_EMAIL')->nullable(); 
            $table->datetime('CR_BY_DATE')->nullable(); 
            $table->string('CR_REMARK')->nullable(); 
            $table->string('UP_STATUS')->nullable(); 
            $table->integer('UP_COUNT')->nullable(); 
            $table->string('UP_BY_EMAIL')->nullable(); 
            $table->datetime('UP_BY_DATE')->nullable(); 
            $table->string('UP_REMARK')->nullable(); 
        });

        DB::table('STTF_CHECKLISTS')->insert(
            array(
                [ 
                    'CHECKLIST_ID'     => '1' ,
                    'CHECKLIST_NAME'   => 'SMEs as defined by National Entrepreneur and SME Development Council (NESDC)' ,
                    'CHECKLIST_DESC'   => '', 

                    'CR_BY_EMAIL'      => 'rozaimi.zamahri@smebank.com.my',
                    'CR_BY_DATE'       => '2021-01-07 10:10:10',
                    'CR_REMARK'        => 'default remark',
                    'UP_STATUS'        => 'N',
                    'UP_COUNT'         => '0',
                    'UP_BY_EMAIL'      => 'rozaimi.zamahri@smebank.com.my',
                    'UP_BY_DATE'       => '2021-01-07 10:10:10',
                    'UP_REMARK'        => 'default remark'
                ],
                [ 
                    'CHECKLIST_ID'     => '2' ,
                    'CHECKLIST_NAME'   => 'Registered with Suruhanjaya Syarikat Malaysia (SSM), or authorities/district offices (for Sabah and Sarawak), or statutory bodies for professional service providers' ,
                    'CHECKLIST_DESC'   => '', 

                    'CR_BY_EMAIL'      => 'rozaimi.zamahri@smebank.com.my',
                    'CR_BY_DATE'       => '2021-01-07 10:10:10',
                    'CR_REMARK'        => 'default remark',
                    'UP_STATUS'        => 'N',
                    'UP_COUNT'         => '0',
                    'UP_BY_EMAIL'      => 'rozaimi.zamahri@smebank.com.my',
                    'UP_BY_DATE'       => '2021-01-07 10:10:10',
                    'UP_REMARK'        => 'default remark'
                ],
                [ 
                    'CHECKLIST_ID'     => '3' ,
                    'CHECKLIST_NAME'   => 'Shareholding by Public Listed Companies or Government Linked Companies (if any) shall not exceed 20%',
                    'CHECKLIST_DESC'   => '', 

                    'CR_BY_EMAIL'      => 'rozaimi.zamahri@smebank.com.my',
                    'CR_BY_DATE'       => '2021-01-07 10:10:10',
                    'CR_REMARK'        => 'default remark',
                    'UP_STATUS'        => 'N',
                    'UP_COUNT'         => '0',
                    'UP_BY_EMAIL'      => 'rozaimi.zamahri@smebank.com.my',
                    'UP_BY_DATE'       => '2021-01-07 10:10:10',
                    'UP_REMARK'        => 'default remark'
                ],
                [ 
                    'CHECKLIST_ID'     => '4' ,
                    'CHECKLIST_NAME'   => 'At least 51% of shares held by Malaysian residing in Malaysia',
                    'CHECKLIST_DESC'   => '', 

                    'CR_BY_EMAIL'      => 'rozaimi.zamahri@smebank.com.my',
                    'CR_BY_DATE'       => '2021-01-07 10:10:10',
                    'CR_REMARK'        => 'default remark',
                    'UP_STATUS'        => 'N',
                    'UP_COUNT'         => '0',
                    'UP_BY_EMAIL'      => 'rozaimi.zamahri@smebank.com.my',
                    'UP_BY_DATE'       => '2021-01-07 10:10:10',
                    'UP_REMARK'        => 'default remark'
                ],
                [ 
                    'CHECKLIST_ID'     => '5' ,
                    'CHECKLIST_NAME'   => 'At least 2 years in operations.',
                    'CHECKLIST_DESC'   => '', 

                    'CR_BY_EMAIL'      => 'rozaimi.zamahri@smebank.com.my',
                    'CR_BY_DATE'       => '2021-01-07 10:10:10',
                    'CR_REMARK'        => 'default remark',
                    'UP_STATUS'        => 'N',
                    'UP_COUNT'         => '0',
                    'UP_BY_EMAIL'      => 'rozaimi.zamahri@smebank.com.my',
                    'UP_BY_DATE'       => '2021-01-07 10:10:10',
                    'UP_REMARK'        => 'default remark'
                ],
                [ 
                    'CHECKLIST_ID'     => '6' ,
                    'CHECKLIST_NAME'   => 'Financially solvent',
                    'CHECKLIST_DESC'   => '', 

                    'CR_BY_EMAIL'      => 'rozaimi.zamahri@smebank.com.my',
                    'CR_BY_DATE'       => '2021-01-07 10:10:10',
                    'CR_REMARK'        => 'default remark',
                    'UP_STATUS'        => 'N',
                    'UP_COUNT'         => '0',
                    'UP_BY_EMAIL'      => 'rozaimi.zamahri@smebank.com.my',
                    'UP_BY_DATE'       => '2021-01-07 10:10:10',
                    'UP_REMARK'        => 'default remark'
                ],
                [ 
                    'CHECKLIST_ID'     => '7' ,
                    'CHECKLIST_NAME'   => 'No legal action against the Company or any its director/ shareholder/ partner/ owner/ guarantor under the laws of Malaysia',
                    'CHECKLIST_DESC'   => '', 

                    'CR_BY_EMAIL'      => 'rozaimi.zamahri@smebank.com.my',
                    'CR_BY_DATE'       => '2021-01-07 10:10:10',
                    'CR_REMARK'        => 'default remark',
                    'UP_STATUS'        => 'N',
                    'UP_COUNT'         => '0',
                    'UP_BY_EMAIL'      => 'rozaimi.zamahri@smebank.com.my',
                    'UP_BY_DATE'       => '2021-01-07 10:10:10',
                    'UP_REMARK'        => 'default remark'
                ],
                [ 
                    'CHECKLIST_ID'     => '8' ,
                    'CHECKLIST_NAME'   => 'Satisfactory CCRIS & CTOS track record with other Financial Institutions (FIs)',
                    'CHECKLIST_DESC'   => '', 

                    'CR_BY_EMAIL'      => 'rozaimi.zamahri@smebank.com.my',
                    'CR_BY_DATE'       => '2021-01-07 10:10:10',
                    'CR_REMARK'        => 'default remark',
                    'UP_STATUS'        => 'N',
                    'UP_COUNT'         => '0',
                    'UP_BY_EMAIL'      => 'rozaimi.zamahri@smebank.com.my',
                    'UP_BY_DATE'       => '2021-01-07 10:10:10',
                    'UP_REMARK'        => 'default remark'
                ],
                [ 
                    'CHECKLIST_ID'     => '9' ,
                    'CHECKLIST_NAME'   => 'Latest audited for the financial year end is not more than or equivalent to 18 months from the date of financing application',
                    'CHECKLIST_DESC'   => '', 

                    'CR_BY_EMAIL'      => 'rozaimi.zamahri@smebank.com.my',
                    'CR_BY_DATE'       => '2021-01-07 10:10:10',
                    'CR_REMARK'        => 'default remark',
                    'UP_STATUS'        => 'N',
                    'UP_COUNT'         => '0',
                    'UP_BY_EMAIL'      => 'rozaimi.zamahri@smebank.com.my',
                    'UP_BY_DATE'       => '2021-01-07 10:10:10',
                    'UP_REMARK'        => 'default remark'
                ],
                [ 
                    'CHECKLIST_ID'     => '10' ,
                    'CHECKLIST_NAME'   => 'The latest audited accounts are not qualified',
                    'CHECKLIST_DESC'   => '', 

                    'CR_BY_EMAIL'      => 'rozaimi.zamahri@smebank.com.my',
                    'CR_BY_DATE'       => '2021-01-07 10:10:10',
                    'CR_REMARK'        => 'default remark',
                    'UP_STATUS'        => 'N',
                    'UP_COUNT'         => '0',
                    'UP_BY_EMAIL'      => 'rozaimi.zamahri@smebank.com.my',
                    'UP_BY_DATE'       => '2021-01-07 10:10:10',
                    'UP_REMARK'        => 'default remark'
                ],
                [ 
                    'CHECKLIST_ID'     => '11' ,
                    'CHECKLIST_NAME'   => 'For sole proprietor/partnership, the latest management account is subject to certification by accounting firm',
                    'CHECKLIST_DESC'   => '', 

                    'CR_BY_EMAIL'      => 'rozaimi.zamahri@smebank.com.my',
                    'CR_BY_DATE'       => '2021-01-07 10:10:10',
                    'CR_REMARK'        => 'default remark',
                    'UP_STATUS'        => 'N',
                    'UP_COUNT'         => '0',
                    'UP_BY_EMAIL'      => 'rozaimi.zamahri@smebank.com.my',
                    'UP_BY_DATE'       => '2021-01-07 10:10:10',
                    'UP_REMARK'        => 'default remark'
                ],
                [ 
                    'CHECKLIST_ID'     => '12' ,
                    'CHECKLIST_NAME'   => 'Gearing Ratio must be as per Credit Underwriting Policy',
                    'CHECKLIST_DESC'   => '', 

                    'CR_BY_EMAIL'      => 'rozaimi.zamahri@smebank.com.my',
                    'CR_BY_DATE'       => '2021-01-07 10:10:10',
                    'CR_REMARK'        => 'default remark',
                    'UP_STATUS'        => 'N',
                    'UP_COUNT'         => '0',
                    'UP_BY_EMAIL'      => 'rozaimi.zamahri@smebank.com.my',
                    'UP_BY_DATE'       => '2021-01-07 10:10:10',
                    'UP_REMARK'        => 'default remark'
                ],
                [ 
                    'CHECKLIST_ID'     => '13' ,
                    'CHECKLIST_NAME'   => 'Security arrangement: a)	Up to 80% guarantee cover from Syarikat Jaminan Pembiayaan Perniagaan (SJPP) b)	Personal guarantees/ joint and several guarantees',
                    'CHECKLIST_DESC'   => '', 

                    'CR_BY_EMAIL'      => 'rozaimi.zamahri@smebank.com.my',
                    'CR_BY_DATE'       => '2021-01-07 10:10:10',
                    'CR_REMARK'        => 'default remark',
                    'UP_STATUS'        => 'N',
                    'UP_COUNT'         => '0',
                    'UP_BY_EMAIL'      => 'rozaimi.zamahri@smebank.com.my',
                    'UP_BY_DATE'       => '2021-01-07 10:10:10',
                    'UP_REMARK'        => 'default remark'
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
        Schema::dropIfExists('sttf_checklists');

        Schema::table('STTF_CHECKLISTS', function($table) {
            $table->dropColumn('CHECKLIST_ID'); 
            $table->dropColumn('CHECKLIST_NAME');
            $table->dropColumn('CHECKLIST_DESC'); 

            $table->dropColumn('CR_BY_EMAIL'); 
            $table->dropColumn('CR_BY_DATE'); 
            $table->dropColumn('CR_REMARK'); 
            $table->dropColumn('UP_STATUS'); 
            $table->dropColumn('UP_COUNT'); 
            $table->dropColumn('UP_BY_EMAIL'); 
            $table->dropColumn('UP_BY_DATE'); 
            $table->dropColumn('UP_REMARK');  
        }); 
    }
}
