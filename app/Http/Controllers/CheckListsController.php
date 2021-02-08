<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Check_List_Items;
use DB;

class CheckListsController extends Controller
{
    public function index()
    {
      // $items = Checklists::where('is_completed', false)
      //                     ->orderBy('desrciption', 'desc')
                
      //                     ->get();

    


            $items = DB::table('sttf_checklists')
             ->get();

      return $items->toJson();

    }


    public function getClientDetails()
    {

             $clients = DB::table('sttf_apps')
             ->orderBy('CUST_PERSON_NAME')
             ->get();
          
             $jsonResult = array();

             for($i = 0;$i < count($clients);$i++)
{
  
            $jsonResult[$i]["APP_ID"] = $clients[$i]->APP_ID;
            $jsonResult[$i]["REF_NO"] = $clients[$i]->REF_NO;
            $jsonResult[$i]["STATUS"] = $clients[$i]->STATUS;
            $jsonResult[$i]["COMPANY"] = $clients[$i]->COMPANY;
            $jsonResult[$i]["BRANCH_NAME"] = $clients[$i]->BRANCH_NAME;
            $jsonResult[$i]["CUST_NAME"] = $clients[$i]->CUST_NAME;
            $jsonResult[$i]["CUST_PERSON_NAME"] = $clients[$i]->CUST_PERSON_NAME;
            $jsonResult[$i]["COMP_PERSON_NAME"] = $clients[$i]->COMP_PERSON_NAME;
            $jsonResult[$i]["CUST_EMAIL"] = $clients[$i]->CUST_EMAIL;
            $jsonResult[$i]["CUST_CONTACT_NO"] = $clients[$i]->CUST_CONTACT_NO;
            $jsonResult[$i]["CUST_OFFICE_NO"] = $clients[$i]->CUST_OFFICE_NO;
            $jsonResult[$i]["CUST_SECTOR"] = $clients[$i]->CUST_SECTOR;
            $jsonResult[$i]["CUST_ADDRESS"] = $clients[$i]->CUST_ADDRESS;
            $jsonResult[$i]["CHECK_LISTS"] = $CHECKLIST = DB::table('STTF_DETAILS')->where([
              ['APP_ID', '=', $clients[$i]->APP_ID],
              ])->get() ;
                                         
          }

          return   $jsonResult;
}


    

    

    public function getClientById(Request $request, $Id)
    {

      $clients = DB::table('sttf_apps')
      ->where('APP_ID','=',$Id)
     
      ->get();
   
      $jsonResult = array();

      for($i = 0;$i < count($clients);$i++)
{

     $jsonResult[$i]["APP_ID"] = $clients[$i]->APP_ID;
     $jsonResult[$i]["REF_NO"] = $clients[$i]->REF_NO;
     $jsonResult[$i]["STATUS"] = $clients[$i]->STATUS;
     $jsonResult[$i]["COMPANY"] = $clients[$i]->COMPANY;
     $jsonResult[$i]["BRANCH_NAME"] = $clients[$i]->BRANCH_NAME;
     $jsonResult[$i]["CUST_NAME"] = $clients[$i]->CUST_NAME;
     $jsonResult[$i]["CUST_PERSON_NAME"] = $clients[$i]->CUST_PERSON_NAME;
     $jsonResult[$i]["COMP_PERSON_NAME"] = $clients[$i]->COMP_PERSON_NAME;
     $jsonResult[$i]["CUST_EMAIL"] = $clients[$i]->CUST_EMAIL;
     $jsonResult[$i]["CUST_CONTACT_NO"] = $clients[$i]->CUST_CONTACT_NO;
     $jsonResult[$i]["CUST_OFFICE_NO"] = $clients[$i]->CUST_OFFICE_NO;
     $jsonResult[$i]["CUST_SECTOR"] = $clients[$i]->CUST_SECTOR;
     $jsonResult[$i]["CUST_ADDRESS"] = $clients[$i]->CUST_ADDRESS;
     $jsonResult[$i]["CHECK_LISTS"] = $CHECKLIST = DB::table('STTF_DETAILS')->where([
       ['APP_ID', '=', $clients[$i]->APP_ID],
       ])->get() ;
                                  
   }

   return   $jsonResult;

    }

    public function   getStffDetailById(Request $request, $Id)
    {

             $items = DB::table('sttf_details')
            ->where('APP_ID','=',$Id)
            ->get()
          ;
  
      return $items->toJson();

    }

    public function  AddCustomerProfile(Request $request){

      $id = DB::table('sttf_apps')->insertGetId(
        [ "CUST_NAME"       => $request->get('CUST_NAME'),
        "CUST_PERSON_NAME"     => $request->get('CUST_PERSON_NAME'),
        "CUST_EMAIL"  =>  $request->get('CUST_EMAIL'),
        "CUST_CONTACT_NO"  =>  $request->get('CUST_CONTACT_NO'),
        "CUST_OFFICE_NO"  =>  $request->get('CUST_OFFICE_NO'),
        "CUST_SECTOR"  =>  $request->get('CUST_SECTOR'),
        "CUST_ADDRESS"  =>  $request->get('CUST_ADDRESS'),
        "COMP_PERSON_NAME"  =>  $request->get('COMP_PERSON_NAME'),
        "COMP_EMAIL"  =>  $request->get('COMP_EMAIL'),
        "COMP_CONTACT_NO" =>  $request->get('COMP_CONTACT_NO'),
        "SME_CLIENT" =>  $request->get('SME_CLIENT'),
        "SME_SECTOR_TM"  =>  $request->get('SME_SECTOR_TM'),
        "SME_REV" =>  $request->get('SME_REV'),
        "SME_REMOVE" =>  $request->get('SME_REMOVE'),
        "SME_AGM" =>  $request->get('SME_AGM'),
        "SME_BANK_ADDRESS" =>  $request->get('SME_BANK_ADDRESS')]
    );

  if($id > 0){
    $clients = DB::table('sttf_apps')
    ->where('APP_ID','=',$id)
   
    ->get();
 
    $jsonResult = array();

    for($i = 0;$i < count($clients);$i++)
{

   $jsonResult[$i]["APP_ID"] = $clients[$i]->APP_ID;
   $jsonResult[$i]["REF_NO"] = $clients[$i]->REF_NO;
   $jsonResult[$i]["STATUS"] = $clients[$i]->STATUS;
   $jsonResult[$i]["COMPANY"] = $clients[$i]->COMPANY;
   $jsonResult[$i]["BRANCH_NAME"] = $clients[$i]->BRANCH_NAME;
   $jsonResult[$i]["CUST_NAME"] = $clients[$i]->CUST_NAME;
   $jsonResult[$i]["CUST_PERSON_NAME"] = $clients[$i]->CUST_PERSON_NAME;
   $jsonResult[$i]["COMP_PERSON_NAME"] = $clients[$i]->COMP_PERSON_NAME;
   $jsonResult[$i]["CUST_EMAIL"] = $clients[$i]->CUST_EMAIL;
   $jsonResult[$i]["CUST_CONTACT_NO"] = $clients[$i]->CUST_CONTACT_NO;
   $jsonResult[$i]["CUST_OFFICE_NO"] = $clients[$i]->CUST_OFFICE_NO;
   $jsonResult[$i]["CUST_SECTOR"] = $clients[$i]->CUST_SECTOR;
   $jsonResult[$i]["CUST_ADDRESS"] = $clients[$i]->CUST_ADDRESS;
   $jsonResult[$i]["CHECK_LISTS"] = $CHECKLIST = DB::table('STTF_DETAILS')->where([
     ['APP_ID', '=', $clients[$i]->APP_ID],
     ])->get() ;
                                
 }

 return   $jsonResult;
  }

    }

   public function  editCustProfile(Request $request)
   {
   
    $APP_ID  = $request->get('APP_ID'); 

    $details = DB::table('sttf_apps')
                ->where('APP_ID',$APP_ID)
                ->update(
                            [   
                                "CUST_NAME"       => $request->get('CUST_NAME'),
                                "CUST_PERSON_NAME"     => $request->get('CUST_PERSON_NAME'),
                                "CUST_EMAIL"  =>  $request->get('CUST_EMAIL'),
                                "CUST_CONTACT_NO"  =>  $request->get('CUST_CONTACT_NO'),
                                "CUST_OFFICE_NO"  =>  $request->get('CUST_OFFICE_NO'),
                                "CUST_SECTOR"  =>  $request->get('CUST_SECTOR'),
                                "CUST_ADDRESS"  =>  $request->get('CUST_ADDRESS'),
                                "COMP_PERSON_NAME"  =>  $request->get('COMP_PERSON_NAME'),
                                "COMP_EMAIL"  =>  $request->get('COMP_EMAIL'),
                                "COMP_CONTACT_NO" =>  $request->get('COMP_CONTACT_NO'),
                                "SME_CLIENT" =>  $request->get('SME_CLIENT'),
                                "SME_SECTOR_TM"  =>  $request->get('SME_SECTOR_TM'),
                                "SME_REV" =>  $request->get('SME_REV'),
                                "SME_REMOVE" =>  $request->get('SME_REMOVE'),
                                "SME_AGM" =>  $request->get('SME_AGM'),
                                "SME_BANK_ADDRESS" =>  $request->get('SME_BANK_ADDRESS'),

                            ]
                          ); 

                          $items = DB::table('sttf_apps')
                          ->where('APP_ID','=',$APP_ID)
                          ->get() ;
                       
                
                    return $items->toJson();
                       
   }
  
    
    public function editData(Request $request){

      // $staff_no          = htmlentities($request->session()->get('staff_no')); 
      // $staff_name        = htmlentities($request->session()->get('staff_name'));
      // $email             = htmlentities($request->session()->get('email'));

      // $detail_id         = htmlentities($request->get('detail_id')); 
      // $check_mark           = htmlentities( $request->get('checklist_mark')); 

      //  $check_marks = $request->get('checklist_mark') ;
      //   $detail_ids = $request->get('detail_id') ;
          $results = $request->get('checklist_results');

        foreach ( $results  as $result){
          
          $sttf_detail_update = DB::table('sttf_details')
                  ->where('DETAIL_ID', $result['detail_id'])
                  ->update(['CHECKLIST_MARK' => $result['isChecked'] ,'CHECKLIST_REMARK' => $result['remark'] ]);
      }

      if($sttf_detail_update){
        return $request->get('checklist_results') ;
      }
     else{
     
         $errMsg = 'error,There seems some error in updating checklist. Please try again';
         return  $errMsg ;
    
     }

      // $checklist_mark    = htmlentities($request->get('checklist_mark')); 

        // $checkList = $request->get('data'); 
      // $checklist_remark  = htmlentities($request->get('checklist_remark')); 

      // $details = DB::table('STTF_DETAILS')
      //         ->where('APP_ID',app_id)
      //         ->update(
      //                     [   
      //                         "CHECKLIST_MARK"       => $checkList,
      //                         // "CHECKLIST_REMARK"     => $checklist_remark
      //                     ]
      // ); 

     

      // Count All 
      //     $alls = DB::connection('oracle')
      //         ->table('STTF_DETAILS') 
      //         ->select(
      //                     DB::raw(
      //                                 "
      //                                     COUNT(*) AS TOTAL_COUNT
      //                                 "
      //                     )
      //                 )  
      //         ->where('STTF_DETAILS.APP_ID','=',$app_id) 
      //         ->get()
      //         ->toArray();  
      //     $i                  = 0; 
      //     $all_count    = '';  
      //     foreach ($alls as $all) { 
      //         if($i==0){  
      //             $all_count    = $all->total_count; 
      //         }
      //         else {  
      //             $all_count    = $all_count.','.$all->total_count; 
      //         }
      //         $i++;
      //     } 
      // // Count All

      // // Count Yes (Who completed the task) 
      //     $yess = DB::connection('oracle')
      //         ->table('STTF_DETAILS') 
      //         ->select(
      //                     DB::raw(
      //                                 "
      //                                     COUNT(*) AS TOTAL_COUNT
      //                                 "
      //                     )
      //                 )  
      //         ->where('STTF_DETAILS.APP_ID','=',$app_id)
      //         ->where('STTF_DETAILS.CHECKLIST_MARK','=','Y') 
      //         ->get()
      //         ->toArray(); 
      //     $j                  = 0; 
      //     $count_answered    = '';  
      //     foreach ($yess as $yes) { 
      //         if($j==0){  
      //             $count_answered    = $yes->total_count; 
      //         }
      //         else {  
      //             $count_answered    = $count_answered.','.$yes->total_count; 
      //         }
      //         $j++;
      //     } 
      // Count All 

      // $percentage = ($count_answered / $all_count) * 100; 
      // if($percentage >= 100){
          
      //     $apps = DB::connection('oracle')->table('STTF_APPS')
      //             ->where('ID',$app_id)
      //             ->update(
      //                         [   
      //                             "STATUS"                => 'COMPLETED', 
      //                             "SUBMITTED_BY_NAME"     => strtoupper($staff_name),
      //                             "SUBMITTED_BY_EMAIL"    => $email,
      //                             "SUBMITTED_BY_DATE"     => DB::raw("SYSDATE"),
      //                             "SUBMITTED_REMARK"      => "Checklist completed by RM using form via system"
      //                         ]
      //     ); 

      //     // Find Admins 
      //         $pools_emails = DB::connection('oracle')
      //             ->table('STTF_USERS') 
      //             ->select(
      //                         DB::raw(
      //                                     "
      //                                         STTF_USERS.*
      //                                     "
      //                         )
      //                     ) 
      //             ->where('STTF_USERS.ACTIVE','=','Y')
      //             ->get()
      //             ->toArray();  
      //         $i                  = 0; 
      //         $email_address    = '';   
      //         foreach ($pools_emails as $pools_email) { 
      //             if($i==0){  
      //                 $email_address    = $pools_email->email_address; 
      //             }
      //             else{  
      //                 $email_address    = $email_address.','.$pools_email->email_address; 
      //             }
      //                 $i++;
      //         } 
      //     // Find Admins

      //     // Find Infos 
      //         $pools_infos = DB::connection('oracle')
      //             ->table('STTF_APPS') 
      //             ->select(
      //                         DB::raw(
      //                                     "
      //                                         STTF_APPS.ID,
      //                                         STTF_APPS.CUST_NAME
      //                                     "
      //                         )
      //                     ) 
      //             ->where('STTF_APPS.ID','=',$app_id)
      //             ->get()
      //             ->toArray();  
      //         $i                  = 0; 
      //         $cust_name    = '';   
      //         foreach ($pools_infos as $pools_info) { 
      //             if($i==0){  
      //                 $cust_name    = $pools_info->cust_name; 
      //             }
      //             else{  
      //                 $cust_name    = $cust_name.','.$pools_info->cust_name; 
      //             }
      //                 $i++;
      //         } 
      //     // Find Infos
          
      //     // Mail
      //         $subject = 'EZXcess - Checklist Completed';
      //         $message = "";
      //         $message = "
      //         <html>
      //             <head>
      //                 <title>".$subject."</title>
      //             </head>
      //             <body>
      //                 <p>Dear Admins,</p> 

      //                 <p><strong>".$staff_name."</strong> has completed his/her checklists for <strong><u>".$cust_name."</u></strong>. </p> 
                      
      //                 <p>For your action and you may login into <a href='".url("/home")."'>EZXcess</a> to view the request.</p>
      //                 <p>Any query on the usage of EZXcess may be submitted via <a href='http://cbs-helpdesk.smebank.net'>e-Helpdesk</a>.</p>
      //                 <p>Regards.</p>
      //             </body>
      //         </html>
      //         ";
      //         $headers  = 'MIME-Version: 1.0' . "\r\n";
      //         $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
      //         $headers .= "From: EZXcess <donotreply@smebank.com.my>";
      //         $headers .= "\r\n" . "Cc: ".$email."";
      //         $headers .= "\r\n" . "Bcc: rozaimi.zamahri@smebank.com.my";
      //         mail($email_address, $subject, $message, $headers, "-f donotreply@smebank.com.my");
      //     // Mail

      //     return back()->with("msg_completed", "All checklist updated."); 

      // } else {

      //     $apps = DB::connection('oracle')->table('STTF_APPS')
      //             ->where('ID',$app_id)
      //             ->update(
      //                         [   
      //                             "STATUS"                => 'PENDING', 
      //                             "SUBMITTED_BY_NAME"     => strtoupper($staff_name),
      //                             "SUBMITTED_BY_EMAIL"    => $email,
      //                             "SUBMITTED_BY_DATE"     => DB::raw("SYSDATE"),
      //                             "SUBMITTED_REMARK"      => "Checklist changed back to pending by RM using form via system"
      //                         ]
      //     ); 

      //     return back()->with("msg_updated", "Checklist updated."); 
      // }        
      }
}
