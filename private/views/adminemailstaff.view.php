<?php if(Auth::getRole()== 'Admin'): ?>
<?php $this->view('includes/header')?>
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    
    body{
        font-family: sans-serif;
        min-height: 100%;
        color: #555;
    }
    
    .under{
        max-width: 400px;
        margin: 50px auto 0 auto;
        border:  thin solid #e4e4e4;
        padding: 20px;
        box-shadow: 0 5px 5px rgba(0, 0, 0, 0.2);
    }
    
    .under .info{
        font-weight: bold;
        margin-bottom: 30px;
        text-align: center;
        font-size: 24px;
    }
    
    .under label{
        display: block;
        margin-bottom: 10px;
        padding-left: 5px;
    }
    
    .under input, .under textarea{
        display: block;
        width:  100%;
        padding: 10px;	
        margin-bottom: 10px;
        font-size: 16px;
        border:  thin solid #e4e4e4;
        margin-bottom: 30px;
    }
    
    .under input:focus,
    .under select:focus,
    .under textarea
    {
        outline: none;
    }
    
    .under textarea{
        min-height: 80px;
    }
    
    .under input::placeholder{
        font-size: 16px;
    }
    
    .under button{
        background: #e5863d;
        color: white;
        border: none;	
        padding: 15px;
        width:  100%;
        font-size: 16px;
        margin-top: 20px;
        cursor: pointer;
    }
    
    .under button:active{
        background-color: green;
    }
    
    .error{
        margin-top: 30px;
        color: #af0c0c;
    }
    
    .success{
        margin-top: 30px;
        color: #e5863d;
    }




</style>


<?php require("phpmailscript.php"); ?>
<?php 
   if(isset($_POST['submit'])){
      if(empty($_POST['email']) || empty($_POST['subject']) || empty($_POST['message'])){
         $response = "All fields are required";
      }else{
         $response = sendMail($_POST['email'], $_POST['subject'], $_POST['message']);
      }
   }
?>


 
    <form action="" method="post" enctype="multipart/form-data" class="under">
    <div class="info">
        Send an email to <?php print_r($rows['email']);?>
    </div>

    <label>Enter Employee's email</label>
    <input type="email" name="email" value="<?php print_r($rows['email']);?>">

    <label>Enter a subject</label>
    <input type="text" name="subject" value="<?php print_r($rows['subject']);?>">

    <label>Enter your message</label>
    <textarea name="message" ><?php print_r($rows['message']);?></textarea>

    <button type="submit" name="submit">Submit</button>
    

    <?php
      if(@$response == "success"){
         ?>
         <style>
            .sidebar,.content nav{
                filter: blur(5px);
                pointer-events: none;
            }
            .success{
                filter: blur(0px); 
            }
         </style>
            <p class="success">Email send successfully</p>
            <a href="<?=ROOT?>/staff">                
                <input type="button" value="Go Back"class="">
            </a>
         <?php
      }else{
         ?>
            <p class="error"><?php echo @$response; ?></p>
         <?php
      }
   ?>
    </form>
 



<?php $this->view('includes/footer'); ?>
<?php else: ?>
    <?php $this->view('404'); ?>
<?php endif; ?>