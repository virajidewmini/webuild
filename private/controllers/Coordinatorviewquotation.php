<?php

    //coordinator viewquotation controller
    class Coordinatorviewquotation extends Controller{
        
        public function index($msg_id=null){
            if(!Auth::logged_in()){
                $this->redirect('/staff_login');
            }

            $notification=new Notifications();
            $notification->updateQuotaionNotification($msg_id);

            $quotation=new Quotation();
            $project_details=$quotation->getProjectDetails($msg_id)[0];

            //change quotation to Display so the customer can view it
            $UPDATEarray['status']="Dispaly";
            $quotation->update($msg_id,$UPDATEarray);
            //$quotation->changeQuotationStatustoDisplay($msg_id);
           

            $payments=new Payments();

            //for the date of first installment in all projects
            $currentDate = new DateTime();// Get the current date           
            $currentDate->add(new DateInterval('P2W'));// Add two weeks to the current date and save it in the currentdate varaible itself
            $first_installment_date = $currentDate->format('Y-m-d');// Get the resulting date as a string
            
            $row1['date']=$first_installment_date;
            $row1['installement_number']=1;
            $row2['installement_number']=2;
            $row3['installement_number']=3;
            $row4['installement_number']=4;
            $row5['installement_number']=5;
           
            //for next dates the format should be like this
            $first_installment_date_obj = new DateTime($first_installment_date);
            
            $total_days = (int) (($project_details->time_duration_in_months) * 30);
            $project_details->payment_package_id==3;
            
            if($project_details->payment_package_id==1){
                
                $row1['project_id']=$row2['project_id']=$project_details->project_id;
                $row1['status']=$row2['status']="Unpaid";
                $row1['amount']=$project_details->total_amount*40/100;
                $row2['amount']=$project_details->total_amount*60/100;

                $interval = new DateInterval('P'. (int)($total_days/2).'D');
                
                $first_installment_date_obj->add($interval);
                $second_installment_date = $first_installment_date_obj->format('Y-m-d');

                $row2['date']=$second_installment_date;

                $payments->insert($row1);
                $payments->insert($row2);
            }
            elseif($project_details->payment_package_id==2){

                $row1['project_id']=$row2['project_id']=$row3['project_id']=$project_details->project_id;
                $row1['status']=$row2['status']=$row3['status']="Unpaid";
                $row1['amount']=$project_details->total_amount*30/100;
                $row2['amount']=$project_details->total_amount*35/100;
                $row3['amount']=$project_details->total_amount*35/100;

                $interval = new DateInterval('P'. (int)($total_days/3).'D');
                
                $first_installment_date_obj->add($interval);
                $second_installment_date = $first_installment_date_obj->format('Y-m-d');

                $row2['date']=$second_installment_date;


                $second_installment_date_obj = new DateTime($second_installment_date);
                $second_installment_date_obj->add($interval);
                $third_installment_date = $second_installment_date_obj->format('Y-m-d');

                $row3['date']=$third_installment_date;

                $payments->insert($row1);
                $payments->insert($row2);
                $payments->insert($row3);
            }
            elseif($project_details->payment_package_id==3){

                $row1['project_id']=$row2['project_id']=$row3['project_id']=$row4['project_id']=$row5['project_id']=$project_details->project_id;
                $row1['status']=$row2['status']=$row3['status']=$row4['status']=$row5['status']="Unpaid";
                $row1['amount']=$row2['amount']=$row3['amount']=$row4['amount']=$row5['amount']=$project_details->total_amount*20/100;
               
                $interval = new DateInterval('P'. (int)($total_days/5).'D');
                
                $first_installment_date_obj->add($interval);
                $second_installment_date = $first_installment_date_obj->format('Y-m-d');

                $row2['date']=$second_installment_date;


                $second_installment_date_obj = new DateTime($second_installment_date);
                $second_installment_date_obj->add($interval);
                $third_installment_date = $second_installment_date_obj->format('Y-m-d');

                $row3['date']=$third_installment_date;

                
                $third_installment_date_obj = new DateTime($third_installment_date);
                $third_installment_date_obj->add($interval);
                $fourth_installment_date = $third_installment_date_obj->format('Y-m-d');

                $row4['date']=$fourth_installment_date;


                $fourth_installment_date_obj = new DateTime($fourth_installment_date);
                $fourth_installment_date_obj->add($interval);
                $fifth_installment_date = $fourth_installment_date_obj->format('Y-m-d');

                $row5['date']=$fifth_installment_date;
                

                $payments->insert($row1);
                $payments->insert($row2);
                $payments->insert($row3);
                $payments->insert($row4);
                $payments->insert($row5);
            }
        


            $this->redirect("coordinatorprojects/viewpayments/$project_details->project_id/$project_details->payment_package_id");
        }



    }
?>