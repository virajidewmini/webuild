<!DOCTYPE html>
<html>

<head>
  <title>WEBUILD</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?PHP echo ROOT;?>/css/signup.css">
</head>

<body style="background-image: url('<?PHP echo ROOT;?>/img/back.jpeg');">



      <!-- validation -->

  <div class="wrapper" >
    <div class="inner">
      <div class="image-holder">
        <img src="<?PHP echo ROOT;?>/img/signup.jpeg" alt="image" class="left-pic">
      </div>

      <form method="post">
        <h3>Create Account</h3>


      <!-- error dispaly -->
      <div style="color: #ff0000; /* Red color for error messages */font-size: 14px;">
      <?php if(count($errors) >0):?>
        <strong>Errors:</strong>
      <?php foreach($errors as $error):?>
        <br><?=$error?>
      <?php endforeach; ?>
      <?php endif;?>
      </div>
      



        <div class="form-group">
          <input name="firstname" value= "<?= get_var('firstname');?>" type="text" placeholder="First Name" class="form-control">
          <input name="lastname" value="<?= get_var('lastname');?>" type="text" placeholder="Last Name" class="form-control">

        </div>

        <div class="form-group">
          <input name="nic" value="<?= get_var('nic');?>" class="form-control" type="text" name="" placeholder="NIC">
          <input name="contactnumber" value="<?=get_var('contactnumber');?>" class="form-control" type="text" name="" placeholder="Contact Number">
        </div>

        <div class="form-wrapper">
            <input name="address" value="<?= get_var('address');?>" type="text" placeholder="Address" class="form-control">
        </div>
        <div class="form-wrapper">
          <select name="gender" class="form-control" type="text" placeholder="Gender">
            <option <?= get_select2('gender','');?> value="">Gender</option>
            <option <?= get_select2('gender','male');?> value="male">Male</option>
            <option <?= get_select2('gender','female');?> value="female">Female</option>
            <option <?= get_select2('gender','other');?>value="other">Other</option>
          </select>
        </div>
        <div class="form-wrapper">
          <input name="email" value="<?= get_var('email');?>" type="text" placeholder="Email Address" class="form-control">
          <!-- <span class="form-invalid">     </span> -->
        </div>

        <div class="form-wrapper">
          <input name="password" value="<?= get_var('password');?>" type="password" placeholder="Password" class="form-control">
        </div>

        <div class="form-wrapper">
          <input name="confirmpassword" value="<?= get_var('confirmpassword');?>" type="password" placeholder="Confirm Password" class="form-control">
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

