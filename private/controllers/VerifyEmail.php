<?php

    //beacuase of redirect function
    class VerifyEmail extends Controller{

        public function index(){
            // Initialize $userId
        
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                // sanitize post data
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        
                if (isset($_SESSION['otp']) && isset($_SESSION['time'])) {
                    $oldOtp = $_SESSION['otp'];
                    // $userEmail = $_SESSION['user_email'];
        
        
                        $timestamp = $_SERVER["REQUEST_TIME"];
                        $remainingTime = isset($_SESSION['remaining_time']) ? $_SESSION['remaining_time'] : 60;
        
                        if (($timestamp - $_SESSION['time']) > $remainingTime) {  // 60 seconds for 1 minute
                            $data = [
                              
                                'otp_err' => "OTP expired. Please try again.",
                                'remaining_time' => 0
                            ];
                            $this->view('verifyEmail', $data);
                            exit; // Ensure no further processing after redirection
                        } else {
                            $data = [
                                // 'user_id' => $userId,
                                'otp' => trim($_POST['otp']),
                                'otp_err' => '',
                                'remaining_time' => $remainingTime - ($timestamp - $_SESSION['time'])
                            ];
        
                            // validate otp
                            if (empty($data['otp']) || $data['otp'] != $oldOtp) {
                                $data['otp_err'] = 'Incorrect OTP';
                                $this->view('verifyEmail', $data);
                                exit; // Ensure no further processing after redirection
                            }
        
                            // make sure errors are empty
                            if (empty($data['otp_err'])) {
                                // validate
                                if ($data['otp'] == $oldOtp) {
                                    // if($this->userModel->verifyemailCustomer($userId) && $this->userModel->verifyemailUsers($userId) ){
                                        echo '<script>';
                                        echo 'setTimeout(function() { alert("OTP is correct!"); redirectToLogin(); }, 100);'; // Delayed alert
                                        echo 'function redirectToLogin() {';
                                        echo '    window.location.href = "' . ROOT . '/Signup/registerUser"; ';  
                                        echo '}';
                                        echo '</script>';
                                        exit;
                                  
                                }
                            }
                        }
                    
                }
            } else {
              
        
                $remainingTime = isset($_SESSION['remaining_time']) ? $_SESSION['remaining_time'] : 60;
        
                $data = [
                    // 'user_id' => $userId,
                    'otp' => '',
                    'otp_err' => '',
                    'remaining_time' => $remainingTime,
                ];
        
                $this->view('verifyEmail', $data);
            }
        }


    

}

