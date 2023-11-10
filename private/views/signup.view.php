<?php $this->view('includes/header')?>


     <div style="width:100% ; max-width:310px;">

        <div class ="form-wrapper">
            <div class="inner">
                <div class="image-holder">
                    <img src="<?=ROOT?>/img/signup.webp" alt="">
                </div>
                    <h2 class="text-center">WEBUILD</h2>
                    <img src="<?=ROOT?>/img/webuildlogo.jpeg" alt="">
                <form action="">
                    <h3>Create Account</h3>
                    <div class="form-group">
                        <input class="form-control" type="text" name="" placeholder="First Name" autofocus>
                        <input class="form-control" type="text" name="" placeholder="Last Name">
                    </div>
                    
                    <div class="form-wrapper">
                        <input class="form-control" type="text" name="" placeholder="NIC">
                    </div>
                    
                    <div class="form-wrapper">
                        <input class="form-control" type="text" name="" placeholder="Contact Number">
                    </div>

                    <div class="form-wrapper">
                        <input class="form-control" type="text" name="" placeholder="Username">
                    </div>

                    <div class="form-wrapper">
                        <input class="form-control" type="email" name="" placeholder="Emali" autofocus>
                    </div>

                    <div class="form-wrapper">  
                        <input class="form-control" type="text" name="" placeholder="Password">
                    </div>

                    <div class="form-wrapper">
                        <input class="form-control" type="text" name="" placeholder="Confirm Password" autofocus>
                    </div>
                </form>
                    <br>  
                    
                    <button class="">Register</button>
                    <br>
                    <p>Already have an account ? <a href="">Login </a> </p>
            </div>
        </div>
    
    </div>
     

<?php $this->view('includes/footer'); ?>

