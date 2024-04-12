<?php

    class Payment extends Controller{
        
        public function index(){
            $order_id = "1234";
            $merchant_id = "1225745";
            
            $price = '1000';
            $currency = "LKR";
            $merchant_secret = "MTI5NTAzNzQyOTI0NDczMzQzNzAyNjc2NjQ1NTIzMzg3MzkyNDM5MQ==";
            $hash = strtoupper(
                md5(
                    $merchant_id .
                    $order_id .
                    number_format($price, 2, '.', '') .
                    $currency .
                    strtoupper(md5($merchant_secret))
                )
            );
            
            $obj = new stdClass();
            $obj->order_id = $order_id;
            $obj->merchant_id = $merchant_id;
           
            $obj->price = $price;
            $obj->currency = $currency;
            $obj->hash = $hash;
            
            echo json_encode($obj);
        }

    }
?>



