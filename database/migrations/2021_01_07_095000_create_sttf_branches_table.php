<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSttfBranchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('STTF_BRANCHES', function (Blueprint $table) {
            
            $table->bigIncrements('BRANCH_ID'); 
            $table->string('BRANCH_NAME')->nullable();
            $table->string('BRANCH_ADDRESS_1')->nullable();
            $table->string('BRANCH_ADDRESS_2')->nullable();
            $table->string('BRANCH_ADDRESS_3')->nullable();  
            $table->string('BRANCH_LATITUDE')->nullable();  
            $table->string('BRANCH_LONGITUDE')->nullable();   
            $table->string('BRANCH_STATUS')->nullable();   

            $table->string('CD_BY_NAME')->nullable(); 
            $table->string('CD_BY_EMAIL')->nullable(); 
            $table->datetime('CD_BY_DATE')->nullable(); 
            $table->string('CD_REMARK')->nullable(); 

            $table->string('UD_STATUS')->nullable(); 
            $table->integer('UD_COUNT')->nullable(); 
            $table->string('UD_BY_NAME')->nullable(); 
            $table->string('UD_BY_EMAIL')->nullable(); 
            $table->datetime('UD_BY_DATE')->nullable(); 
            $table->string('UD_REMARK')->nullable();  

        });

        DB::table('STTF_BRANCHES')->insert(
            array(
                [ 
                    'BRANCH_ID'        => '1' ,
                    'BRANCH_NAME'      => 'KUALA LUMPUR ENTERPRISE CENTRE' ,
                    'BRANCH_ADDRESS_1' => 'Level 1, Menara SME Bank',
                    'BRANCH_ADDRESS_2' => 'Jalan Sultan Ismail, Peti Surat 12352',
                    'BRANCH_ADDRESS_3' => '50774 Kuala Lumpur', 
                    'BRANCH_LATITUDE'  => '3.158388', 
                    'BRANCH_LONGITUDE' => '101.701065', 
                    'BRANCH_STATUS'    => 'Y', 

                    'CD_BY_NAME'       => 'ROZAIMI BIN ZAMAHRI',
                    'CD_BY_EMAIL'      => 'rozaimi.zamahri@smebank.com.my',
                    'CD_BY_DATE'       => '2021-01-06 10:10:10',
                    'CD_REMARK'        => 'default remark',
                    'UD_STATUS'        => 'N',
                    'UD_COUNT'         => '0',
                    'UD_BY_EMAIL'      => 'rozaimi.zamahri@smebank.com.my',
                    'UD_BY_DATE'       => '2021-01-06 10:10:10',
                    'UD_REMARK'        => 'default remark'
                ],
                [ 
                    'BRANCH_ID'        => '2' ,
                    'BRANCH_NAME'      => 'SHAH ALAM ENTERPRISE CENTRE' ,
                    'BRANCH_ADDRESS_1' => 'Lot 23 & 23A',
                    'BRANCH_ADDRESS_2' => 'Vista Alam Jalan Ikhtisas, Seksyen 14',
                    'BRANCH_ADDRESS_3' => '40000 Shah Alam Selangor', 
                    'BRANCH_LATITUDE'  => '3.071851', 
                    'BRANCH_LONGITUDE' => '101.525499', 
                    'BRANCH_STATUS'    => 'Y', 

                    'CD_BY_NAME'       => 'ROZAIMI BIN ZAMAHRI',
                    'CD_BY_EMAIL'      => 'rozaimi.zamahri@smebank.com.my',
                    'CD_BY_DATE'       => '2021-01-06 10:10:10',
                    'CD_REMARK'        => 'default remark',
                    'UD_STATUS'        => 'N',
                    'UD_COUNT'         => '0',
                    'UD_BY_EMAIL'      => 'rozaimi.zamahri@smebank.com.my',
                    'UD_BY_DATE'       => '2021-01-06 10:10:10',
                    'UD_REMARK'        => 'default remark'
                ],
                [ 
                    'BRANCH_ID'        => '3' ,
                    'BRANCH_NAME'      => 'KAJANG ENTERPRISE CENTRE' ,
                    'BRANCH_ADDRESS_1' => 'No 9 & 10, Jalan KP 1/2, Taman Kajang Prima',
                    'BRANCH_ADDRESS_2' => 'Jalan Kajang Semenyih',
                    'BRANCH_ADDRESS_3' => '43000 Kajang, Selangor', 
                    'BRANCH_LATITUDE'  => '2.983534', 
                    'BRANCH_LONGITUDE' => '101.81443', 
                    'BRANCH_STATUS'    => 'Y', 

                    'CD_BY_NAME'       => 'ROZAIMI BIN ZAMAHRI',
                    'CD_BY_EMAIL'      => 'rozaimi.zamahri@smebank.com.my',
                    'CD_BY_DATE'       => '2021-01-06 10:10:10',
                    'CD_REMARK'        => 'default remark',
                    'UD_STATUS'        => 'N',
                    'UD_COUNT'         => '0',
                    'UD_BY_EMAIL'      => 'rozaimi.zamahri@smebank.com.my',
                    'UD_BY_DATE'       => '2021-01-06 10:10:10',
                    'UD_REMARK'        => 'default remark'
                ],
                [ 
                    'BRANCH_ID'        => '4' ,
                    'BRANCH_NAME'      => 'SEREMBAN ENTERPRISE CENTRE' ,
                    'BRANCH_ADDRESS_1' => '87 & 88, Kompleks Persiaran Sultan Abdul Hamid',
                    'BRANCH_ADDRESS_2' => 'off Jalan Dato Siamang Gagap',
                    'BRANCH_ADDRESS_3' => '70100 Seremban', 
                    'BRANCH_LATITUDE'  => '2.723545', 
                    'BRANCH_LONGITUDE' => '101.955806', 
                    'BRANCH_STATUS'    => 'Y', 

                    'CD_BY_NAME'       => 'ROZAIMI BIN ZAMAHRI',
                    'CD_BY_EMAIL'      => 'rozaimi.zamahri@smebank.com.my',
                    'CD_BY_DATE'       => '2021-01-06 10:10:10',
                    'CD_REMARK'        => 'default remark',
                    'UD_STATUS'        => 'N',
                    'UD_COUNT'         => '0',
                    'UD_BY_EMAIL'      => 'rozaimi.zamahri@smebank.com.my',
                    'UD_BY_DATE'       => '2021-01-06 10:10:10',
                    'UD_REMARK'        => 'default remark'
                ],
                [ 
                    'BRANCH_ID'        => '5' ,
                    'BRANCH_NAME'      => 'JOHOR BAHRU ENTERPRISE CENTRE' ,
                    'BRANCH_ADDRESS_1' => 'No 16, Jalan Padi Emas 5/2',
                    'BRANCH_ADDRESS_2' => 'Pusat Bandar Tampoi',
                    'BRANCH_ADDRESS_3' => '81200 Johor Bahru Johor', 
                    'BRANCH_LATITUDE'  => '1.48999', 
                    'BRANCH_LONGITUDE' => '103.705399', 
                    'BRANCH_STATUS'    => 'Y', 

                    'CD_BY_NAME'       => 'ROZAIMI BIN ZAMAHRI',
                    'CD_BY_EMAIL'      => 'rozaimi.zamahri@smebank.com.my',
                    'CD_BY_DATE'       => '2021-01-06 10:10:10',
                    'CD_REMARK'        => 'default remark',
                    'UD_STATUS'        => 'N',
                    'UD_COUNT'         => '0',
                    'UD_BY_EMAIL'      => 'rozaimi.zamahri@smebank.com.my',
                    'UD_BY_DATE'       => '2021-01-06 10:10:10',
                    'UD_REMARK'        => 'default remark'
                ],
                [ 
                    'BRANCH_ID'        => '6' ,
                    'BRANCH_NAME'      => 'BATU PAHAT ENTERPRISE CENTRE' ,
                    'BRANCH_ADDRESS_1' => 'No. 5, 5A, 6, 6A & 6B',
                    'BRANCH_ADDRESS_2' => 'Jalan Setia Jaya, Taman Setia Jaya',
                    'BRANCH_ADDRESS_3' => '83000 Batu Pahat, Johor', 
                    'BRANCH_LATITUDE'  => '1.867652', 
                    'BRANCH_LONGITUDE' => '102.946215', 
                    'BRANCH_STATUS'    => 'Y', 

                    'CD_BY_NAME'       => 'ROZAIMI BIN ZAMAHRI',
                    'CD_BY_EMAIL'      => 'rozaimi.zamahri@smebank.com.my',
                    'CD_BY_DATE'       => '2021-01-06 10:10:10',
                    'CD_REMARK'        => 'default remark',
                    'UD_STATUS'        => 'N',
                    'UD_COUNT'         => '0',
                    'UD_BY_EMAIL'      => 'rozaimi.zamahri@smebank.com.my',
                    'UD_BY_DATE'       => '2021-01-06 10:10:10',
                    'UD_REMARK'        => 'default remark'
                ],
                [ 
                    'BRANCH_ID'        => '7' ,
                    'BRANCH_NAME'      => 'PASIR GUDANG BUSINESS CENTRE' ,
                    'BRANCH_ADDRESS_1' => 'No. 22 & 22A',
                    'BRANCH_ADDRESS_2' => 'Jalan Serangkai 18, Taman Bukit Dahlia',
                    'BRANCH_ADDRESS_3' => '81700 Pasir Gudang, Johor', 
                    'BRANCH_LATITUDE'  => '1.481113', 
                    'BRANCH_LONGITUDE' => '103.890128', 
                    'BRANCH_STATUS'    => 'Y', 

                    'CD_BY_NAME'       => 'ROZAIMI BIN ZAMAHRI',
                    'CD_BY_EMAIL'      => 'rozaimi.zamahri@smebank.com.my',
                    'CD_BY_DATE'       => '2021-01-06 10:10:10',
                    'CD_REMARK'        => 'default remark',
                    'UD_STATUS'        => 'N',
                    'UD_COUNT'         => '0',
                    'UD_BY_EMAIL'      => 'rozaimi.zamahri@smebank.com.my',
                    'UD_BY_DATE'       => '2021-01-06 10:10:10',
                    'UD_REMARK'        => 'default remark'
                ],
                [ 
                    'BRANCH_ID'        => '8' ,
                    'BRANCH_NAME'      => 'BANDAR MELAKA ENTERPRISE CENTRE' ,
                    'BRANCH_ADDRESS_1' => 'Lot 8 & 10, Taman Lagenda 2',
                    'BRANCH_ADDRESS_2' => 'Jalan 1 Lagenda',
                    'BRANCH_ADDRESS_3' => '75400 Melaka', 
                    'BRANCH_LATITUDE'  => '3.066593', 
                    'BRANCH_LONGITUDE' => '101.759607', 
                    'BRANCH_STATUS'    => 'Y', 

                    'CD_BY_NAME'       => 'ROZAIMI BIN ZAMAHRI',
                    'CD_BY_EMAIL'      => 'rozaimi.zamahri@smebank.com.my',
                    'CD_BY_DATE'       => '2021-01-06 10:10:10',
                    'CD_REMARK'        => 'default remark',
                    'UD_STATUS'        => 'N',
                    'UD_COUNT'         => '0',
                    'UD_BY_EMAIL'      => 'rozaimi.zamahri@smebank.com.my',
                    'UD_BY_DATE'       => '2021-01-06 10:10:10',
                    'UD_REMARK'        => 'default remark'
                ],
                [ 
                    'BRANCH_ID'        => '9' ,
                    'BRANCH_NAME'      => 'KUANTAN ENTERPRISE CENTRE' ,
                    'BRANCH_ADDRESS_1' => 'B-14 Jalan Tun Ismail 1',
                    'BRANCH_ADDRESS_2' => 'Sri Dagangan',
                    'BRANCH_ADDRESS_3' => '25000 Kuantan Pahang', 
                    'BRANCH_LATITUDE'  => '3.81602', 
                    'BRANCH_LONGITUDE' => '103.32857', 
                    'BRANCH_STATUS'    => 'Y', 

                    'CD_BY_NAME'       => 'ROZAIMI BIN ZAMAHRI',
                    'CD_BY_EMAIL'      => 'rozaimi.zamahri@smebank.com.my',
                    'CD_BY_DATE'       => '2021-01-06 10:10:10',
                    'CD_REMARK'        => 'default remark',
                    'UD_STATUS'        => 'N',
                    'UD_COUNT'         => '0',
                    'UD_BY_EMAIL'      => 'rozaimi.zamahri@smebank.com.my',
                    'UD_BY_DATE'       => '2021-01-06 10:10:10',
                    'UD_REMARK'        => 'default remark'
                ],
                [ 
                    'BRANCH_ID'        => '10' ,
                    'BRANCH_NAME'      => 'KUALA TERENGGANU ENTERPRISE CENTRE' ,
                    'BRANCH_ADDRESS_1' => 'Tingkat Bawah (Lot G-10) & Mezzanine',
                    'BRANCH_ADDRESS_2' => 'Menara Yayasan Islam Terengganu, Jalan Sultan Omar',
                    'BRANCH_ADDRESS_3' => '20300 Kuala Terengganu, Terengganu', 
                    'BRANCH_LATITUDE'  => '5.321381', 
                    'BRANCH_LONGITUDE' => '103.14202', 
                    'BRANCH_STATUS'    => 'Y', 

                    'CD_BY_NAME'       => 'ROZAIMI BIN ZAMAHRI',
                    'CD_BY_EMAIL'      => 'rozaimi.zamahri@smebank.com.my',
                    'CD_BY_DATE'       => '2021-01-06 10:10:10',
                    'CD_REMARK'        => 'default remark',
                    'UD_STATUS'        => 'N',
                    'UD_COUNT'         => '0',
                    'UD_BY_EMAIL'      => 'rozaimi.zamahri@smebank.com.my',
                    'UD_BY_DATE'       => '2021-01-06 10:10:10',
                    'UD_REMARK'        => 'default remark'
                ],
                [ 
                    'BRANCH_ID'        => '11' ,
                    'BRANCH_NAME'      => 'KOTA BHARU ENTERPRISE CENTRE' ,
                    'BRANCH_ADDRESS_1' => 'Lot 35, Seksyen 8',
                    'BRANCH_ADDRESS_2' => 'Jalan Kebun Sultan',
                    'BRANCH_ADDRESS_3' => '15000 Kota Bharu Kelantan', 
                    'BRANCH_LATITUDE'  => '6.13394', 
                    'BRANCH_LONGITUDE' => '102.244324', 
                    'BRANCH_STATUS'    => 'Y', 

                    'CD_BY_NAME'       => 'ROZAIMI BIN ZAMAHRI',
                    'CD_BY_EMAIL'      => 'rozaimi.zamahri@smebank.com.my',
                    'CD_BY_DATE'       => '2021-01-06 10:10:10',
                    'CD_REMARK'        => 'default remark',
                    'UD_STATUS'        => 'N',
                    'UD_COUNT'         => '0',
                    'UD_BY_EMAIL'      => 'rozaimi.zamahri@smebank.com.my',
                    'UD_BY_DATE'       => '2021-01-06 10:10:10',
                    'UD_REMARK'        => 'default remark'
                ],
                [ 
                    'BRANCH_ID'        => '12' ,
                    'BRANCH_NAME'      => 'SEBERANG JAYA ENTERPRISE CENTRE' ,
                    'BRANCH_ADDRESS_1' => 'No 12A, Jalan Todak 3, Pusat Bandar Seberang Jaya',
                    'BRANCH_ADDRESS_2' => 'Bandar Sunway',
                    'BRANCH_ADDRESS_3' => '13700 Perai, Pulau Pinang', 
                    'BRANCH_LATITUDE'  => '5.393476', 
                    'BRANCH_LONGITUDE' => '100.400328', 
                    'BRANCH_STATUS'    => 'Y', 

                    'CD_BY_NAME'       => 'ROZAIMI BIN ZAMAHRI',
                    'CD_BY_EMAIL'      => 'rozaimi.zamahri@smebank.com.my',
                    'CD_BY_DATE'       => '2021-01-06 10:10:10',
                    'CD_REMARK'        => 'default remark',
                    'UD_STATUS'        => 'N',
                    'UD_COUNT'         => '0',
                    'UD_BY_EMAIL'      => 'rozaimi.zamahri@smebank.com.my',
                    'UD_BY_DATE'       => '2021-01-06 10:10:10',
                    'UD_REMARK'        => 'default remark'
                ],
                [ 
                    'BRANCH_ID'        => '13' ,
                    'BRANCH_NAME'      => 'BAYAN BARU ENTERPRISE CENTRE' ,
                    'BRANCH_ADDRESS_1' => '10 Jalan Tengah',
                    'BRANCH_ADDRESS_2' => 'Taman Sri Tunas',
                    'BRANCH_ADDRESS_3' => '11950 Bandar Bayan Baru', 
                    'BRANCH_LATITUDE'  => '5.318921', 
                    'BRANCH_LONGITUDE' => '100.287731', 
                    'BRANCH_STATUS'    => 'Y', 

                    'CD_BY_NAME'       => 'ROZAIMI BIN ZAMAHRI',
                    'CD_BY_EMAIL'      => 'rozaimi.zamahri@smebank.com.my',
                    'CD_BY_DATE'       => '2021-01-06 10:10:10',
                    'CD_REMARK'        => 'default remark',
                    'UD_STATUS'        => 'N',
                    'UD_COUNT'         => '0',
                    'UD_BY_EMAIL'      => 'rozaimi.zamahri@smebank.com.my',
                    'UD_BY_DATE'       => '2021-01-06 10:10:10',
                    'UD_REMARK'        => 'default remark'
                ],
                [ 
                    'BRANCH_ID'        => '14' ,
                    'BRANCH_NAME'      => 'ALOR SETAR ENTERPRISE CENTRE' ,
                    'BRANCH_ADDRESS_1' => '87 & 88, Kompleks Persiaran Sultan Abdul Hamid',
                    'BRANCH_ADDRESS_2' => 'Persiaran Sultan Abdul Hamid',
                    'BRANCH_ADDRESS_3' => '05050 Alor Setar Kedah', 
                    'BRANCH_LATITUDE'  => '6.114301', 
                    'BRANCH_LONGITUDE' => '100.362738', 
                    'BRANCH_STATUS'    => 'Y', 

                    'CD_BY_NAME'       => 'ROZAIMI BIN ZAMAHRI',
                    'CD_BY_EMAIL'      => 'rozaimi.zamahri@smebank.com.my',
                    'CD_BY_DATE'       => '2021-01-06 10:10:10',
                    'CD_REMARK'        => 'default remark',
                    'UD_STATUS'        => 'N',
                    'UD_COUNT'         => '0',
                    'UD_BY_EMAIL'      => 'rozaimi.zamahri@smebank.com.my',
                    'UD_BY_DATE'       => '2021-01-06 10:10:10',
                    'UD_REMARK'        => 'default remark'
                ],
                [ 
                    'BRANCH_ID'        => '15' ,
                    'BRANCH_NAME'      => 'IPOH ENTERPRISE CENTRE' ,
                    'BRANCH_ADDRESS_1' => '28 Medan Istana',
                    'BRANCH_ADDRESS_2' => 'Bandar Ipoh Raya',
                    'BRANCH_ADDRESS_3' => '30300 Ipoh Perak', 
                    'BRANCH_LATITUDE'  => '4.60672', 
                    'BRANCH_LONGITUDE' => '101.081742', 
                    'BRANCH_STATUS'    => 'Y', 

                    'CD_BY_NAME'       => 'ROZAIMI BIN ZAMAHRI',
                    'CD_BY_EMAIL'      => 'rozaimi.zamahri@smebank.com.my',
                    'CD_BY_DATE'       => '2021-01-06 10:10:10',
                    'CD_REMARK'        => 'default remark',
                    'UD_STATUS'        => 'N',
                    'UD_COUNT'         => '0',
                    'UD_BY_EMAIL'      => 'rozaimi.zamahri@smebank.com.my',
                    'UD_BY_DATE'       => '2021-01-06 10:10:10',
                    'UD_REMARK'        => 'default remark'
                ],
                [ 
                    'BRANCH_ID'        => '16' ,
                    'BRANCH_NAME'      => 'KOTA KINABALU ENTERPRISE CENTRE' ,
                    'BRANCH_ADDRESS_1' => 'Lot 24 & 25, Block D, Kepayan Perdana',
                    'BRANCH_ADDRESS_2' => 'Kepayan Perdana Commercial Centre, Jalan Lintas',
                    'BRANCH_ADDRESS_3' => '88200 Kota Kinabalu Sabah', 
                    'BRANCH_LATITUDE'  => '5.935549', 
                    'BRANCH_LONGITUDE' => '116.07285', 
                    'BRANCH_STATUS'    => 'Y', 

                    'CD_BY_NAME'       => 'ROZAIMI BIN ZAMAHRI',
                    'CD_BY_EMAIL'      => 'rozaimi.zamahri@smebank.com.my',
                    'CD_BY_DATE'       => '2021-01-06 10:10:10',
                    'CD_REMARK'        => 'default remark',
                    'UD_STATUS'        => 'N',
                    'UD_COUNT'         => '0',
                    'UD_BY_EMAIL'      => 'rozaimi.zamahri@smebank.com.my',
                    'UD_BY_DATE'       => '2021-01-06 10:10:10',
                    'UD_REMARK'        => 'default remark'
                ],
                [ 
                    'BRANCH_ID'        => '17' ,
                    'BRANCH_NAME'      => 'TAWAU ENTERPRISE CENTRE' ,
                    'BRANCH_ADDRESS_1' => 'TB 193 - 195, Ground Floor',
                    'BRANCH_ADDRESS_2' => 'Wisma DS, Jalan Bakau',
                    'BRANCH_ADDRESS_3' => '91000 Tawau Sabah', 
                    'BRANCH_LATITUDE'  => '4.430659', 
                    'BRANCH_LONGITUDE' => '118.065445', 
                    'BRANCH_STATUS'    => 'Y', 

                    'CD_BY_NAME'       => 'ROZAIMI BIN ZAMAHRI',
                    'CD_BY_EMAIL'      => 'rozaimi.zamahri@smebank.com.my',
                    'CD_BY_DATE'       => '2021-01-06 10:10:10',
                    'CD_REMARK'        => 'default remark',
                    'UD_STATUS'        => 'N',
                    'UD_COUNT'         => '0',
                    'UD_BY_EMAIL'      => 'rozaimi.zamahri@smebank.com.my',
                    'UD_BY_DATE'       => '2021-01-06 10:10:10',
                    'UD_REMARK'        => 'default remark'
                ],
                [ 
                    'BRANCH_ID'        => '18' ,
                    'BRANCH_NAME'      => 'KUCHING ENTERPRISE CENTRE' ,
                    'BRANCH_ADDRESS_1' => 'Lot 514 & 515, Seksyen 6',
                    'BRANCH_ADDRESS_2' => 'Jalan Kulas',
                    'BRANCH_ADDRESS_3' => '94300 Kuching Sarawak', 
                    'BRANCH_LATITUDE'  => '1.554329', 
                    'BRANCH_LONGITUDE' => '110.335902', 
                    'BRANCH_STATUS'    => 'Y', 

                    'CD_BY_NAME'       => 'ROZAIMI BIN ZAMAHRI',
                    'CD_BY_EMAIL'      => 'rozaimi.zamahri@smebank.com.my',
                    'CD_BY_DATE'       => '2021-01-06 10:10:10',
                    'CD_REMARK'        => 'default remark',
                    'UD_STATUS'        => 'N',
                    'UD_COUNT'         => '0',
                    'UD_BY_EMAIL'      => 'rozaimi.zamahri@smebank.com.my',
                    'UD_BY_DATE'       => '2021-01-06 10:10:10',
                    'UD_REMARK'        => 'default remark'
                ],
                [ 
                    'BRANCH_ID'        => '19' ,
                    'BRANCH_NAME'      => 'MIRI ENTERPRISE CENTRE' ,
                    'BRANCH_ADDRESS_1' => 'Lot 1190, Ground Floor,1st Floor & 2nd Floor',
                    'BRANCH_ADDRESS_2' => 'Miri Water Front, Jalan Permaisuri',
                    'BRANCH_ADDRESS_3' => '98000 Miri Sarawak', 
                    'BRANCH_LATITUDE'  => '4.404205', 
                    'BRANCH_LONGITUDE' => '113.991092', 
                    'BRANCH_STATUS'    => 'Y', 

                    'CD_BY_NAME'       => 'ROZAIMI BIN ZAMAHRI',
                    'CD_BY_EMAIL'      => 'rozaimi.zamahri@smebank.com.my',
                    'CD_BY_DATE'       => '2021-01-06 10:10:10',
                    'CD_REMARK'        => 'default remark',
                    'UD_STATUS'        => 'N',
                    'UD_COUNT'         => '0',
                    'UD_BY_EMAIL'      => 'rozaimi.zamahri@smebank.com.my',
                    'UD_BY_DATE'       => '2021-01-06 10:10:10',
                    'UD_REMARK'        => 'default remark'
                ],
                [ 
                    'BRANCH_ID'        => '20' ,
                    'BRANCH_NAME'      => 'BINTULU BUSINESS CENTRE' ,
                    'BRANCH_ADDRESS_1' => 'Lot No 7850, Block 31',
                    'BRANCH_ADDRESS_2' => 'Kemena Land District',
                    'BRANCH_ADDRESS_3' => '97000 Bintulu Sarawak', 
                    'BRANCH_LATITUDE'  => '3.270165', 
                    'BRANCH_LONGITUDE' => '113.258567', 
                    'BRANCH_STATUS'    => 'Y', 

                    'CD_BY_NAME'       => 'ROZAIMI BIN ZAMAHRI',
                    'CD_BY_EMAIL'      => 'rozaimi.zamahri@smebank.com.my',
                    'CD_BY_DATE'       => '2021-01-06 10:10:10',
                    'CD_REMARK'        => 'default remark',
                    'UD_STATUS'        => 'N',
                    'UD_COUNT'         => '0',
                    'UD_BY_EMAIL'      => 'rozaimi.zamahri@smebank.com.my',
                    'UD_BY_DATE'       => '2021-01-06 10:10:10',
                    'UD_REMARK'        => 'default remark'
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
        Schema::dropIfExists('sttf_branches');

        Schema::table('STTF_BRANCHES', function($table) {
            $table->dropColumn('BRANCH_ID'); 
            $table->dropColumn('BRANCH_NAME');
            $table->dropColumn('BRANCH_ADDRESS_1');
            $table->dropColumn('BRANCH_ADDRESS_2');
            $table->dropColumn('BRANCH_ADDRESS_3');  
            $table->dropColumn('BRANCH_LATITUDE');  
            $table->dropColumn('BRANCH_LONGITUDE');   
            $table->dropColumn('BRANCH_STATUS');   

            $table->dropColumn('CD_BY_NAME'); 
            $table->dropColumn('CD_BY_EMAIL'); 
            $table->dropColumn('CD_BY_DATE'); 
            $table->dropColumn('CD_REMARK'); 

            $table->dropColumn('UD_STATUS'); 
            $table->dropColumn('UD_COUNT'); 
            $table->dropColumn('UD_BY_NAME'); 
            $table->dropColumn('UD_BY_EMAIL'); 
            $table->dropColumn('UD_BY_DATE'); 
            $table->dropColumn('UD_REMARK');  
        }); 
    }
}
