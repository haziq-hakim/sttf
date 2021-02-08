<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSttfAppsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('STTF_APPS', function (Blueprint $table) {
            
            $table->bigIncrements('APP_ID'); 
            $table->string('REF_NO')->nullable();
            $table->string('STAGE')->nullable();
            $table->string('STATUS')->nullable();
            $table->string('COMPANY')->nullable();  
            $table->string('BRANCH_NAME')->nullable();  
           
            $table->string('CUST_NAME')->nullable();  
            $table->string('CUST_PERSON_NAME')->nullable();
            $table->string('CUST_EMAIL')->nullable();   
            $table->string('CUST_CONTACT_NO')->nullable();  
            $table->string('CUST_OFFICE_NO')->nullable();  
            $table->string('CUST_SECTOR')->nullable();  
            $table->string('CUST_ADDRESS')->nullable();  
            $table->string('CUST_CITY')->nullable();  
            $table->string('CUST_STATE')->nullable();  

            $table->string('COMP_PERSON_NAME')->nullable();  
            $table->string('COMP_EMAIL')->nullable();  
            $table->string('COMP_CONTACT_NO')->nullable();  

            $table->string('SME_CLIENT')->nullable();  
            $table->string('SME_SECTOR_TM')->nullable();  
            $table->string('SME_AGM')->nullable();  
            $table->string('SME_AM')->nullable();  
            $table->string('SME_RM')->nullable();  
            $table->string('SME_REV')->nullable();  
            $table->string('SME_REMOVE')->nullable();  
            $table->string('SME_DEFINITION')->nullable();  

            $table->string('REG_SSM')->nullable();  
            $table->string('APPLICATION_AMOUNT')->nullable();  
            $table->string('APP_PRODUCT')->nullable();  
            $table->string('PLC_GLC')->nullable();  
            $table->string('MALAYSIAN_PCT')->nullable();  
            $table->string('YEARS_OPS')->nullable();  
            $table->string('FINANCIAL_SOLVENT')->nullable();  
            $table->string('NO_LEGAL_ACTION')->nullable();  

            $table->string('C_BY_NAME')->nullable(); 
            $table->string('C_BY_EMAIL')->nullable(); 
            $table->datetime('C_BY_DATE')->nullable(); 
            $table->string('C_REMARK')->nullable(); 

            $table->string('U_STATUS')->nullable(); 
            $table->integer('U_COUNT')->nullable(); 
            $table->string('U_BY_NAME')->nullable(); 
            $table->string('U_BY_EMAIL')->nullable(); 
            $table->datetime('U_BY_DATE')->nullable(); 
            $table->string('U_REMARK')->nullable(); 

            $table->string('SUBMITTED_BY_NAME')->nullable(); 
            $table->string('SUBMITTED_BY_EMAIL')->nullable(); 
            $table->datetime('SUBMITTED_BY_DATE')->nullable(); 
            $table->string('SUBMITTED_REMARK')->nullable(); 

            $table->string('SUPERVISOR_IS')->nullable(); 
            $table->string('SUPERVISOR_BY_NAME')->nullable(); 
            $table->string('SUPERVISOR_BY_EMAIL')->nullable(); 
            $table->datetime('SUPERVISOR_BY_DATE')->nullable(); 
            $table->string('SUPERVISOR_REMARK')->nullable(); 

            $table->string('HOD_IS')->nullable(); 
            $table->string('HOD_BY_NAME')->nullable(); 
            $table->string('HOD_BY_EMAIL')->nullable(); 
            $table->datetime('HOD_BY_DATE')->nullable(); 
            $table->string('HOD_REMARK')->nullable(); 

            $table->string('CHECKED_IS')->nullable(); 
            $table->string('CHECKED_BY_NAME')->nullable(); 
            $table->string('CHECKED_BY_EMAIL')->nullable(); 
            $table->datetime('CHECKED_BY_DATE')->nullable(); 
            $table->string('CHECKED_REMARK')->nullable(); 

            $table->string('VERIFIED_IS')->nullable(); 
            $table->string('VERIFIED_BY_NAME')->nullable(); 
            $table->string('VERIFIED_BY_EMAIL')->nullable(); 
            $table->datetime('VERIFIED_BY_DATE')->nullable(); 
            $table->string('VERIFIED_REMARK')->nullable(); 
        });

        DB::table('STTF_APPS')->insert(
            array(
                [ 
                    'APP_ID'            => '1',
                    'REF_NO'            => 'STTF00001',
                    'STAGE'             => 'DRAFT',
                    'STATUS'            => '',
                    'COMPANY'           => 'TMONE',
                    'BRANCH_NAME'       => 'SHAH ALAM ENTERPRISE CENTRE',
                    'CUST_NAME'         => 'BIG BAND SDN BHD',
                    'CUST_PERSON_NAME'  => 'JASON YONG',
                    'CUST_EMAIL'        => 'json@bigband.net.my',
                    'CUST_CONTACT_NO'   => '',
                    'CUST_OFFICE_NO'    => '',

                    'CUST_SECTOR'       => 'PROVISION INTERNET HOSTING SERVICES, INTERNET RELATED',
                    
                    'CUST_ADDRESS'      => 'BLOCK C-3-3 SETIAWALK PERSIARAN WAWASAN PUCHONG 47160 SELANGOR',
                    'CUST_CITY'         => '',
                    'CUST_STATE'        => '',

                    'COMP_PERSON_NAME'  => 'NASRY HASLIZA BINTI IBRAHIM',
                    'COMP_EMAIL'        => '',
                    'COMP_CONTACT_NO'   => '60133949307',

                    'SME_CLIENT'        => '',
                    'SME_SECTOR_TM'     => '',
                    'SME_AGM'           => '',
                    'SME_AM'            => '',
                    'SME_RM'            => '',
                    'SME_REV'           => '',
                    'SME_REMOVE'        => '',
                    'SME_DEFINITION'    => '', 

                    'REG_SSM'           => '', 
                    'APPLICATION_AMOUNT'=> '', 
                    'APP_PRODUCT'       => '', 
                    'PLC_GLC'           => '', 
                    'MALAYSIAN_PCT'     => '', 
                    'YEARS_OPS'         => '', 
                    'FINANCIAL_SOLVENT' => '', 
                    'NO_LEGAL_ACTION'   => '',  

                    'C_BY_NAME'         => '',  
                    'C_BY_EMAIL'        => '',  
                    'C_BY_DATE'         => '2021-01-07 13:10:10',  
                    'C_REMARK'          => '',  

                    'U_STATUS'          => 'N',  
                    'U_COUNT'           => '0',  
                    'U_BY_NAME'         => '',  
                    'U_BY_EMAIL'        => '',  
                    'U_BY_DATE'         => '2021-01-07 13:10:10',  
                    'U_REMARK'          => '',  

                    'SUBMITTED_BY_NAME' => '',  
                    'SUBMITTED_BY_EMAIL'=> '',  
                    'SUBMITTED_BY_DATE' => '2021-01-07 13:10:10',  
                    'SUBMITTED_REMARK'  => '', 

                    'SUPERVISOR_IS'     => 'N',  
                    'SUPERVISOR_BY_NAME'=> '',  
                    'SUPERVISOR_BY_EMAIL'=> '',  
                    'SUPERVISOR_BY_DATE'=> '2021-01-07 13:10:10', 
                    'SUPERVISOR_REMARK' => '', 

                    'HOD_IS'            => 'N',  
                    'HOD_BY_NAME'       => '',  
                    'HOD_BY_EMAIL'      => '',  
                    'HOD_BY_DATE'       => '2021-01-07 13:10:10', 
                    'HOD_REMARK'        => '',  
                    
                    'CHECKED_IS'        => 'N',  
                    'CHECKED_BY_NAME'   => '',  
                    'CHECKED_BY_EMAIL'  => '',  
                    'CHECKED_BY_DATE'   => '2021-01-07 13:10:10', 
                    'CHECKED_REMARK'    => '',

                    'VERIFIED_IS'        => 'N',  
                    'VERIFIED_BY_NAME'   => '',  
                    'VERIFIED_BY_EMAIL'  => '',  
                    'VERIFIED_BY_DATE'   => '2021-01-07 13:10:10', 
                    'VERIFIED_REMARK'    => ''  
                ],
                [ 
                    'APP_ID'            => '2',
                    'REF_NO'            => 'STTF00002',
                    'STAGE'             => 'DRAFT',
                    'STATUS'            => '',
                    'COMPANY'           => '',
                    'BRANCH_NAME'       => 'SHAH ALAM ENTERPRISE CENTRE',
                    'CUST_NAME'         => 'INFRAKOMAS SDN BHD',
                    'CUST_PERSON_NAME'  => '',
                    'CUST_EMAIL'        => '',
                    'CUST_CONTACT_NO'   => '',
                    'CUST_OFFICE_NO'    => '',

                    'CUST_SECTOR'       => 'CABLE INSTALLATION AND RELATED ENGINEERING SERVICES AND TRADING OF CABLES',
                    
                    'CUST_ADDRESS'      => 'NO. 14 JALAN PARA U8/103 SEKSYEN U8 BUKIT JELUTONG INDUSTRIAL PARK SHAH ALAM',
                    'CUST_CITY'         => '',
                    'CUST_STATE'        => '',

                    'COMP_PERSON_NAME'  => '',
                    'COMP_EMAIL'        => '',
                    'COMP_CONTACT_NO'   => '',

                    'SME_CLIENT'        => '',
                    'SME_SECTOR_TM'     => '',
                    'SME_AGM'           => '',
                    'SME_AM'            => '',
                    'SME_RM'            => '',
                    'SME_REV'           => '',
                    'SME_REMOVE'        => '',
                    'SME_DEFINITION'    => '', 

                    'REG_SSM'           => '', 
                    'APPLICATION_AMOUNT'=> '', 
                    'APP_PRODUCT'       => '', 
                    'PLC_GLC'           => '', 
                    'MALAYSIAN_PCT'     => '', 
                    'YEARS_OPS'         => '', 
                    'FINANCIAL_SOLVENT' => '', 
                    'NO_LEGAL_ACTION'   => '',  

                    'C_BY_NAME'         => '',  
                    'C_BY_EMAIL'        => '',  
                    'C_BY_DATE'         => '2021-01-07 13:10:10',  
                    'C_REMARK'          => '',  

                    'U_STATUS'          => 'N',  
                    'U_COUNT'           => '0',  
                    'U_BY_NAME'         => '',  
                    'U_BY_EMAIL'        => '',  
                    'U_BY_DATE'         => '2021-01-07 13:10:10',  
                    'U_REMARK'          => '',  

                    'SUBMITTED_BY_NAME' => '',  
                    'SUBMITTED_BY_EMAIL'=> '',  
                    'SUBMITTED_BY_DATE' => '2021-01-07 13:10:10',  
                    'SUBMITTED_REMARK'  => '', 

                    'SUPERVISOR_IS'     => 'N',  
                    'SUPERVISOR_BY_NAME'=> '',  
                    'SUPERVISOR_BY_EMAIL'=> '',  
                    'SUPERVISOR_BY_DATE'=> '2021-01-07 13:10:10', 
                    'SUPERVISOR_REMARK' => '', 

                    'HOD_IS'            => 'N',  
                    'HOD_BY_NAME'       => '',  
                    'HOD_BY_EMAIL'      => '',  
                    'HOD_BY_DATE'       => '2021-01-07 13:10:10', 
                    'HOD_REMARK'        => '',  
                    
                    'CHECKED_IS'        => 'N',  
                    'CHECKED_BY_NAME'   => '',  
                    'CHECKED_BY_EMAIL'  => '',  
                    'CHECKED_BY_DATE'   => '2021-01-07 13:10:10', 
                    'CHECKED_REMARK'    => '',

                    'VERIFIED_IS'        => 'N',  
                    'VERIFIED_BY_NAME'   => '',  
                    'VERIFIED_BY_EMAIL'  => '',  
                    'VERIFIED_BY_DATE'   => '2021-01-07 13:10:10', 
                    'VERIFIED_REMARK'    => ''  
                ],
                [ 
                    'APP_ID'            => '3',
                    'REF_NO'            => 'STTF00003',
                    'STAGE'             => 'DRAFT',
                    'STATUS'            => '',
                    'COMPANY'           => '',
                    'BRANCH_NAME'       => 'SHAH ALAM ENTERPRISE CENTRE',
                    'CUST_NAME'         => 'MY MUM S BAKERY (SOLE PROPRIETOR)',
                    'CUST_PERSON_NAME'  => '',
                    'CUST_EMAIL'        => '',
                    'CUST_CONTACT_NO'   => '',
                    'CUST_OFFICE_NO'    => '',

                    'CUST_SECTOR'       => 'PRODUCE BAKERY PRODUCT',
                    
                    'CUST_ADDRESS'      => 'NO. 9, JALAN SURIA X U5/X, BANDAR PINGGIRAN SUBANG, SEKSYEN U5 SHAH ALAM 40150 SELANGOR',
                    'CUST_CITY'         => '',
                    'CUST_STATE'        => '',

                    'COMP_PERSON_NAME'  => '',
                    'COMP_EMAIL'        => '',
                    'COMP_CONTACT_NO'   => '',

                    'SME_CLIENT'        => '',
                    'SME_SECTOR_TM'     => '',
                    'SME_AGM'           => '',
                    'SME_AM'            => '',
                    'SME_RM'            => '',
                    'SME_REV'           => '',
                    'SME_REMOVE'        => '',
                    'SME_DEFINITION'    => '', 

                    'REG_SSM'           => '', 
                    'APPLICATION_AMOUNT'=> '', 
                    'APP_PRODUCT'       => '', 
                    'PLC_GLC'           => '', 
                    'MALAYSIAN_PCT'     => '', 
                    'YEARS_OPS'         => '', 
                    'FINANCIAL_SOLVENT' => '', 
                    'NO_LEGAL_ACTION'   => '',  

                    'C_BY_NAME'         => '',  
                    'C_BY_EMAIL'        => '',  
                    'C_BY_DATE'         => '2021-01-07 13:10:10',  
                    'C_REMARK'          => '',  

                    'U_STATUS'          => 'N',  
                    'U_COUNT'           => '0',  
                    'U_BY_NAME'         => '',  
                    'U_BY_EMAIL'        => '',  
                    'U_BY_DATE'         => '2021-01-07 13:10:10',  
                    'U_REMARK'          => '',  

                    'SUBMITTED_BY_NAME' => '',  
                    'SUBMITTED_BY_EMAIL'=> '',  
                    'SUBMITTED_BY_DATE' => '2021-01-07 13:10:10',  
                    'SUBMITTED_REMARK'  => '', 

                    'SUPERVISOR_IS'     => 'N',  
                    'SUPERVISOR_BY_NAME'=> '',  
                    'SUPERVISOR_BY_EMAIL'=> '',  
                    'SUPERVISOR_BY_DATE'=> '2021-01-07 13:10:10', 
                    'SUPERVISOR_REMARK' => '', 

                    'HOD_IS'            => 'N',  
                    'HOD_BY_NAME'       => '',  
                    'HOD_BY_EMAIL'      => '',  
                    'HOD_BY_DATE'       => '2021-01-07 13:10:10', 
                    'HOD_REMARK'        => '',  
                    
                    'CHECKED_IS'        => 'N',  
                    'CHECKED_BY_NAME'   => '',  
                    'CHECKED_BY_EMAIL'  => '',  
                    'CHECKED_BY_DATE'   => '2021-01-07 13:10:10', 
                    'CHECKED_REMARK'    => '',

                    'VERIFIED_IS'        => 'N',  
                    'VERIFIED_BY_NAME'   => '',  
                    'VERIFIED_BY_EMAIL'  => '',  
                    'VERIFIED_BY_DATE'   => '2021-01-07 13:10:10', 
                    'VERIFIED_REMARK'    => ''   
                ],
                [ 
                    'APP_ID'            => '4',
                    'REF_NO'            => 'STTF00004',
                    'STAGE'             => 'DRAFT',
                    'STATUS'            => '',
                    'COMPANY'           => '',
                    'BRANCH_NAME'       => 'KUALA LUMPUR 2 ENTERPRISE CENTRE',
                    'CUST_NAME'         => 'QUADCUBE SDN BHD',
                    'CUST_PERSON_NAME'  => 'WINSTON YAP WINSTON',
                    'CUST_EMAIL'        => 'winstonyapwinston@quadcube.net',
                    'CUST_CONTACT_NO'   => '',
                    'CUST_OFFICE_NO'    => '03-22429313',

                    'CUST_SECTOR'       => 'INFORMATION TECHNOLOGY CONSULTANT',
                    
                    'CUST_ADDRESS'      => 'UNIT 3A-01 & 02 TOWER A VERTICAL BUSINESS SUITE, AVENUE 3 BANGSAR SOUTH , 59200 KUALA LUMPUR',
                    'CUST_CITY'         => '',
                    'CUST_STATE'        => '',

                    'COMP_PERSON_NAME'  => 'SENTHIL KOGILAM A/P CHELLIAH',
                    'COMP_EMAIL'        => '',
                    'COMP_CONTACT_NO'   => '60166960827',

                    'SME_CLIENT'        => '',
                    'SME_SECTOR_TM'     => '',
                    'SME_AGM'           => '',
                    'SME_AM'            => '',
                    'SME_RM'            => '',
                    'SME_REV'           => '',
                    'SME_REMOVE'        => '',
                    'SME_DEFINITION'    => '', 

                    'REG_SSM'           => '', 
                    'APPLICATION_AMOUNT'=> '', 
                    'APP_PRODUCT'       => '', 
                    'PLC_GLC'           => '', 
                    'MALAYSIAN_PCT'     => '', 
                    'YEARS_OPS'         => '', 
                    'FINANCIAL_SOLVENT' => '', 
                    'NO_LEGAL_ACTION'   => '',  

                    'C_BY_NAME'         => '',  
                    'C_BY_EMAIL'        => '',  
                    'C_BY_DATE'         => '2021-01-07 13:10:10',  
                    'C_REMARK'          => '',  

                    'U_STATUS'          => 'N',  
                    'U_COUNT'           => '0',  
                    'U_BY_NAME'         => '',  
                    'U_BY_EMAIL'        => '',  
                    'U_BY_DATE'         => '2021-01-07 13:10:10',  
                    'U_REMARK'          => '',  

                    'SUBMITTED_BY_NAME' => '',  
                    'SUBMITTED_BY_EMAIL'=> '',  
                    'SUBMITTED_BY_DATE' => '2021-01-07 13:10:10',  
                    'SUBMITTED_REMARK'  => '', 

                    'SUPERVISOR_IS'     => 'N',  
                    'SUPERVISOR_BY_NAME'=> '',  
                    'SUPERVISOR_BY_EMAIL'=> '',  
                    'SUPERVISOR_BY_DATE'=> '2021-01-07 13:10:10', 
                    'SUPERVISOR_REMARK' => '', 

                    'HOD_IS'            => 'N',  
                    'HOD_BY_NAME'       => '',  
                    'HOD_BY_EMAIL'      => '',  
                    'HOD_BY_DATE'       => '2021-01-07 13:10:10', 
                    'HOD_REMARK'        => '',  
                    
                    'CHECKED_IS'        => 'N',  
                    'CHECKED_BY_NAME'   => '',  
                    'CHECKED_BY_EMAIL'  => '',  
                    'CHECKED_BY_DATE'   => '2021-01-07 13:10:10', 
                    'CHECKED_REMARK'    => '',

                    'VERIFIED_IS'        => 'N',  
                    'VERIFIED_BY_NAME'   => '',  
                    'VERIFIED_BY_EMAIL'  => '',  
                    'VERIFIED_BY_DATE'   => '2021-01-07 13:10:10', 
                    'VERIFIED_REMARK'    => ''  
                ],
                [ 
                    'APP_ID'            => '5',
                    'REF_NO'            => 'STTF00005',
                    'STAGE'             => 'DRAFT',
                    'STATUS'            => '',
                    'COMPANY'           => '',
                    'BRANCH_NAME'       => 'KUALA LUMPUR 2 ENTERPRISE CENTRE',
                    'CUST_NAME'         => 'ENERGY QUEST SDN BHD',
                    'CUST_PERSON_NAME'  => '',
                    'CUST_EMAIL'        => '',
                    'CUST_CONTACT_NO'   => '',
                    'CUST_OFFICE_NO'    => '',

                    'CUST_SECTOR'       => 'PROVIDING PETROLEUM EXPLORATION AND PRODUCTION CONSULTING SERVICES',
                    
                    'CUST_ADDRESS'      => 'LEVEL 18, OFFICE SUITE UOA CENTRE 19 JALAN PINANG KUALA LUMPUR 50450 WILAYAH',
                    'CUST_CITY'         => '',
                    'CUST_STATE'        => '',

                    'COMP_PERSON_NAME'  => '',
                    'COMP_EMAIL'        => '',
                    'COMP_CONTACT_NO'   => '',

                    'SME_CLIENT'        => '',
                    'SME_SECTOR_TM'     => '',
                    'SME_AGM'           => '',
                    'SME_AM'            => '',
                    'SME_RM'            => '',
                    'SME_REV'           => '',
                    'SME_REMOVE'        => '',
                    'SME_DEFINITION'    => '', 

                    'REG_SSM'           => '', 
                    'APPLICATION_AMOUNT'=> '', 
                    'APP_PRODUCT'       => '', 
                    'PLC_GLC'           => '', 
                    'MALAYSIAN_PCT'     => '', 
                    'YEARS_OPS'         => '', 
                    'FINANCIAL_SOLVENT' => '', 
                    'NO_LEGAL_ACTION'   => '',  

                    'C_BY_NAME'         => '',  
                    'C_BY_EMAIL'        => '',  
                    'C_BY_DATE'         => '2021-01-07 13:10:10',  
                    'C_REMARK'          => '',  

                    'U_STATUS'          => 'N',  
                    'U_COUNT'           => '0',  
                    'U_BY_NAME'         => '',  
                    'U_BY_EMAIL'        => '',  
                    'U_BY_DATE'         => '2021-01-07 13:10:10',  
                    'U_REMARK'          => '',  

                    'SUBMITTED_BY_NAME' => '',  
                    'SUBMITTED_BY_EMAIL'=> '',  
                    'SUBMITTED_BY_DATE' => '2021-01-07 13:10:10',  
                    'SUBMITTED_REMARK'  => '', 

                    'SUPERVISOR_IS'     => 'N',  
                    'SUPERVISOR_BY_NAME'=> '',  
                    'SUPERVISOR_BY_EMAIL'=> '',  
                    'SUPERVISOR_BY_DATE'=> '2021-01-07 13:10:10', 
                    'SUPERVISOR_REMARK' => '', 

                    'HOD_IS'            => 'N',  
                    'HOD_BY_NAME'       => '',  
                    'HOD_BY_EMAIL'      => '',  
                    'HOD_BY_DATE'       => '2021-01-07 13:10:10', 
                    'HOD_REMARK'        => '',  
                    
                    'CHECKED_IS'        => 'N',  
                    'CHECKED_BY_NAME'   => '',  
                    'CHECKED_BY_EMAIL'  => '',  
                    'CHECKED_BY_DATE'   => '2021-01-07 13:10:10', 
                    'CHECKED_REMARK'    => '',

                    'VERIFIED_IS'        => 'N',  
                    'VERIFIED_BY_NAME'   => '',  
                    'VERIFIED_BY_EMAIL'  => '',  
                    'VERIFIED_BY_DATE'   => '2021-01-07 13:10:10', 
                    'VERIFIED_REMARK'    => ''  
                ],
                [ 
                    'APP_ID'            => '6',
                    'REF_NO'            => 'STTF00006',
                    'STAGE'             => 'DRAFT',
                    'STATUS'            => '',
                    'COMPANY'           => '',
                    'BRANCH_NAME'       => 'KUALA TERENGGANU ENTERPRISE CENTRE',
                    'CUST_NAME'         => 'KEYMAG CONTROLS SDN BHD',
                    'CUST_PERSON_NAME'  => '',
                    'CUST_EMAIL'        => '',
                    'CUST_CONTACT_NO'   => '',
                    'CUST_OFFICE_NO'    => '',

                    'CUST_SECTOR'       => 'ENGINEERING AND GENERAL CONTRACTORS',
                    
                    'CUST_ADDRESS'      => 'NO. 172, JALAN GELUGOR 4 KAMPUNG GELUGOR KERTEH KEMAMAN 24300 TERENGGANU',
                    'CUST_CITY'         => '',
                    'CUST_STATE'        => '',

                    'COMP_PERSON_NAME'  => '',
                    'COMP_EMAIL'        => '',
                    'COMP_CONTACT_NO'   => '',

                    'SME_CLIENT'        => '',
                    'SME_SECTOR_TM'     => '',
                    'SME_AGM'           => '',
                    'SME_AM'            => '',
                    'SME_RM'            => '',
                    'SME_REV'           => '',
                    'SME_REMOVE'        => '',
                    'SME_DEFINITION'    => '', 

                    'REG_SSM'           => '', 
                    'APPLICATION_AMOUNT'=> '', 
                    'APP_PRODUCT'       => '', 
                    'PLC_GLC'           => '', 
                    'MALAYSIAN_PCT'     => '', 
                    'YEARS_OPS'         => '', 
                    'FINANCIAL_SOLVENT' => '', 
                    'NO_LEGAL_ACTION'   => '',  

                    'C_BY_NAME'         => '',  
                    'C_BY_EMAIL'        => '',  
                    'C_BY_DATE'         => '2021-01-07 13:10:10',  
                    'C_REMARK'          => '',  

                    'U_STATUS'          => 'N',  
                    'U_COUNT'           => '0',  
                    'U_BY_NAME'         => '',  
                    'U_BY_EMAIL'        => '',  
                    'U_BY_DATE'         => '2021-01-07 13:10:10',  
                    'U_REMARK'          => '',  

                    'SUBMITTED_BY_NAME' => '',  
                    'SUBMITTED_BY_EMAIL'=> '',  
                    'SUBMITTED_BY_DATE' => '2021-01-07 13:10:10',  
                    'SUBMITTED_REMARK'  => '', 

                    'SUPERVISOR_IS'     => 'N',  
                    'SUPERVISOR_BY_NAME'=> '',  
                    'SUPERVISOR_BY_EMAIL'=> '',  
                    'SUPERVISOR_BY_DATE'=> '2021-01-07 13:10:10', 
                    'SUPERVISOR_REMARK' => '', 

                    'HOD_IS'            => 'N',  
                    'HOD_BY_NAME'       => '',  
                    'HOD_BY_EMAIL'      => '',  
                    'HOD_BY_DATE'       => '2021-01-07 13:10:10', 
                    'HOD_REMARK'        => '',  
                    
                    'CHECKED_IS'        => 'N',  
                    'CHECKED_BY_NAME'   => '',  
                    'CHECKED_BY_EMAIL'  => '',  
                    'CHECKED_BY_DATE'   => '2021-01-07 13:10:10', 
                    'CHECKED_REMARK'    => '',

                    'VERIFIED_IS'        => 'N',  
                    'VERIFIED_BY_NAME'   => '',  
                    'VERIFIED_BY_EMAIL'  => '',  
                    'VERIFIED_BY_DATE'   => '2021-01-07 13:10:10', 
                    'VERIFIED_REMARK'    => ''  
                ],
                [ 
                    'APP_ID'            => '7',
                    'REF_NO'            => 'STTF00007',
                    'STAGE'             => 'DRAFT',
                    'STATUS'            => '',
                    'COMPANY'           => '',
                    'BRANCH_NAME'       => 'KUALA LUMPUR 2 ENTERPRISE CENTRE',
                    'CUST_NAME'         => 'AK PARTNER HYBRID CONNECT SDN BHD',
                    'CUST_PERSON_NAME'  => '',
                    'CUST_EMAIL'        => '',
                    'CUST_CONTACT_NO'   => '',
                    'CUST_OFFICE_NO'    => '',

                    'CUST_SECTOR'       => 'COMPUTER CONSULTANCY',
                    
                    'CUST_ADDRESS'      => '2 JALAN 4, 47500 BUKIT CHERAKAH - SUBANG JAYA SELANGOR DARUL EHSAN ',
                    'CUST_CITY'         => '',
                    'CUST_STATE'        => '',

                    'COMP_PERSON_NAME'  => '',
                    'COMP_EMAIL'        => '',
                    'COMP_CONTACT_NO'   => '',

                    'SME_CLIENT'        => '',
                    'SME_SECTOR_TM'     => '',
                    'SME_AGM'           => '',
                    'SME_AM'            => '',
                    'SME_RM'            => '',
                    'SME_REV'           => '',
                    'SME_REMOVE'        => '',
                    'SME_DEFINITION'    => '', 

                    'REG_SSM'           => '', 
                    'APPLICATION_AMOUNT'=> '', 
                    'APP_PRODUCT'       => '', 
                    'PLC_GLC'           => '', 
                    'MALAYSIAN_PCT'     => '', 
                    'YEARS_OPS'         => '', 
                    'FINANCIAL_SOLVENT' => '', 
                    'NO_LEGAL_ACTION'   => '',  

                    'C_BY_NAME'         => '',  
                    'C_BY_EMAIL'        => '',  
                    'C_BY_DATE'         => '2021-01-07 13:10:10',  
                    'C_REMARK'          => '',  

                    'U_STATUS'          => 'N',  
                    'U_COUNT'           => '0',  
                    'U_BY_NAME'         => '',  
                    'U_BY_EMAIL'        => '',  
                    'U_BY_DATE'         => '2021-01-07 13:10:10',  
                    'U_REMARK'          => '',  

                    'SUBMITTED_BY_NAME' => '',  
                    'SUBMITTED_BY_EMAIL'=> '',  
                    'SUBMITTED_BY_DATE' => '2021-01-07 13:10:10',  
                    'SUBMITTED_REMARK'  => '', 

                    'SUPERVISOR_IS'     => 'N',  
                    'SUPERVISOR_BY_NAME'=> '',  
                    'SUPERVISOR_BY_EMAIL'=> '',  
                    'SUPERVISOR_BY_DATE'=> '2021-01-07 13:10:10', 
                    'SUPERVISOR_REMARK' => '', 

                    'HOD_IS'            => 'N',  
                    'HOD_BY_NAME'       => '',  
                    'HOD_BY_EMAIL'      => '',  
                    'HOD_BY_DATE'       => '2021-01-07 13:10:10', 
                    'HOD_REMARK'        => '',  
                    
                    'CHECKED_IS'        => 'N',  
                    'CHECKED_BY_NAME'   => '',  
                    'CHECKED_BY_EMAIL'  => '',  
                    'CHECKED_BY_DATE'   => '2021-01-07 13:10:10', 
                    'CHECKED_REMARK'    => '',

                    'VERIFIED_IS'        => 'N',  
                    'VERIFIED_BY_NAME'   => '',  
                    'VERIFIED_BY_EMAIL'  => '',  
                    'VERIFIED_BY_DATE'   => '2021-01-07 13:10:10', 
                    'VERIFIED_REMARK'    => ''  
                ],
                [ 
                    'APP_ID'            => '8',
                    'REF_NO'            => 'STTF00008',
                    'STAGE'             => 'DRAFT',
                    'STATUS'            => '',
                    'COMPANY'           => '',
                    'BRANCH_NAME'       => 'KUALA LUMPUR 2 ENTERPRISE CENTRE',
                    'CUST_NAME'         => 'FINEVO TECHNOLOGY SDN BHD',
                    'CUST_PERSON_NAME'  => 'NICHOLAS CHUA ',
                    'CUST_EMAIL'        => 'th.chua@finevotech.com',
                    'CUST_CONTACT_NO'   => '',
                    'CUST_OFFICE_NO'    => '',

                    'CUST_SECTOR'       => 'COMPUTER PROGRAMMING ACTIVITIES',
                    
                    'CUST_ADDRESS'      => 'UNIT 2-1, THE PODIUM, TOWER 3, UOA BUSINESS PARK, NO 1, JALAN PENGATURCARA U1/51A, SECTION U1, 40150 SHAH ALAM, SELANGOR',
                    'CUST_CITY'         => '',
                    'CUST_STATE'        => '',

                    'COMP_PERSON_NAME'  => 'GARY TAY',
                    'COMP_EMAIL'        => '',
                    'COMP_CONTACT_NO'   => '60133906272',

                    'SME_CLIENT'        => '',
                    'SME_SECTOR_TM'     => '',
                    'SME_AGM'           => '',
                    'SME_AM'            => '',
                    'SME_RM'            => '',
                    'SME_REV'           => '',
                    'SME_REMOVE'        => '',
                    'SME_DEFINITION'    => '', 

                    'REG_SSM'           => '', 
                    'APPLICATION_AMOUNT'=> '', 
                    'APP_PRODUCT'       => '', 
                    'PLC_GLC'           => '', 
                    'MALAYSIAN_PCT'     => '', 
                    'YEARS_OPS'         => '', 
                    'FINANCIAL_SOLVENT' => '', 
                    'NO_LEGAL_ACTION'   => '',  

                    'C_BY_NAME'         => '',  
                    'C_BY_EMAIL'        => '',  
                    'C_BY_DATE'         => '2021-01-07 13:10:10',  
                    'C_REMARK'          => '',  

                    'U_STATUS'          => 'N',  
                    'U_COUNT'           => '0',  
                    'U_BY_NAME'         => '',  
                    'U_BY_EMAIL'        => '',  
                    'U_BY_DATE'         => '2021-01-07 13:10:10',  
                    'U_REMARK'          => '',  

                    'SUBMITTED_BY_NAME' => '',  
                    'SUBMITTED_BY_EMAIL'=> '',  
                    'SUBMITTED_BY_DATE' => '2021-01-07 13:10:10',  
                    'SUBMITTED_REMARK'  => '', 

                    'SUPERVISOR_IS'     => 'N',  
                    'SUPERVISOR_BY_NAME'=> '',  
                    'SUPERVISOR_BY_EMAIL'=> '',  
                    'SUPERVISOR_BY_DATE'=> '2021-01-07 13:10:10', 
                    'SUPERVISOR_REMARK' => '', 

                    'HOD_IS'            => 'N',  
                    'HOD_BY_NAME'       => '',  
                    'HOD_BY_EMAIL'      => '',  
                    'HOD_BY_DATE'       => '2021-01-07 13:10:10', 
                    'HOD_REMARK'        => '',  
                    
                    'CHECKED_IS'        => 'N',  
                    'CHECKED_BY_NAME'   => '',  
                    'CHECKED_BY_EMAIL'  => '',  
                    'CHECKED_BY_DATE'   => '2021-01-07 13:10:10', 
                    'CHECKED_REMARK'    => '',

                    'VERIFIED_IS'        => 'N',  
                    'VERIFIED_BY_NAME'   => '',  
                    'VERIFIED_BY_EMAIL'  => '',  
                    'VERIFIED_BY_DATE'   => '2021-01-07 13:10:10', 
                    'VERIFIED_REMARK'    => ''  
                ],
                [ 
                    'APP_ID'            => '9',
                    'REF_NO'            => 'STTF00009',
                    'STAGE'             => 'DRAFT',
                    'STATUS'            => '',
                    'COMPANY'           => '',
                    'BRANCH_NAME'       => 'SHAH ALAM ENTERPRISE CENTRE',
                    'CUST_NAME'         => 'IFME CONSULTANTS SDN BHD',
                    'CUST_PERSON_NAME'  => 'REDZA REDZA|TN HJ HALIM',
                    'CUST_EMAIL'        => 'redza redza@ifk.com.my|halim@majunaka.com.my',
                    'CUST_CONTACT_NO'   => '',
                    'CUST_OFFICE_NO'    => '',

                    'CUST_SECTOR'       => 'ENGINEERING CONSULTANCY SERVICES IN ALL KIND OF ENGINEERING',
                    
                    'CUST_ADDRESS'      => '12 JALAN PARA U8/103 SEKSYEN U8 BUKIT JELUTONG INDUSTRIAL PARK SHAH ALAM 40150',
                    'CUST_CITY'         => '',
                    'CUST_STATE'        => '',

                    'COMP_PERSON_NAME'  => 'FION',
                    'COMP_EMAIL'        => '',
                    'COMP_CONTACT_NO'   => '60133635933',

                    'SME_CLIENT'        => '',
                    'SME_SECTOR_TM'     => '',
                    'SME_AGM'           => '',
                    'SME_AM'            => '',
                    'SME_RM'            => '',
                    'SME_REV'           => '',
                    'SME_REMOVE'        => '',
                    'SME_DEFINITION'    => '', 

                    'REG_SSM'           => '', 
                    'APPLICATION_AMOUNT'=> '', 
                    'APP_PRODUCT'       => '', 
                    'PLC_GLC'           => '', 
                    'MALAYSIAN_PCT'     => '', 
                    'YEARS_OPS'         => '', 
                    'FINANCIAL_SOLVENT' => '', 
                    'NO_LEGAL_ACTION'   => '',  

                    'C_BY_NAME'         => '',  
                    'C_BY_EMAIL'        => '',  
                    'C_BY_DATE'         => '2021-01-07 13:10:10',  
                    'C_REMARK'          => '',  

                    'U_STATUS'          => 'N',  
                    'U_COUNT'           => '0',  
                    'U_BY_NAME'         => '',  
                    'U_BY_EMAIL'        => '',  
                    'U_BY_DATE'         => '2021-01-07 13:10:10',  
                    'U_REMARK'          => '',  

                    'SUBMITTED_BY_NAME' => '',  
                    'SUBMITTED_BY_EMAIL'=> '',  
                    'SUBMITTED_BY_DATE' => '2021-01-07 13:10:10',  
                    'SUBMITTED_REMARK'  => '', 

                    'SUPERVISOR_IS'     => 'N',  
                    'SUPERVISOR_BY_NAME'=> '',  
                    'SUPERVISOR_BY_EMAIL'=> '',  
                    'SUPERVISOR_BY_DATE'=> '2021-01-07 13:10:10', 
                    'SUPERVISOR_REMARK' => '', 

                    'HOD_IS'            => 'N',  
                    'HOD_BY_NAME'       => '',  
                    'HOD_BY_EMAIL'      => '',  
                    'HOD_BY_DATE'       => '2021-01-07 13:10:10', 
                    'HOD_REMARK'        => '',  
                    
                    'CHECKED_IS'        => 'N',  
                    'CHECKED_BY_NAME'   => '',  
                    'CHECKED_BY_EMAIL'  => '',  
                    'CHECKED_BY_DATE'   => '2021-01-07 13:10:10', 
                    'CHECKED_REMARK'    => '',

                    'VERIFIED_IS'        => 'N',  
                    'VERIFIED_BY_NAME'   => '',  
                    'VERIFIED_BY_EMAIL'  => '',  
                    'VERIFIED_BY_DATE'   => '2021-01-07 13:10:10', 
                    'VERIFIED_REMARK'    => ''  
                ],
                [ 
                    'APP_ID'            => '10',
                    'REF_NO'            => 'STTF00010',
                    'STAGE'             => 'DRAFT',
                    'STATUS'            => '',
                    'COMPANY'           => '',
                    'BRANCH_NAME'       => 'KUALA LUMPUR 2 ENTERPRISE CENTRE',
                    'CUST_NAME'         => 'STAR ROLLING SHUTTER SDN BHD',
                    'CUST_PERSON_NAME'  => '',
                    'CUST_EMAIL'        => '',
                    'CUST_CONTACT_NO'   => '',
                    'CUST_OFFICE_NO'    => '',

                    'CUST_SECTOR'       => 'MANUFACTURING AND TRADING IN HARDWARE AND BUILDING MATERIALS',
                    
                    'CUST_ADDRESS'      => '13B JALAN TIAJ 2/5 TAMAN INDUSTRI ALAM JAYA BANDAR PUNCAK ALAM 43200 SELANGOR',
                    'CUST_CITY'         => '',
                    'CUST_STATE'        => '',

                    'COMP_PERSON_NAME'  => '',
                    'COMP_EMAIL'        => '',
                    'COMP_CONTACT_NO'   => '',

                    'SME_CLIENT'        => '',
                    'SME_SECTOR_TM'     => '',
                    'SME_AGM'           => '',
                    'SME_AM'            => '',
                    'SME_RM'            => '',
                    'SME_REV'           => '',
                    'SME_REMOVE'        => '',
                    'SME_DEFINITION'    => '', 

                    'REG_SSM'           => '', 
                    'APPLICATION_AMOUNT'=> '', 
                    'APP_PRODUCT'       => '', 
                    'PLC_GLC'           => '', 
                    'MALAYSIAN_PCT'     => '', 
                    'YEARS_OPS'         => '', 
                    'FINANCIAL_SOLVENT' => '', 
                    'NO_LEGAL_ACTION'   => '',  

                    'C_BY_NAME'         => '',  
                    'C_BY_EMAIL'        => '',  
                    'C_BY_DATE'         => '2021-01-07 13:10:10',  
                    'C_REMARK'          => '',  

                    'U_STATUS'          => 'N',  
                    'U_COUNT'           => '0',  
                    'U_BY_NAME'         => '',  
                    'U_BY_EMAIL'        => '',  
                    'U_BY_DATE'         => '2021-01-07 13:10:10',  
                    'U_REMARK'          => '',  

                    'SUBMITTED_BY_NAME' => '',  
                    'SUBMITTED_BY_EMAIL'=> '',  
                    'SUBMITTED_BY_DATE' => '2021-01-07 13:10:10',  
                    'SUBMITTED_REMARK'  => '', 

                    'SUPERVISOR_IS'     => 'N',  
                    'SUPERVISOR_BY_NAME'=> '',  
                    'SUPERVISOR_BY_EMAIL'=> '',  
                    'SUPERVISOR_BY_DATE'=> '2021-01-07 13:10:10', 
                    'SUPERVISOR_REMARK' => '', 

                    'HOD_IS'            => 'N',  
                    'HOD_BY_NAME'       => '',  
                    'HOD_BY_EMAIL'      => '',  
                    'HOD_BY_DATE'       => '2021-01-07 13:10:10', 
                    'HOD_REMARK'        => '',  
                    
                    'CHECKED_IS'        => 'N',  
                    'CHECKED_BY_NAME'   => '',  
                    'CHECKED_BY_EMAIL'  => '',  
                    'CHECKED_BY_DATE'   => '2021-01-07 13:10:10', 
                    'CHECKED_REMARK'    => '',

                    'VERIFIED_IS'        => 'N',  
                    'VERIFIED_BY_NAME'   => '',  
                    'VERIFIED_BY_EMAIL'  => '',  
                    'VERIFIED_BY_DATE'   => '2021-01-07 13:10:10', 
                    'VERIFIED_REMARK'    => ''  
                ],
                [ 
                    'APP_ID'            => '11',
                    'REF_NO'            => 'STTF00011',
                    'STAGE'             => 'DRAFT',
                    'STATUS'            => '',
                    'COMPANY'           => '',
                    'BRANCH_NAME'       => 'JOHOR BHARU ENTERPRISE CENTRE',
                    'CUST_NAME'         => 'MM COSMETIC SDN BHD',
                    'CUST_PERSON_NAME'  => '',
                    'CUST_EMAIL'        => '',
                    'CUST_CONTACT_NO'   => '',
                    'CUST_OFFICE_NO'    => '',

                    'CUST_SECTOR'       => 'MANUFACTURE, BIOTECHNOLOGY SERVICE, RESEARCH & DEVELOPMENT SERVICES',
                    
                    'CUST_ADDRESS'      => 'NO.4, JALAN PERSIARAN MAJU CEMERLANG TAMAN PERINDUSTRIAN MAJU CEMERLANG ULU TIRAM JOHOR',
                    'CUST_CITY'         => '',
                    'CUST_STATE'        => '',

                    'COMP_PERSON_NAME'  => '',
                    'COMP_EMAIL'        => '',
                    'COMP_CONTACT_NO'   => '',

                    'SME_CLIENT'        => '',
                    'SME_SECTOR_TM'     => '',
                    'SME_AGM'           => '',
                    'SME_AM'            => '',
                    'SME_RM'            => '',
                    'SME_REV'           => '',
                    'SME_REMOVE'        => '',
                    'SME_DEFINITION'    => '', 

                    'REG_SSM'           => '', 
                    'APPLICATION_AMOUNT'=> '', 
                    'APP_PRODUCT'       => '', 
                    'PLC_GLC'           => '', 
                    'MALAYSIAN_PCT'     => '', 
                    'YEARS_OPS'         => '', 
                    'FINANCIAL_SOLVENT' => '', 
                    'NO_LEGAL_ACTION'   => '',  

                    'C_BY_NAME'         => '',  
                    'C_BY_EMAIL'        => '',  
                    'C_BY_DATE'         => '2021-01-07 13:10:10',  
                    'C_REMARK'          => '',  

                    'U_STATUS'          => 'N',  
                    'U_COUNT'           => '0',  
                    'U_BY_NAME'         => '',  
                    'U_BY_EMAIL'        => '',  
                    'U_BY_DATE'         => '2021-01-07 13:10:10',  
                    'U_REMARK'          => '',  

                    'SUBMITTED_BY_NAME' => '',  
                    'SUBMITTED_BY_EMAIL'=> '',  
                    'SUBMITTED_BY_DATE' => '2021-01-07 13:10:10',  
                    'SUBMITTED_REMARK'  => '', 

                    'SUPERVISOR_IS'     => 'N',  
                    'SUPERVISOR_BY_NAME'=> '',  
                    'SUPERVISOR_BY_EMAIL'=> '',  
                    'SUPERVISOR_BY_DATE'=> '2021-01-07 13:10:10', 
                    'SUPERVISOR_REMARK' => '', 

                    'HOD_IS'            => 'N',  
                    'HOD_BY_NAME'       => '',  
                    'HOD_BY_EMAIL'      => '',  
                    'HOD_BY_DATE'       => '2021-01-07 13:10:10', 
                    'HOD_REMARK'        => '',  
                    
                    'CHECKED_IS'        => 'N',  
                    'CHECKED_BY_NAME'   => '',  
                    'CHECKED_BY_EMAIL'  => '',  
                    'CHECKED_BY_DATE'   => '2021-01-07 13:10:10', 
                    'CHECKED_REMARK'    => '',

                    'VERIFIED_IS'        => 'N',  
                    'VERIFIED_BY_NAME'   => '',  
                    'VERIFIED_BY_EMAIL'  => '',  
                    'VERIFIED_BY_DATE'   => '2021-01-07 13:10:10', 
                    'VERIFIED_REMARK'    => ''   
                ],
                [ 
                    'APP_ID'            => '12',
                    'REF_NO'            => 'STTF00012',
                    'STAGE'             => 'DRAFT',
                    'STATUS'            => '',
                    'COMPANY'           => '',
                    'BRANCH_NAME'       => 'SHAH ALAM ENTERPRISE CENTRE',
                    'CUST_NAME'         => 'MEGAFOAM CONTAINERS ENTERPRISE SDN BHD',
                    'CUST_PERSON_NAME'  => 'YAP YEN PING',
                    'CUST_EMAIL'        => 'yenping@megafoam.com',
                    'CUST_CONTACT_NO'   => '',
                    'CUST_OFFICE_NO'    => '',

                    'CUST_SECTOR'       => 'MANUFACTURING AND TRADING OF FOAM PRODUCTS',
                    
                    'CUST_ADDRESS'      => 'LOT 6105, JALAN HAJI SALLEH, OFF JALAN MERU, 41050 KLANG, SELANGOR.',
                    'CUST_CITY'         => '',
                    'CUST_STATE'        => '',

                    'COMP_PERSON_NAME'  => 'MOHD NOR NAJAMUDIN BIN ABDUL HALIM',
                    'COMP_EMAIL'        => '',
                    'COMP_CONTACT_NO'   => '60133331184',

                    'SME_CLIENT'        => '',
                    'SME_SECTOR_TM'     => '',
                    'SME_AGM'           => '',
                    'SME_AM'            => '',
                    'SME_RM'            => '',
                    'SME_REV'           => '',
                    'SME_REMOVE'        => '',
                    'SME_DEFINITION'    => '', 

                    'REG_SSM'           => '', 
                    'APPLICATION_AMOUNT'=> '', 
                    'APP_PRODUCT'       => '', 
                    'PLC_GLC'           => '', 
                    'MALAYSIAN_PCT'     => '', 
                    'YEARS_OPS'         => '', 
                    'FINANCIAL_SOLVENT' => '', 
                    'NO_LEGAL_ACTION'   => '',  

                    'C_BY_NAME'         => '',  
                    'C_BY_EMAIL'        => '',  
                    'C_BY_DATE'         => '2021-01-07 13:10:10',  
                    'C_REMARK'          => '',  

                    'U_STATUS'          => 'N',  
                    'U_COUNT'           => '0',  
                    'U_BY_NAME'         => '',  
                    'U_BY_EMAIL'        => '',  
                    'U_BY_DATE'         => '2021-01-07 13:10:10',  
                    'U_REMARK'          => '',  

                    'SUBMITTED_BY_NAME' => '',  
                    'SUBMITTED_BY_EMAIL'=> '',  
                    'SUBMITTED_BY_DATE' => '2021-01-07 13:10:10',  
                    'SUBMITTED_REMARK'  => '', 

                    'SUPERVISOR_IS'     => 'N',  
                    'SUPERVISOR_BY_NAME'=> '',  
                    'SUPERVISOR_BY_EMAIL'=> '',  
                    'SUPERVISOR_BY_DATE'=> '2021-01-07 13:10:10', 
                    'SUPERVISOR_REMARK' => '', 

                    'HOD_IS'            => 'N',  
                    'HOD_BY_NAME'       => '',  
                    'HOD_BY_EMAIL'      => '',  
                    'HOD_BY_DATE'       => '2021-01-07 13:10:10', 
                    'HOD_REMARK'        => '',  
                    
                    'CHECKED_IS'        => 'N',  
                    'CHECKED_BY_NAME'   => '',  
                    'CHECKED_BY_EMAIL'  => '',  
                    'CHECKED_BY_DATE'   => '2021-01-07 13:10:10', 
                    'CHECKED_REMARK'    => '',

                    'VERIFIED_IS'        => 'N',  
                    'VERIFIED_BY_NAME'   => '',  
                    'VERIFIED_BY_EMAIL'  => '',  
                    'VERIFIED_BY_DATE'   => '2021-01-07 13:10:10', 
                    'VERIFIED_REMARK'    => ''  
                ],
                [ 
                    'APP_ID'            => '13',
                    'REF_NO'            => 'STTF00013',
                    'STAGE'             => 'DRAFT',
                    'STATUS'            => '',
                    'COMPANY'           => '',
                    'BRANCH_NAME'       => 'SHAH ALAM ENTERPRISE CENTRE',
                    'CUST_NAME'         => 'MILAN UTAMA.',
                    'CUST_PERSON_NAME'  => '',
                    'CUST_EMAIL'        => '',
                    'CUST_CONTACT_NO'   => '',
                    'CUST_OFFICE_NO'    => '',

                    'CUST_SECTOR'       => 'TRADING AND DISTRIBUTION OF TELECOMMUNICATION, TELEMATICS AND INFORMATION  ',
                    
                    'CUST_ADDRESS'      => 'NO.8, JALAN PJS 7/19, BANDAR SUNWAY, 47500 SUBANG JAYA, SELANGOR DARUL EHSAN, MALAYSIA.',
                    'CUST_CITY'         => '',
                    'CUST_STATE'        => '',

                    'COMP_PERSON_NAME'  => '',
                    'COMP_EMAIL'        => '',
                    'COMP_CONTACT_NO'   => '',

                    'SME_CLIENT'        => '',
                    'SME_SECTOR_TM'     => '',
                    'SME_AGM'           => '',
                    'SME_AM'            => '',
                    'SME_RM'            => '',
                    'SME_REV'           => '',
                    'SME_REMOVE'        => '',
                    'SME_DEFINITION'    => '', 

                    'REG_SSM'           => '', 
                    'APPLICATION_AMOUNT'=> '', 
                    'APP_PRODUCT'       => '', 
                    'PLC_GLC'           => '', 
                    'MALAYSIAN_PCT'     => '', 
                    'YEARS_OPS'         => '', 
                    'FINANCIAL_SOLVENT' => '', 
                    'NO_LEGAL_ACTION'   => '',  

                    'C_BY_NAME'         => '',  
                    'C_BY_EMAIL'        => '',  
                    'C_BY_DATE'         => '2021-01-07 13:10:10',  
                    'C_REMARK'          => '',  

                    'U_STATUS'          => 'N',  
                    'U_COUNT'           => '0',  
                    'U_BY_NAME'         => '',  
                    'U_BY_EMAIL'        => '',  
                    'U_BY_DATE'         => '2021-01-07 13:10:10',  
                    'U_REMARK'          => '',  

                    'SUBMITTED_BY_NAME' => '',  
                    'SUBMITTED_BY_EMAIL'=> '',  
                    'SUBMITTED_BY_DATE' => '2021-01-07 13:10:10',  
                    'SUBMITTED_REMARK'  => '', 

                    'SUPERVISOR_IS'     => 'N',  
                    'SUPERVISOR_BY_NAME'=> '',  
                    'SUPERVISOR_BY_EMAIL'=> '',  
                    'SUPERVISOR_BY_DATE'=> '2021-01-07 13:10:10', 
                    'SUPERVISOR_REMARK' => '', 

                    'HOD_IS'            => 'N',  
                    'HOD_BY_NAME'       => '',  
                    'HOD_BY_EMAIL'      => '',  
                    'HOD_BY_DATE'       => '2021-01-07 13:10:10', 
                    'HOD_REMARK'        => '',  
                    
                    'CHECKED_IS'        => 'N',  
                    'CHECKED_BY_NAME'   => '',  
                    'CHECKED_BY_EMAIL'  => '',  
                    'CHECKED_BY_DATE'   => '2021-01-07 13:10:10', 
                    'CHECKED_REMARK'    => '',

                    'VERIFIED_IS'        => 'N',  
                    'VERIFIED_BY_NAME'   => '',  
                    'VERIFIED_BY_EMAIL'  => '',  
                    'VERIFIED_BY_DATE'   => '2021-01-07 13:10:10', 
                    'VERIFIED_REMARK'    => ''  
                ],
                [ 
                    'APP_ID'            => '14',
                    'REF_NO'            => 'STTF00014',
                    'STAGE'             => 'DRAFT',
                    'STATUS'            => '',
                    'COMPANY'           => '',
                    'BRANCH_NAME'       => 'KAJANG ENTERPRISE CENTRE',
                    'CUST_NAME'         => 'INFO TREE SDN BHD',
                    'CUST_PERSON_NAME'  => '',
                    'CUST_EMAIL'        => '',
                    'CUST_CONTACT_NO'   => '',
                    'CUST_OFFICE_NO'    => '',

                    'CUST_SECTOR'       => 'PROVISION OF INFORMATION TECHNOLOGY AND NETWORKING SERVICES',
                    
                    'CUST_ADDRESS'      => 'UNIPARK SURIA, JALAN IKRAM-UNITEN KAJANG, SELANGOR, 43200 KAJANG, SELANGOR',
                    'CUST_CITY'         => '',
                    'CUST_STATE'        => '',

                    'COMP_PERSON_NAME'  => '',
                    'COMP_EMAIL'        => '',
                    'COMP_CONTACT_NO'   => '',

                    'SME_CLIENT'        => '',
                    'SME_SECTOR_TM'     => '',
                    'SME_AGM'           => '',
                    'SME_AM'            => '',
                    'SME_RM'            => '',
                    'SME_REV'           => '',
                    'SME_REMOVE'        => '',
                    'SME_DEFINITION'    => '', 

                    'REG_SSM'           => '', 
                    'APPLICATION_AMOUNT'=> '', 
                    'APP_PRODUCT'       => '', 
                    'PLC_GLC'           => '', 
                    'MALAYSIAN_PCT'     => '', 
                    'YEARS_OPS'         => '', 
                    'FINANCIAL_SOLVENT' => '', 
                    'NO_LEGAL_ACTION'   => '',  

                    'C_BY_NAME'         => '',  
                    'C_BY_EMAIL'        => '',  
                    'C_BY_DATE'         => '2021-01-07 13:10:10',  
                    'C_REMARK'          => '',  

                    'U_STATUS'          => 'N',  
                    'U_COUNT'           => '0',  
                    'U_BY_NAME'         => '',  
                    'U_BY_EMAIL'        => '',  
                    'U_BY_DATE'         => '2021-01-07 13:10:10',  
                    'U_REMARK'          => '',  

                    'SUBMITTED_BY_NAME' => '',  
                    'SUBMITTED_BY_EMAIL'=> '',  
                    'SUBMITTED_BY_DATE' => '2021-01-07 13:10:10',  
                    'SUBMITTED_REMARK'  => '', 

                    'SUPERVISOR_IS'     => 'N',  
                    'SUPERVISOR_BY_NAME'=> '',  
                    'SUPERVISOR_BY_EMAIL'=> '',  
                    'SUPERVISOR_BY_DATE'=> '2021-01-07 13:10:10', 
                    'SUPERVISOR_REMARK' => '', 

                    'HOD_IS'            => 'N',  
                    'HOD_BY_NAME'       => '',  
                    'HOD_BY_EMAIL'      => '',  
                    'HOD_BY_DATE'       => '2021-01-07 13:10:10', 
                    'HOD_REMARK'        => '',  
                    
                    'CHECKED_IS'        => 'N',  
                    'CHECKED_BY_NAME'   => '',  
                    'CHECKED_BY_EMAIL'  => '',  
                    'CHECKED_BY_DATE'   => '2021-01-07 13:10:10', 
                    'CHECKED_REMARK'    => '',

                    'VERIFIED_IS'        => 'N',  
                    'VERIFIED_BY_NAME'   => '',  
                    'VERIFIED_BY_EMAIL'  => '',  
                    'VERIFIED_BY_DATE'   => '2021-01-07 13:10:10', 
                    'VERIFIED_REMARK'    => ''  
                ],
                [ 
                    'APP_ID'            => '15',
                    'REF_NO'            => 'STTF00015',
                    'STAGE'             => 'DRAFT',
                    'STATUS'            => '',
                    'COMPANY'           => '',
                    'BRANCH_NAME'       => 'KUALA LUMPUR ENTERPRISE CENTRE',
                    'CUST_NAME'         => 'CAMAR KLASIK SDN BHD',
                    'CUST_PERSON_NAME'  => '',
                    'CUST_EMAIL'        => '',
                    'CUST_CONTACT_NO'   => '',
                    'CUST_OFFICE_NO'    => '',

                    'CUST_SECTOR'       => 'MANUFACTURING , ASSEMBLING AND TRADING OF MOTOR VEHICLES AND MACHINERIES ',
                    
                    'CUST_ADDRESS'      => 'LOT A18, KAWASAN INDUSTRI MARA (KIM) KM 13, OFF JALAN BATU CAVES 68100 KUALA LUMPUR',
                    'CUST_CITY'         => '',
                    'CUST_STATE'        => '',

                    'COMP_PERSON_NAME'  => '',
                    'COMP_EMAIL'        => '',
                    'COMP_CONTACT_NO'   => '',

                    'SME_CLIENT'        => '',
                    'SME_SECTOR_TM'     => '',
                    'SME_AGM'           => '',
                    'SME_AM'            => '',
                    'SME_RM'            => '',
                    'SME_REV'           => '',
                    'SME_REMOVE'        => '',
                    'SME_DEFINITION'    => '', 

                    'REG_SSM'           => '', 
                    'APPLICATION_AMOUNT'=> '', 
                    'APP_PRODUCT'       => '', 
                    'PLC_GLC'           => '', 
                    'MALAYSIAN_PCT'     => '', 
                    'YEARS_OPS'         => '', 
                    'FINANCIAL_SOLVENT' => '', 
                    'NO_LEGAL_ACTION'   => '',  

                    'C_BY_NAME'         => '',  
                    'C_BY_EMAIL'        => '',  
                    'C_BY_DATE'         => '2021-01-07 13:10:10',  
                    'C_REMARK'          => '',  

                    'U_STATUS'          => 'N',  
                    'U_COUNT'           => '0',  
                    'U_BY_NAME'         => '',  
                    'U_BY_EMAIL'        => '',  
                    'U_BY_DATE'         => '2021-01-07 13:10:10',  
                    'U_REMARK'          => '',  

                    'SUBMITTED_BY_NAME' => '',  
                    'SUBMITTED_BY_EMAIL'=> '',  
                    'SUBMITTED_BY_DATE' => '2021-01-07 13:10:10',  
                    'SUBMITTED_REMARK'  => '', 

                    'SUPERVISOR_IS'     => 'N',  
                    'SUPERVISOR_BY_NAME'=> '',  
                    'SUPERVISOR_BY_EMAIL'=> '',  
                    'SUPERVISOR_BY_DATE'=> '2021-01-07 13:10:10', 
                    'SUPERVISOR_REMARK' => '', 

                    'HOD_IS'            => 'N',  
                    'HOD_BY_NAME'       => '',  
                    'HOD_BY_EMAIL'      => '',  
                    'HOD_BY_DATE'       => '2021-01-07 13:10:10', 
                    'HOD_REMARK'        => '',  
                    
                    'CHECKED_IS'        => 'N',  
                    'CHECKED_BY_NAME'   => '',  
                    'CHECKED_BY_EMAIL'  => '',  
                    'CHECKED_BY_DATE'   => '2021-01-07 13:10:10', 
                    'CHECKED_REMARK'    => '',

                    'VERIFIED_IS'        => 'N',  
                    'VERIFIED_BY_NAME'   => '',  
                    'VERIFIED_BY_EMAIL'  => '',  
                    'VERIFIED_BY_DATE'   => '2021-01-07 13:10:10', 
                    'VERIFIED_REMARK'    => ''  
                ],
                [ 
                    'APP_ID'            => '16',
                    'REF_NO'            => 'STTF00016',
                    'STAGE'             => 'DRAFT',
                    'STATUS'            => '',
                    'COMPANY'           => '',
                    'BRANCH_NAME'       => 'KUALA LUMPUR ENTERPRISE CENTRE',
                    'CUST_NAME'         => 'APEX PHARMACY MARKETING SDN BHD',
                    'CUST_PERSON_NAME'  => 'MOHD FAIZAL BIN ABD RAHMAN',
                    'CUST_EMAIL'        => 'mohd.faizal@apexpharma.com.my',
                    'CUST_CONTACT_NO'   => '',
                    'CUST_OFFICE_NO'    => '',

                    'CUST_SECTOR'       => 'MARKETING AND DISTRIBUTION OF PHARMACEUTICAL PRODUCTS',
                    
                    'CUST_ADDRESS'      => '2, JALAN SS 13/5 SUBANG JAYA 47500 SELANGOR',
                    'CUST_CITY'         => '',
                    'CUST_STATE'        => '',

                    'COMP_PERSON_NAME'  => 'MOHD NOR NAJAMUDIN BIN ABDUL HALIM',
                    'COMP_EMAIL'        => '',
                    'COMP_CONTACT_NO'   => '60133331184',

                    'SME_CLIENT'        => '',
                    'SME_SECTOR_TM'     => '',
                    'SME_AGM'           => '',
                    'SME_AM'            => '',
                    'SME_RM'            => '',
                    'SME_REV'           => '',
                    'SME_REMOVE'        => '',
                    'SME_DEFINITION'    => '', 

                    'REG_SSM'           => '', 
                    'APPLICATION_AMOUNT'=> '', 
                    'APP_PRODUCT'       => '', 
                    'PLC_GLC'           => '', 
                    'MALAYSIAN_PCT'     => '', 
                    'YEARS_OPS'         => '', 
                    'FINANCIAL_SOLVENT' => '', 
                    'NO_LEGAL_ACTION'   => '',  

                    'C_BY_NAME'         => '',  
                    'C_BY_EMAIL'        => '',  
                    'C_BY_DATE'         => '2021-01-07 13:10:10',  
                    'C_REMARK'          => '',  

                    'U_STATUS'          => 'N',  
                    'U_COUNT'           => '0',  
                    'U_BY_NAME'         => '',  
                    'U_BY_EMAIL'        => '',  
                    'U_BY_DATE'         => '2021-01-07 13:10:10',  
                    'U_REMARK'          => '',  

                    'SUBMITTED_BY_NAME' => '',  
                    'SUBMITTED_BY_EMAIL'=> '',  
                    'SUBMITTED_BY_DATE' => '2021-01-07 13:10:10',  
                    'SUBMITTED_REMARK'  => '', 

                    'SUPERVISOR_IS'     => 'N',  
                    'SUPERVISOR_BY_NAME'=> '',  
                    'SUPERVISOR_BY_EMAIL'=> '',  
                    'SUPERVISOR_BY_DATE'=> '2021-01-07 13:10:10', 
                    'SUPERVISOR_REMARK' => '', 

                    'HOD_IS'            => 'N',  
                    'HOD_BY_NAME'       => '',  
                    'HOD_BY_EMAIL'      => '',  
                    'HOD_BY_DATE'       => '2021-01-07 13:10:10', 
                    'HOD_REMARK'        => '',  
                    
                    'CHECKED_IS'        => 'N',  
                    'CHECKED_BY_NAME'   => '',  
                    'CHECKED_BY_EMAIL'  => '',  
                    'CHECKED_BY_DATE'   => '2021-01-07 13:10:10', 
                    'CHECKED_REMARK'    => '',

                    'VERIFIED_IS'        => 'N',  
                    'VERIFIED_BY_NAME'   => '',  
                    'VERIFIED_BY_EMAIL'  => '',  
                    'VERIFIED_BY_DATE'   => '2021-01-07 13:10:10', 
                    'VERIFIED_REMARK'    => ''  
                ],
                [ 
                    'APP_ID'            => '17',
                    'REF_NO'            => 'STTF00017',
                    'STAGE'             => 'DRAFT',
                    'STATUS'            => '',
                    'COMPANY'           => '',
                    'BRANCH_NAME'       => 'KUALA LUMPUR ENTERPRISE CENTRE',
                    'CUST_NAME'         => 'STEADY AUTO BODY MAKER SDN BHD',
                    'CUST_PERSON_NAME'  => 'MR CHOON YEH',
                    'CUST_EMAIL'        => '',
                    'CUST_CONTACT_NO'   => '60122049613',
                    'CUST_OFFICE_NO'    => '',

                    'CUST_SECTOR'       => 'FABRICATION OF AUTO BODY PARTS AND ACCESSORIES',
                    
                    'CUST_ADDRESS'      => 'LOT PT 17611, JALAN PUSAT SERENTI SUNGAI BAKAU, 48000 RAWANG, MALAYSIA',
                    'CUST_CITY'         => '',
                    'CUST_STATE'        => '',

                    'COMP_PERSON_NAME'  => 'NUR AIDA JASMIN',
                    'COMP_EMAIL'        => '',
                    'COMP_CONTACT_NO'   => '601163246574',

                    'SME_CLIENT'        => '',
                    'SME_SECTOR_TM'     => '',
                    'SME_AGM'           => '',
                    'SME_AM'            => '',
                    'SME_RM'            => '',
                    'SME_REV'           => '',
                    'SME_REMOVE'        => '',
                    'SME_DEFINITION'    => '', 

                    'REG_SSM'           => '', 
                    'APPLICATION_AMOUNT'=> '', 
                    'APP_PRODUCT'       => '', 
                    'PLC_GLC'           => '', 
                    'MALAYSIAN_PCT'     => '', 
                    'YEARS_OPS'         => '', 
                    'FINANCIAL_SOLVENT' => '', 
                    'NO_LEGAL_ACTION'   => '',  

                    'C_BY_NAME'         => '',  
                    'C_BY_EMAIL'        => '',  
                    'C_BY_DATE'         => '2021-01-07 13:10:10',  
                    'C_REMARK'          => '',  

                    'U_STATUS'          => 'N',  
                    'U_COUNT'           => '0',  
                    'U_BY_NAME'         => '',  
                    'U_BY_EMAIL'        => '',  
                    'U_BY_DATE'         => '2021-01-07 13:10:10',  
                    'U_REMARK'          => '',  

                    'SUBMITTED_BY_NAME' => '',  
                    'SUBMITTED_BY_EMAIL'=> '',  
                    'SUBMITTED_BY_DATE' => '2021-01-07 13:10:10',  
                    'SUBMITTED_REMARK'  => '', 

                    'SUPERVISOR_IS'     => 'N',  
                    'SUPERVISOR_BY_NAME'=> '',  
                    'SUPERVISOR_BY_EMAIL'=> '',  
                    'SUPERVISOR_BY_DATE'=> '2021-01-07 13:10:10', 
                    'SUPERVISOR_REMARK' => '', 

                    'HOD_IS'            => 'N',  
                    'HOD_BY_NAME'       => '',  
                    'HOD_BY_EMAIL'      => '',  
                    'HOD_BY_DATE'       => '2021-01-07 13:10:10', 
                    'HOD_REMARK'        => '',  
                    
                    'CHECKED_IS'        => 'N',  
                    'CHECKED_BY_NAME'   => '',  
                    'CHECKED_BY_EMAIL'  => '',  
                    'CHECKED_BY_DATE'   => '2021-01-07 13:10:10', 
                    'CHECKED_REMARK'    => '',

                    'VERIFIED_IS'        => 'N',  
                    'VERIFIED_BY_NAME'   => '',  
                    'VERIFIED_BY_EMAIL'  => '',  
                    'VERIFIED_BY_DATE'   => '2021-01-07 13:10:10', 
                    'VERIFIED_REMARK'    => ''  
                ],
                [ 
                    'APP_ID'            => '18',
                    'REF_NO'            => 'STTF00018',
                    'STAGE'             => 'DRAFT',
                    'STATUS'            => '',
                    'COMPANY'           => '',
                    'BRANCH_NAME'       => 'SHAH ALAM ENTERPRISE CENTRE',
                    'CUST_NAME'         => 'AD INTERACT INTERNATIONAL SDN BHD',
                    'CUST_PERSON_NAME'  => 'MAS AZIANNA ABDUL RAZAK',
                    'CUST_EMAIL'        => 'mas@adinternational.com.my',
                    'CUST_CONTACT_NO'   => '',
                    'CUST_OFFICE_NO'    => '03-5644 2773',

                    'CUST_SECTOR'       => 'DEALING IN ADVERTISING AND PUBLIC RELATION PROMOTION',
                    
                    'CUST_ADDRESS'      => '6-3, JALAN PJS 8/17 DATARAN MENTARI BANDAR SUNWAY PETALING JAYA 46150 SELANGOR',
                    'CUST_CITY'         => '',
                    'CUST_STATE'        => '',

                    'COMP_PERSON_NAME'  => 'AZRINA AIREEN BINTI MAHARANI',
                    'COMP_EMAIL'        => 'azrinaaireen@tm.com.my',
                    'COMP_CONTACT_NO'   => '',

                    'SME_CLIENT'        => '',
                    'SME_SECTOR_TM'     => '',
                    'SME_AGM'           => '',
                    'SME_AM'            => '',
                    'SME_RM'            => '',
                    'SME_REV'           => '',
                    'SME_REMOVE'        => '',
                    'SME_DEFINITION'    => '', 

                    'REG_SSM'           => '', 
                    'APPLICATION_AMOUNT'=> '', 
                    'APP_PRODUCT'       => '', 
                    'PLC_GLC'           => '', 
                    'MALAYSIAN_PCT'     => '', 
                    'YEARS_OPS'         => '', 
                    'FINANCIAL_SOLVENT' => '', 
                    'NO_LEGAL_ACTION'   => '',  

                    'C_BY_NAME'         => '',  
                    'C_BY_EMAIL'        => '',  
                    'C_BY_DATE'         => '2021-01-07 13:10:10',  
                    'C_REMARK'          => '',  

                    'U_STATUS'          => 'N',  
                    'U_COUNT'           => '0',  
                    'U_BY_NAME'         => '',  
                    'U_BY_EMAIL'        => '',  
                    'U_BY_DATE'         => '2021-01-07 13:10:10',  
                    'U_REMARK'          => '',  

                    'SUBMITTED_BY_NAME' => '',  
                    'SUBMITTED_BY_EMAIL'=> '',  
                    'SUBMITTED_BY_DATE' => '2021-01-07 13:10:10',  
                    'SUBMITTED_REMARK'  => '', 

                    'SUPERVISOR_IS'     => 'N',  
                    'SUPERVISOR_BY_NAME'=> '',  
                    'SUPERVISOR_BY_EMAIL'=> '',  
                    'SUPERVISOR_BY_DATE'=> '2021-01-07 13:10:10', 
                    'SUPERVISOR_REMARK' => '', 

                    'HOD_IS'            => 'N',  
                    'HOD_BY_NAME'       => '',  
                    'HOD_BY_EMAIL'      => '',  
                    'HOD_BY_DATE'       => '2021-01-07 13:10:10', 
                    'HOD_REMARK'        => '',  
                    
                    'CHECKED_IS'        => 'N',  
                    'CHECKED_BY_NAME'   => '',  
                    'CHECKED_BY_EMAIL'  => '',  
                    'CHECKED_BY_DATE'   => '2021-01-07 13:10:10', 
                    'CHECKED_REMARK'    => '',

                    'VERIFIED_IS'        => 'N',  
                    'VERIFIED_BY_NAME'   => '',  
                    'VERIFIED_BY_EMAIL'  => '',  
                    'VERIFIED_BY_DATE'   => '2021-01-07 13:10:10', 
                    'VERIFIED_REMARK'    => ''  
                ],[ 
                    'APP_ID'            => '19',
                    'REF_NO'            => 'STTF00019',
                    'STAGE'             => 'DRAFT',
                    'STATUS'            => '',
                    'COMPANY'           => '',
                    'BRANCH_NAME'       => 'KUALA LUMPUR ENTERPRISE CENTRE',
                    'CUST_NAME'         => 'FRESHTEL GROUP SDN BHD',
                    'CUST_PERSON_NAME'  => 'EDWARD YEE ',
                    'CUST_EMAIL'        => 'edward@freshtel.my',
                    'CUST_CONTACT_NO'   => '',
                    'CUST_OFFICE_NO'    => '',

                    'CUST_SECTOR'       => 'TELECOMMUICATION DATA AND VOICE SERVICES PROVIDER. INTERNET SERVICE PROVIDER FOR BOTH WIRELESS AND WIRED INFRASTRUCTURE',
                    
                    'CUST_ADDRESS'      => 'NO. 22-3, BLOCK 2, JALIL LINK, JALAN JALIL JAYA 2, BUKIT JALIL, 57000 KUALA LUMPUR, MALAYSIA.',
                    'CUST_CITY'         => '',
                    'CUST_STATE'        => '',

                    'COMP_PERSON_NAME'  => 'MUHAMMAD MAZLEE BIN MOKHTAR',
                    'COMP_EMAIL'        => 'mazleemokhtar@tm.com.my',
                    'COMP_CONTACT_NO'   => '60136252503',

                    'SME_CLIENT'        => '',
                    'SME_SECTOR_TM'     => '',
                    'SME_AGM'           => '',
                    'SME_AM'            => '',
                    'SME_RM'            => '',
                    'SME_REV'           => '',
                    'SME_REMOVE'        => '',
                    'SME_DEFINITION'    => '', 

                    'REG_SSM'           => '', 
                    'APPLICATION_AMOUNT'=> '', 
                    'APP_PRODUCT'       => '', 
                    'PLC_GLC'           => '', 
                    'MALAYSIAN_PCT'     => '', 
                    'YEARS_OPS'         => '', 
                    'FINANCIAL_SOLVENT' => '', 
                    'NO_LEGAL_ACTION'   => '',  

                    'C_BY_NAME'         => '',  
                    'C_BY_EMAIL'        => '',  
                    'C_BY_DATE'         => '2021-01-07 13:10:10',  
                    'C_REMARK'          => '',  

                    'U_STATUS'          => 'N',  
                    'U_COUNT'           => '0',  
                    'U_BY_NAME'         => '',  
                    'U_BY_EMAIL'        => '',  
                    'U_BY_DATE'         => '2021-01-07 13:10:10',  
                    'U_REMARK'          => '',  

                    'SUBMITTED_BY_NAME' => '',  
                    'SUBMITTED_BY_EMAIL'=> '',  
                    'SUBMITTED_BY_DATE' => '2021-01-07 13:10:10',  
                    'SUBMITTED_REMARK'  => '', 

                    'SUPERVISOR_IS'     => 'N',  
                    'SUPERVISOR_BY_NAME'=> '',  
                    'SUPERVISOR_BY_EMAIL'=> '',  
                    'SUPERVISOR_BY_DATE'=> '2021-01-07 13:10:10', 
                    'SUPERVISOR_REMARK' => '', 

                    'HOD_IS'            => 'N',  
                    'HOD_BY_NAME'       => '',  
                    'HOD_BY_EMAIL'      => '',  
                    'HOD_BY_DATE'       => '2021-01-07 13:10:10', 
                    'HOD_REMARK'        => '',  
                    
                    'CHECKED_IS'        => 'N',  
                    'CHECKED_BY_NAME'   => '',  
                    'CHECKED_BY_EMAIL'  => '',  
                    'CHECKED_BY_DATE'   => '2021-01-07 13:10:10', 
                    'CHECKED_REMARK'    => '',

                    'VERIFIED_IS'        => 'N',  
                    'VERIFIED_BY_NAME'   => '',  
                    'VERIFIED_BY_EMAIL'  => '',  
                    'VERIFIED_BY_DATE'   => '2021-01-07 13:10:10', 
                    'VERIFIED_REMARK'    => ''  
                ],
                [ 
                    'APP_ID'            => '20',
                    'REF_NO'            => 'STTF00020',
                    'STAGE'             => 'DRAFT',
                    'STATUS'            => '',
                    'COMPANY'           => '',
                    'BRANCH_NAME'       => '0883432V',
                    'CUST_NAME'         => 'MSE DOTNET SDN BHD',
                    'CUST_PERSON_NAME'  => 'RYAN LOOI',
                    'CUST_EMAIL'        => 'ryan@mse.net.my',
                    'CUST_CONTACT_NO'   => '',
                    'CUST_OFFICE_NO'    => '',

                    'CUST_SECTOR'       => 'PROVIDER OF A MISSION-CRITICAL TELECOMMUNICATION SOLUTION',
                    
                    'CUST_ADDRESS'      => 'UNIT 3A-01&02, TOWER A, VERTICAL BUSINESS SUITE, AVENUE, 3, NO.8, JALAN KERINCHI, BANGSAR SOUTH, 59200 KUALA LUMPUR',
                    'CUST_CITY'         => '',
                    'CUST_STATE'        => '',

                    'COMP_PERSON_NAME'  => 'SENTHIL KOGILAM A/P CHELLIAH',
                    'COMP_EMAIL'        => '',
                    'COMP_CONTACT_NO'   => '60166960827',

                    'SME_CLIENT'        => '',
                    'SME_SECTOR_TM'     => '',
                    'SME_AGM'           => '',
                    'SME_AM'            => '',
                    'SME_RM'            => '',
                    'SME_REV'           => '',
                    'SME_REMOVE'        => '',
                    'SME_DEFINITION'    => '', 

                    'REG_SSM'           => '', 
                    'APPLICATION_AMOUNT'=> '', 
                    'APP_PRODUCT'       => '', 
                    'PLC_GLC'           => '', 
                    'MALAYSIAN_PCT'     => '', 
                    'YEARS_OPS'         => '', 
                    'FINANCIAL_SOLVENT' => '', 
                    'NO_LEGAL_ACTION'   => '',  

                    'C_BY_NAME'         => '',  
                    'C_BY_EMAIL'        => '',  
                    'C_BY_DATE'         => '2021-01-07 13:10:10',  
                    'C_REMARK'          => '',  

                    'U_STATUS'          => 'N',  
                    'U_COUNT'           => '0',  
                    'U_BY_NAME'         => '',  
                    'U_BY_EMAIL'        => '',  
                    'U_BY_DATE'         => '2021-01-07 13:10:10',  
                    'U_REMARK'          => '',  

                    'SUBMITTED_BY_NAME' => '',  
                    'SUBMITTED_BY_EMAIL'=> '',  
                    'SUBMITTED_BY_DATE' => '2021-01-07 13:10:10',  
                    'SUBMITTED_REMARK'  => '', 

                    'SUPERVISOR_IS'     => 'N',  
                    'SUPERVISOR_BY_NAME'=> '',  
                    'SUPERVISOR_BY_EMAIL'=> '',  
                    'SUPERVISOR_BY_DATE'=> '2021-01-07 13:10:10', 
                    'SUPERVISOR_REMARK' => '', 

                    'HOD_IS'            => 'N',  
                    'HOD_BY_NAME'       => '',  
                    'HOD_BY_EMAIL'      => '',  
                    'HOD_BY_DATE'       => '2021-01-07 13:10:10', 
                    'HOD_REMARK'        => '',  
                    
                    'CHECKED_IS'        => 'N',  
                    'CHECKED_BY_NAME'   => '',  
                    'CHECKED_BY_EMAIL'  => '',  
                    'CHECKED_BY_DATE'   => '2021-01-07 13:10:10', 
                    'CHECKED_REMARK'    => '',

                    'VERIFIED_IS'        => 'N',  
                    'VERIFIED_BY_NAME'   => '',  
                    'VERIFIED_BY_EMAIL'  => '',  
                    'VERIFIED_BY_DATE'   => '2021-01-07 13:10:10', 
                    'VERIFIED_REMARK'    => ''  
                ],
                [ 
                    'APP_ID'            => '21',
                    'REF_NO'            => 'STTF00021',
                    'STAGE'             => 'DRAFT',
                    'STATUS'            => '',
                    'COMPANY'           => '',
                    'BRANCH_NAME'       => '221877-W',
                    'CUST_NAME'         => 'NETTCO STEEL SDN BHD',
                    'CUST_PERSON_NAME'  => 'MISS HUI LING',
                    'CUST_EMAIL'        => '',
                    'CUST_CONTACT_NO'   => '',
                    'CUST_OFFICE_NO'    => '6045072999|6045073999',

                    'CUST_SECTOR'       => '',
                    
                    'CUST_ADDRESS'      => 'PLOT 64 PHASE IV, PRAI INDUSTRIAL ESTATE 13600 PRAI, PENANG, MALAYSIA',
                    'CUST_CITY'         => '',
                    'CUST_STATE'        => '',

                    'COMP_PERSON_NAME'  => 'NUR FARAH HANA BINTI AHMAD FAUZI|MR YONG',
                    'COMP_EMAIL'        => '',
                    'COMP_CONTACT_NO'   => '60123771087|013 3602103',

                    'SME_CLIENT'        => '',
                    'SME_SECTOR_TM'     => '',
                    'SME_AGM'           => '',
                    'SME_AM'            => '',
                    'SME_RM'            => '',
                    'SME_REV'           => '',
                    'SME_REMOVE'        => '',
                    'SME_DEFINITION'    => '', 

                    'REG_SSM'           => '', 
                    'APPLICATION_AMOUNT'=> '', 
                    'APP_PRODUCT'       => '', 
                    'PLC_GLC'           => '', 
                    'MALAYSIAN_PCT'     => '', 
                    'YEARS_OPS'         => '', 
                    'FINANCIAL_SOLVENT' => '', 
                    'NO_LEGAL_ACTION'   => '',  

                    'C_BY_NAME'         => '',  
                    'C_BY_EMAIL'        => '',  
                    'C_BY_DATE'         => '2021-01-07 13:10:10',  
                    'C_REMARK'          => '',  

                    'U_STATUS'          => 'N',  
                    'U_COUNT'           => '0',  
                    'U_BY_NAME'         => '',  
                    'U_BY_EMAIL'        => '',  
                    'U_BY_DATE'         => '2021-01-07 13:10:10',  
                    'U_REMARK'          => '',  

                    'SUBMITTED_BY_NAME' => '',  
                    'SUBMITTED_BY_EMAIL'=> '',  
                    'SUBMITTED_BY_DATE' => '2021-01-07 13:10:10',  
                    'SUBMITTED_REMARK'  => '', 

                    'SUPERVISOR_IS'     => 'N',  
                    'SUPERVISOR_BY_NAME'=> '',  
                    'SUPERVISOR_BY_EMAIL'=> '',  
                    'SUPERVISOR_BY_DATE'=> '2021-01-07 13:10:10', 
                    'SUPERVISOR_REMARK' => '', 

                    'HOD_IS'            => 'N',  
                    'HOD_BY_NAME'       => '',  
                    'HOD_BY_EMAIL'      => '',  
                    'HOD_BY_DATE'       => '2021-01-07 13:10:10', 
                    'HOD_REMARK'        => '',  
                    
                    'CHECKED_IS'        => 'N',  
                    'CHECKED_BY_NAME'   => '',  
                    'CHECKED_BY_EMAIL'  => '',  
                    'CHECKED_BY_DATE'   => '2021-01-07 13:10:10', 
                    'CHECKED_REMARK'    => '',

                    'VERIFIED_IS'        => 'N',  
                    'VERIFIED_BY_NAME'   => '',  
                    'VERIFIED_BY_EMAIL'  => '',  
                    'VERIFIED_BY_DATE'   => '2021-01-07 13:10:10', 
                    'VERIFIED_REMARK'    => ''  
                ],
                [ 
                    'APP_ID'            => '22',
                    'REF_NO'            => 'STTF00022',
                    'STAGE'             => 'DRAFT',
                    'STATUS'            => '',
                    'COMPANY'           => '',
                    'BRANCH_NAME'       => '817779-W',
                    'CUST_NAME'         => 'VERITY INTELLIGENCE SDN BHD',
                    'CUST_PERSON_NAME'  => 'BENITO',
                    'CUST_EMAIL'        => 'benito@verityintel.com',
                    'CUST_CONTACT_NO'   => '60378903222',
                    'CUST_OFFICE_NO'    => '',

                    'CUST_SECTOR'       => '',
                    
                    'CUST_ADDRESS'      => 'BLOCK C, KELANA SQUARE, JALAN SS 7/26, KELANA JAYA, 47301 PETALING JAYA, SELANGOR',
                    'CUST_CITY'         => '',
                    'CUST_STATE'        => '',

                    'COMP_PERSON_NAME'  => 'PREAVEEN A/L PARAMESAN|MIKE PUI ',
                    'COMP_EMAIL'        => 'preaveen.paramesan@tm.com.my|mikepui@tm.com.my',
                    'COMP_CONTACT_NO'   => '60138100995',

                    'SME_CLIENT'        => '',
                    'SME_SECTOR_TM'     => '',
                    'SME_AGM'           => '',
                    'SME_AM'            => '',
                    'SME_RM'            => '',
                    'SME_REV'           => '',
                    'SME_REMOVE'        => '',
                    'SME_DEFINITION'    => '', 

                    'REG_SSM'           => '', 
                    'APPLICATION_AMOUNT'=> '', 
                    'APP_PRODUCT'       => '', 
                    'PLC_GLC'           => '', 
                    'MALAYSIAN_PCT'     => '', 
                    'YEARS_OPS'         => '', 
                    'FINANCIAL_SOLVENT' => '', 
                    'NO_LEGAL_ACTION'   => '',  

                    'C_BY_NAME'         => '',  
                    'C_BY_EMAIL'        => '',  
                    'C_BY_DATE'         => '2021-01-07 13:10:10',  
                    'C_REMARK'          => '',  

                    'U_STATUS'          => 'N',  
                    'U_COUNT'           => '0',  
                    'U_BY_NAME'         => '',  
                    'U_BY_EMAIL'        => '',  
                    'U_BY_DATE'         => '2021-01-07 13:10:10',  
                    'U_REMARK'          => '',  

                    'SUBMITTED_BY_NAME' => '',  
                    'SUBMITTED_BY_EMAIL'=> '',  
                    'SUBMITTED_BY_DATE' => '2021-01-07 13:10:10',  
                    'SUBMITTED_REMARK'  => '', 

                    'SUPERVISOR_IS'     => 'N',  
                    'SUPERVISOR_BY_NAME'=> '',  
                    'SUPERVISOR_BY_EMAIL'=> '',  
                    'SUPERVISOR_BY_DATE'=> '2021-01-07 13:10:10', 
                    'SUPERVISOR_REMARK' => '', 

                    'HOD_IS'            => 'N',  
                    'HOD_BY_NAME'       => '',  
                    'HOD_BY_EMAIL'      => '',  
                    'HOD_BY_DATE'       => '2021-01-07 13:10:10', 
                    'HOD_REMARK'        => '',  
                    
                    'CHECKED_IS'        => 'N',  
                    'CHECKED_BY_NAME'   => '',  
                    'CHECKED_BY_EMAIL'  => '',  
                    'CHECKED_BY_DATE'   => '2021-01-07 13:10:10', 
                    'CHECKED_REMARK'    => '',

                    'VERIFIED_IS'        => 'N',  
                    'VERIFIED_BY_NAME'   => '',  
                    'VERIFIED_BY_EMAIL'  => '',  
                    'VERIFIED_BY_DATE'   => '2021-01-07 13:10:10', 
                    'VERIFIED_REMARK'    => ''  
                ],
                [ 
                    'APP_ID'            => '23',
                    'REF_NO'            => 'STTF00023',
                    'STAGE'             => 'DRAFT',
                    'STATUS'            => '',
                    'COMPANY'           => '',
                    'BRANCH_NAME'       => '0474887-T',
                    'CUST_NAME'         => 'TAS AGENCY SDN BHD ',
                    'CUST_PERSON_NAME'  => 'MR. SHAREEF',
                    'CUST_EMAIL'        => 'shareef@tasgroup.com.my',
                    'CUST_CONTACT_NO'   => '',
                    'CUST_OFFICE_NO'    => '',

                    'CUST_SECTOR'       => '',
                    
                    'CUST_ADDRESS'      => 'NO. 21, JALAN MEWAH 2, TAMAN MEWAH, 12100 BUTTERWORTH, PENANG,',
                    'CUST_CITY'         => '',
                    'CUST_STATE'        => '',

                    'COMP_PERSON_NAME'  => 'MOHD ZULFADHLI BIN AHMAD MARZUKI',
                    'COMP_EMAIL'        => '',
                    'COMP_CONTACT_NO'   => '',

                    'SME_CLIENT'        => '',
                    'SME_SECTOR_TM'     => '',
                    'SME_AGM'           => '',
                    'SME_AM'            => '',
                    'SME_RM'            => '',
                    'SME_REV'           => '',
                    'SME_REMOVE'        => '',
                    'SME_DEFINITION'    => '', 

                    'REG_SSM'           => '', 
                    'APPLICATION_AMOUNT'=> '', 
                    'APP_PRODUCT'       => '', 
                    'PLC_GLC'           => '', 
                    'MALAYSIAN_PCT'     => '', 
                    'YEARS_OPS'         => '', 
                    'FINANCIAL_SOLVENT' => '', 
                    'NO_LEGAL_ACTION'   => '',  

                    'C_BY_NAME'         => '',  
                    'C_BY_EMAIL'        => '',  
                    'C_BY_DATE'         => '2021-01-07 13:10:10',  
                    'C_REMARK'          => '',  

                    'U_STATUS'          => 'N',  
                    'U_COUNT'           => '0',  
                    'U_BY_NAME'         => '',  
                    'U_BY_EMAIL'        => '',  
                    'U_BY_DATE'         => '2021-01-07 13:10:10',  
                    'U_REMARK'          => '',  

                    'SUBMITTED_BY_NAME' => '',  
                    'SUBMITTED_BY_EMAIL'=> '',  
                    'SUBMITTED_BY_DATE' => '2021-01-07 13:10:10',  
                    'SUBMITTED_REMARK'  => '', 

                    'SUPERVISOR_IS'     => 'N',  
                    'SUPERVISOR_BY_NAME'=> '',  
                    'SUPERVISOR_BY_EMAIL'=> '',  
                    'SUPERVISOR_BY_DATE'=> '2021-01-07 13:10:10', 
                    'SUPERVISOR_REMARK' => '', 

                    'HOD_IS'            => 'N',  
                    'HOD_BY_NAME'       => '',  
                    'HOD_BY_EMAIL'      => '',  
                    'HOD_BY_DATE'       => '2021-01-07 13:10:10', 
                    'HOD_REMARK'        => '',  
                    
                    'CHECKED_IS'        => 'N',  
                    'CHECKED_BY_NAME'   => '',  
                    'CHECKED_BY_EMAIL'  => '',  
                    'CHECKED_BY_DATE'   => '2021-01-07 13:10:10', 
                    'CHECKED_REMARK'    => '',

                    'VERIFIED_IS'        => 'N',  
                    'VERIFIED_BY_NAME'   => '',  
                    'VERIFIED_BY_EMAIL'  => '',  
                    'VERIFIED_BY_DATE'   => '2021-01-07 13:10:10', 
                    'VERIFIED_REMARK'    => ''  
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
        Schema::dropIfExists('sttf_apps');

        Schema::table('STTF_APPS', function($table) {
            $table->dropColumn('APP_ID'); 
            $table->dropColumn('REF_NO');
            $table->dropColumn('STAGE');
            $table->dropColumn('STATUS');
            $table->dropColumn('COMPANY');  
            $table->dropColumn('BRANCH_NAME');  
           
            $table->dropColumn('CUST_NAME');  
            $table->dropColumn('CUST_PERSON_NAME');
            $table->dropColumn('CUST_EMAIL');   
            $table->dropColumn('CUST_CONTACT_NO');  
            $table->dropColumn('CUST_OFFICE_NO');  
            $table->dropColumn('CUST_SECTOR');  
            $table->dropColumn('CUST_ADDRESS');  
            $table->dropColumn('CUST_CITY');  
            $table->dropColumn('CUST_STATE');  

            $table->dropColumn('COMP_PERSON_NAME');  
            $table->dropColumn('COMP_EMAIL');  
            $table->dropColumn('COMP_CONTACT_NO');  

            $table->dropColumn('SME_CLIENT');  
            $table->dropColumn('SME_SECTOR_TM');  
            $table->dropColumn('SME_AGM');  
            $table->dropColumn('SME_AM');  
            $table->dropColumn('SME_RM');  
            $table->dropColumn('SME_REV');  
            $table->dropColumn('SME_REMOVE');  
            $table->dropColumn('SME_DEFINITION');  

            $table->dropColumn('REG_SSM');  
            $table->dropColumn('APPLICATION_AMOUNT');  
            $table->dropColumn('APP_PRODUCT');  
            $table->dropColumn('PLC_GLC');  
            $table->dropColumn('MALAYSIAN_PCT');  
            $table->dropColumn('YEARS_OPS');  
            $table->dropColumn('FINANCIAL_SOLVENT');  
            $table->dropColumn('NO_LEGAL_ACTION');  

            $table->dropColumn('C_BY_NAME'); 
            $table->dropColumn('C_BY_EMAIL'); 
            $table->dropColumn('C_BY_DATE'); 
            $table->dropColumn('C_REMARK'); 

            $table->dropColumn('U_STATUS'); 
            $table->dropColumn('U_COUNT'); 
            $table->dropColumn('U_BY_NAME'); 
            $table->dropColumn('U_BY_EMAIL'); 
            $table->dropColumn('U_BY_DATE'); 
            $table->dropColumn('U_REMARK'); 

            $table->dropColumn('SUBMITTED_BY_NAME'); 
            $table->dropColumn('SUBMITTED_BY_EMAIL'); 
            $table->dropColumn('SUBMITTED_BY_DATE'); 
            $table->dropColumn('SUBMITTED_REMARK'); 

            $table->dropColumn('SUPERVISOR_IS'); 
            $table->dropColumn('SUPERVISOR_BY_NAME'); 
            $table->dropColumn('SUPERVISOR_BY_EMAIL'); 
            $table->dropColumn('SUPERVISOR_BY_DATE'); 
            $table->dropColumn('SUPERVISOR_REMARK'); 

            $table->dropColumn('HOD_IS'); 
            $table->dropColumn('HOD_BY_NAME'); 
            $table->dropColumn('HOD_BY_EMAIL'); 
            $table->dropColumn('HOD_BY_DATE'); 
            $table->dropColumn('HOD_REMARK'); 

            $table->dropColumn('CHECKED_IS'); 
            $table->dropColumn('CHECKED_BY_NAME'); 
            $table->dropColumn('CHECKED_BY_EMAIL'); 
            $table->dropColumn('CHECKED_BY_DATE'); 
            $table->dropColumn('CHECKED_REMARK'); 

            $table->dropColumn('VERIFIED_IS'); 
            $table->dropColumn('VERIFIED_BY_NAME'); 
            $table->dropColumn('VERIFIED_BY_EMAIL'); 
            $table->dropColumn('VERIFIED_BY_DATE'); 
            $table->dropColumn('VERIFIED_REMARK');  
        }); 
    }
}
