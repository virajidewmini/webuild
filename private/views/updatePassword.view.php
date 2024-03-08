<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>WEBUILD</title>
    <!-- <link rel="stylesheet" href="./assets/css/LoginPageCSS.css"> -->
    <link rel="stylesheet" href="<?=ROOT; ?>/css/updatepassowrd.css" />
</head>
<body>
    <div class="container">
        <?php flash('register_success'); ?>
        <form class="login" action="<?=ROOT; ?>/Forgetpassword/updatePassword" method="post">
            <h1>Update your Password</h1>
            <input type="password" name="pass"  placeholder="New password " required><br>
            <span class="error"><?php echo $data['pass_err']; ?></span>

            <input type="password" name="confirm_pass"  placeholder="Confirm the new password " required><br>
            <span class="error"><?php echo $data['confirm_pass_err']; ?></span>
            <button class="btn" name="submit" type="submit">log in</button>
           
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
<script>
   document.getElementById('togglePassword').addEventListener('click', function() {
  var passwordInput = document.querySelector('input[name="pass"]');
  var type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
  passwordInput.setAttribute('type', type);

  this.classList.toggle('fa-eye-slash'); // Toggle the slash on the icon
  this.classList.toggle('fa-eye');   // Toggle the eye icon itself
});
function goBack() {
            // Use the browser's built-in history object to go back
            window.history.back();
        }
</script>