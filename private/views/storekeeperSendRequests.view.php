<?php $this->view('includes/header')?>
    <div class="form_container">
        <form method="post">

            <div class="input-box">
              <label for="inputEmail">Material Name</label>
              <input type="text" placeholder="Marerial Name" id="inputUserName">
              <label for="inputEmail">Material Code</label>
              <input type="text" placeholder="Marerial Code" id="inputUserName">
              <label for="inputEmail">Remain Quntity</label>
              <input type="text" placeholder="Remain Quntity" id="inputUserName">
              <label for="inputEmail">Required Quntity</label>
              <input type="text" placeholder="Required Quntity" id="inputUserName"> 
            </div>


              <div class="input-box">
                <input type="Submit" value="Send"> 

    
              </div>
              <!-- <div class="returnlogin">
                <a rel="noopener noreferrer" href="#">Return to login</a>  
              </div> -->
          </form>
    </div>
<?php $this->view('includes/footer'); ?>