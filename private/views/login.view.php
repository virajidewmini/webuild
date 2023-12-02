<!DOCTYPE html>
<!-- Coding By CodingNepal - youtube.com/codingnepal -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>WEBUILD</title>
    <link rel="stylesheet" href="<?=ROOT;?>/css/login.css">
  </head>
  <body>
  <div class="wrapper" style="background-image: url('<?PHP echo ROOT;?>/img/login.jpeg'); ">
    <div class="center" >
      
      <h1>Login</h1>
      <form method="post">
        
      <!-- error dispaly -->
      <?php if(count($errors) >0):?>
        <strong>Errors:</strong>
      <?php foreach($errors as $error):?>
        <br><?=$error?>
      <?php endforeach; ?>
      <?php endif;?>


      
        <div class="txt_field">
          <input type="text" name="username" value= "<?= get_var('username');?>" required>
          <!-- <span></span> -->
          <label>Username</label>
        </div>
        <div class="txt_field">
          <input type="password" name="password" value= "<?= get_var('password');?>" required>
          <span></span>
          <label>Password</label>
        </div>
        <div class="pass">Forgot Password?</div>
        <input type="submit" value="Login">
        <div class="signup_link">
         Haven't registered yet ? <a href="signup">Signup</a>
        </div>
      </form>
    </div>
</div>
  </body>
</html>
