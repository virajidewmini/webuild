<!DOCTYPE html>
<html>

<head>
  <title>WEBUILD</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?PHP echo ROOT;?>/css/signup.css">
</head>

<body style="background-image: url('<?PHP echo ROOT;?>/img/back.jpeg');">



      <!-- validation -->

      <?php
        print_r($errors);
      
      
      ?>


  <div class="wrapper"  ">
    <div class="inner">
      <div class="image-holder">
        <img src="<?PHP echo ROOT;?>/img/signup.jpeg" alt="image" class="left-pic">
      </div>

      <form method="post">
        <h3>Create Account</h3>

        <div class="form-group">
          <input name="firstname" type="text" placeholder="First Name" class="form-control">
          <input name="lastname" type="text" placeholder="Last Name" class="form-control">
        </div>

        <div class="form-group">
          <input name="nic" class="form-control" type="text" name="" placeholder="NIC">
          <input name="contactnumber" class="form-control" type="text" name="" placeholder="Contact Number">
        </div>

        <div class="form-wrapper">
            <input name="address" type="text" placeholder="Address" class="form-control">
          </div>

        <div class="form-wrapper">
          <input name="username" type="text" placeholder="Username" class="form-control">
        </div>

        <div class="form-wrapper">
          <input name="email" type="text" placeholder="Email Address" class="form-control">
        </div>

        <div class="form-wrapper">
          <input name="password" type="password" placeholder="Password" class="form-control">
        </div>

        <div class="form-wrapper">
          <input name="confirmpassword" type="password" placeholder="Confirm Password" class="form-control">
        </div>

        <button type="submit">Register</button>

        <div class="link">
            <p>Already have an account ? <a href="login">Login </a> </p>
        </div>
        

      </form>
      
    </div>
  </div>
</body>

</html>
