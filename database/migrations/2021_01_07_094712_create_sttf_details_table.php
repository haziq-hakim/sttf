<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSttfDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('STTF_DETAILS', function (Blueprint $table) {
            
            $table->bigIncrements('DETAIL_ID'); 
            $table->integer('APP_ID')->nullable();
            $table->string('CHECKLIST_INFO')->nullable();
            $table->string('CHECKLIST_MARK')->nullable();
            $table->string('CHECKLIST_REMARK')->nullable();   

        });

        DB::table('STTF_DETAILS')->insert(
            array(
                [ 
                    'DETAIL_ID'        => '1' ,
                    'APP_ID'           => '1' ,
                    'CHECKLIST_INFO'   => 'SMEs as defined by National Entrepreneur and SME Development Council (NESDC)' ,
                    'CHECKLIST_MARK'   => '', 
                    'CHECKLIST_REMARK' => '' 
                ],
                [ 
                    'DETAIL_ID'        => '2' ,
                    'APP_ID'           => '1' ,
                    'CHECKLIST_INFO'   => 'Registered with Suruhanjaya Syarikat Malaysia (SSM), or authorities/district offices (for Sabah and Sarawak), or statutory bodies for professional service providers' ,
                    'CHECKLIST_MARK'   => '', 
                    'CHECKLIST_REMARK' => ''
                ],
                [ 
                    'DETAIL_ID'        => '3' ,
                    'APP_ID'           => '1' ,
                    'CHECKLIST_INFO'   => 'Shareholding by Public Listed Companies or Government Linked Companies (if any) shall not exceed 20%' ,
                    'CHECKLIST_MARK'   => '', 
                    'CHECKLIST_REMARK' => '' 
                ],
                [ 
                    'DETAIL_ID'        => '4' ,
                    'APP_ID'           => '1' ,
                    'CHECKLIST_INFO'   => 'At least 51% of shares held by Malaysian residing in Malaysia' ,
                    'CHECKLIST_MARK'   => '', 
                    'CHECKLIST_REMARK' => ''
                ],
                [ 
                    'DETAIL_ID'        => '5' ,
                    'APP_ID'           => '1' ,
                    'CHECKLIST_INFO'   => 'At least 2 years in operations.' ,
                    'CHECKLIST_MARK'   => '', 
                    'CHECKLIST_REMARK' => '' 
                ],
                [ 
                    'DETAIL_ID'        => '6' ,
                    'APP_ID'           => '1' ,
                    'CHECKLIST_INFO'   => 'Financially solvent' ,
                    'CHECKLIST_MARK'   => '', 
                    'CHECKLIST_REMARK' => '' 
                ],
                [ 
                    'DETAIL_ID'        => '7' ,
                    'APP_ID'           => '1' ,
                    'CHECKLIST_INFO'   => 'No legal action against the Company or any its director/ shareholder/ partner/ owner/ guarantor under the laws of Malaysia' ,
                    'CHECKLIST_MARK'   => '', 
                    'CHECKLIST_REMARK' => ''  
                ],
                [ 
                    'DETAIL_ID'        => '8' ,
                    'APP_ID'           => '1' ,
                    'CHECKLIST_INFO'   => 'Satisfactory CCRIS & CTOS track record with other Financial Institutions (FIs)' ,
                    'CHECKLIST_MARK'   => '', 
                    'CHECKLIST_REMARK' => ''  
                ],
                [ 
                    'DETAIL_ID'        => '9' ,
                    'APP_ID'           => '1' ,
                    'CHECKLIST_INFO'   => 'Latest audited for the financial year end is not more than or equivalent to 18 months from the date of financing application' ,
                    'CHECKLIST_MARK'   => '', 
                    'CHECKLIST_REMARK' => ''  
                ],
                [ 
                    'DETAIL_ID'        => '10' ,
                    'APP_ID'           => '1' ,
                    'CHECKLIST_INFO'   => 'The latest audited accounts are not qualified' ,
                    'CHECKLIST_MARK'   => '', 
                    'CHECKLIST_REMARK' => ''  
                ],
                [ 
                    'DETAIL_ID'        => '11' ,
                    'APP_ID'           => '1' ,
                    'CHECKLIST_INFO'   => 'For sole proprietor/partnership, the latest management account is subject to certification by accounting firm' ,
                    'CHECKLIST_MARK'   => '', 
                    'CHECKLIST_REMARK' => '' 
                ],
                [ 
                    'DETAIL_ID'        => '12' ,
                    'APP_ID'           => '1' ,
                    'CHECKLIST_INFO'   => 'Gearing Ratio must be as per Credit Underwriting Policy' ,
                    'CHECKLIST_MARK'   => '', 
                    'CHECKLIST_REMARK' => ''  
                ],
                [ 
                    'DETAIL_ID'        => '13' ,
                    'APP_ID'           => '1' ,
                    'CHECKLIST_INFO'   => 'Security arrangement: a)	Up to 80% guarantee cover from Syarikat Jaminan Pembiayaan Perniagaan (SJPP) b)	Personal guarantees/ joint and several guarantees' ,
                    'CHECKLIST_MARK'   => '', 
                    'CHECKLIST_REMARK' => '' 
                ],
                [ 
                    'DETAIL_ID'        => '14' ,
                    'APP_ID'           => '8' ,
                    'CHECKLIST_INFO'   => 'SMEs as defined by National Entrepreneur and SME Development Council (NESDC)' ,
                    'CHECKLIST_MARK'   => '', 
                    'CHECKLIST_REMARK' => '' 
                ],
                [ 
                    'DETAIL_ID'        => '15' ,
                    'APP_ID'           => '8' ,
                    'CHECKLIST_INFO'   => 'Registered with Suruhanjaya Syarikat Malaysia (SSM), or authorities/district offices (for Sabah and Sarawak), or statutory bodies for professional service providers' ,
                    'CHECKLIST_MARK'   => '', 
                    'CHECKLIST_REMARK' => ''
                ],
                [ 
                    'DETAIL_ID'        => '16' ,
                    'APP_ID'           => '8' ,
                    'CHECKLIST_INFO'   => 'Shareholding by Public Listed Companies or Government Linked Companies (if any) shall not exceed 20%' ,
                    'CHECKLIST_MARK'   => '', 
                    'CHECKLIST_REMARK' => '' 
                ],
                [ 
                    'DETAIL_ID'        => '17' ,
                    'APP_ID'           => '8' ,
                    'CHECKLIST_INFO'   => 'At least 51% of shares held by Malaysian residing in Malaysia' ,
                    'CHECKLIST_MARK'   => '', 
                    'CHECKLIST_REMARK' => ''
                ],
                [ 
                    'DETAIL_ID'        => '18' ,
                    'APP_ID'           => '8' ,
                    'CHECKLIST_INFO'   => 'At least 2 years in operations.' ,
                    'CHECKLIST_MARK'   => '', 
                    'CHECKLIST_REMARK' => '' 
                ],
                [ 
                    'DETAIL_ID'        => '19' ,
                    'APP_ID'           => '8' ,
                    'CHECKLIST_INFO'   => 'Financially solvent' ,
                    'CHECKLIST_MARK'   => '', 
                    'CHECKLIST_REMARK' => '' 
                ],
                [ 
                    'DETAIL_ID'        => '20' ,
                    'APP_ID'           => '8' ,
                    'CHECKLIST_INFO'   => 'No legal action against the Company or any its director/ shareholder/ partner/ owner/ guarantor under the laws of Malaysia' ,
                    'CHECKLIST_MARK'   => '', 
                    'CHECKLIST_REMARK' => ''  
                ],
                [ 
                    'DETAIL_ID'        => '21' ,
                    'APP_ID'           => '8' ,
                    'CHECKLIST_INFO'   => 'Satisfactory CCRIS & CTOS track record with other Financial Institutions (FIs)' ,
                    'CHECKLIST_MARK'   => '', 
                    'CHECKLIST_REMARK' => ''  
                ],
                [ 
                    'DETAIL_ID'        => '22' ,
                    'APP_ID'           => '8' ,
                    'CHECKLIST_INFO'   => 'Latest audited for the financial year end is not more than or equivalent to 18 months from the date of financing application' ,
                    'CHECKLIST_MARK'   => '', 
                    'CHECKLIST_REMARK' => ''  
                ],
                [ 
                    'DETAIL_ID'        => '23' ,
                    'APP_ID'           => '1' ,
                    'CHECKLIST_INFO'   => 'The latest audited accounts are not qualified' ,
                    'CHECKLIST_MARK'   => '', 
                    'CHECKLIST_REMARK' => ''  
                ],
                [ 
                    'DETAIL_ID'        => '24' ,
                    'APP_ID'           => '8' ,
                    'CHECKLIST_INFO'   => 'For sole proprietor/partnership, the latest management account is subject to certification by accounting firm' ,
                    'CHECKLIST_MARK'   => '', 
                    'CHECKLIST_REMARK' => '' 
                ],
                [ 
                    'DETAIL_ID'        => '25' ,
                    'APP_ID'           => '1' ,
                    'CHECKLIST_INFO'   => 'Gearing Ratio must be as per Credit Underwriting Policy' ,
                    'CHECKLIST_MARK'   => '', 
                    'CHECKLIST_REMARK' => ''  
                ],
                [ 
                    'DETAIL_ID'        => '26' ,
                    'APP_ID'           => '1' ,
                    'CHECKLIST_INFO'   => 'Security arrangement: a)	Up to 80% guarantee cover from Syarikat Jaminan Pembiayaan Perniagaan (SJPP) b)	Personal guarantees/ joint and several guarantees' ,
                    'CHECKLIST_MARK'   => '', 
                    'CHECKLIST_REMARK' => '' 
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
        Schema::dropIfExists('sttf_details');

        Schema::table('STTF_DETAILS', function($table) {
            $table->dropColumn('DETAIL_ID'); 
            $table->dropColumn('APP_ID');
            $table->dropColumn('CHECKLIST_INFO');
            $table->dropColumn('CHECKLIST_MARK');
            $table->dropColumn('CHECKLIST_REMARK');
        }); 
    }
}
