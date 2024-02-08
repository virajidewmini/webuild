<?php

class Message extends Model{
    
    
    private $apiUrl = 'http://cloud.websms.lk/smsAPI';

    
    public function callApiWithQueryParams($queryParams) {

        $queryParams['sendsms'] = '';
        $queryParams['apikey'] = 'ufow2W56lro65sRyy2K8zxV2Bta38WZ3';
        $queryParams['apitoken'] = 'Ap2F1704507255';
        $queryParams['type'] = 'sms';
        $queryParams['from'] = 'DEMO_SMS';

        $queryString = http_build_query($queryParams);
    
        
        $ch = curl_init();

        
        curl_setopt($ch, CURLOPT_URL, $this->apiUrl . '?' . $queryString);
        curl_setopt($ch, CURLOPT_POST, 1);
        

        
        $response = curl_exec($ch);

       
        

        
        curl_close($ch);

    }

    
    

}
?>