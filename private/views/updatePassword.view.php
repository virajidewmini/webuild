<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WEBUILD</title>
    <link rel="stylesheet" href="<?=ROOT;?>/css/enterEmail.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container">
        
        <form class="login" action="<?=ROOT; ?>/Forgetpassword/updatePassword" method="post">
            <h1>Update your Password</h1>
            <br><br>
              
            
            <input name="password" value="<?= get_var('password');?>" type="password" placeholder="Password" class="form-control">
            <span class="invalid-feedback"><?php if (array_key_exists('password', $errors)) {echo ($errors['password']); }?></span>
            
            <input name="confirmpassword" value="<?= get_var('confirmpassword');?>" type="password" placeholder="Confirm Password" class="form-control">
            <span class="invalid-feedback"><?php if (array_key_exists('confirmpassword', $errors)) {echo ($errors['confirmpassword']); }?></span>
            
            <button class="btn" type="submit">log in</button>

            <div>
                <span class="copyright">&copy;2023</span> 
            </div>
        
        </form>


        <div class="register">
            <img src="<?=ROOT; ?>/img/webuildlogo.jpeg">
                <h3>WELCOME TO</h3>
                <h2>WEBUILD</h2>
                <p>Here we are introducing a web-based platform for Making
                    Your Dream House a Reality.</p>
            <a href=""> <button onclick="goBack()" class="submit">  Cancel </button></a>
        </div>   
      </div>
      
</body>

</html>