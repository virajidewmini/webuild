<!DOCTYPE html>
<html>

<head>
  <title>WEBUILD</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?PHP echo ROOT;?>/css/signup.css">
</head>

<body>
  <div class="wrapper" style="background-image: url('<?PHP echo ROOT;?>/img/back.jpg'); ">
    <div class="inner">
      <div class="image-holder">
        <img src="<?PHP echo ROOT;?>/img/signup.png" alt="image" class="left-pic">
      </div>
      <form action="">
        <h3>Create Account</h3>

        <div class="form-group">
          <input type="text" placeholder="First Name" class="form-control">
          <input type="text" placeholder="Last Name" class="form-control">
        </div>

        <div class="form-group">
          <input class="form-control" type="text" name="" placeholder="NIC">
          <input class="form-control" type="text" name="" placeholder="Contact Number">
        </div>

        <div class="form-wrapper">
            <input type="text" placeholder="Address" class="form-control">
          </div>

        <div class="form-wrapper">
          <input type="text" placeholder="Username" class="form-control">
        </div>

        <div class="form-wrapper">
          <input type="text" placeholder="Email Address" class="form-control">
        </div>

        <div class="form-wrapper">
          <input type="password" placeholder="Password" class="form-control">
        </div>

        <div class="form-wrapper">
          <input type="password" placeholder="Confirm Password" class="form-control">
        </div>

        <button>Register</button>

        <div class="link">
            <p>Already have an account ? <a href="login">Login </a> </p>
        </div>
        

      </form>
      
    </div>
  </div>
</body>

</html>
