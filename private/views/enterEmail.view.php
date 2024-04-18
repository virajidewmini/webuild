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
        <form class="login" action="<?=ROOT?>/Signup" method="post">
                            
            <h1>SIGN UP</h1>
           
            <br><br>
            <input type="email" name="email" placeholder="Email" <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['email']; ?>"  >

            <span class="invalid-feedback"><?php echo $data['email_err']; ?></span>

           <br>
            <button class="btn" name="submit" type="submit">sign up</button><br>
            <div>
                <span class="copyright">&copy;2023</span> 
            </div>  
        </form>
        <div class="register">
            <img src="<?=ROOT; ?>/img/webuildlogo.png">
            <h3>WELCOME TO</h3>
            <h2>WEBUILD</h2>
            <p>Here we are introducing a web-based platform for Making
                Your Dream House a Reality.</p>
            <a href="<?=ROOT;?>/Login"><button>login</button></a>
        </div>  
      </div>
      <script>
         document.addEventListener('DOMContentLoaded', function() {
            const emailInput = document.querySelector('input[type="email"]');
            const emailError = document.getElementById('email-error');
            emailInput.addEventListener('input', function() {
                if (!/@/.test(emailInput.value)) {
                    emailError.textContent = 'Please enter a valid email address';
                    emailError.style.display = 'block';
                } else {
                    emailError.textContent = '';
                    emailError.style.display = 'none';
                }
            });
        });
      </script>
</body>
<script>
     document.getElementById('togglePassword').addEventListener('click', function() {
        var passwordInput = document.querySelector('input[name="pass"]');
        var type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
        passwordInput.setAttribute('type', type);

        this.classList.toggle('fa-eye-slash'); // Toggle the slash on the icon
        this.classList.toggle('fa-eye');   // Toggle the eye icon itself
        });

        document.getElementById('togglePassword2').addEventListener('click', function() {
        var confirmPasswordInput = document.querySelector('input[name="confirm_pass"]');
        var type = confirmPasswordInput.getAttribute('type') === 'password' ? 'text' : 'password';
        confirmPasswordInput.setAttribute('type', type);

        this.classList.toggle('fa-eye-slash'); // Toggle the slash on the icon
        this.classList.toggle('fa-eye');   // Toggle the eye icon itself
    });
 
        // Toggle the eye icon itself
        function goBack() {
            // Use the browser's built-in history object to go back
            window.history.back();
        }
        
    </script>
</html>
                     