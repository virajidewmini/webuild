<?php if(Auth::getRole()== 'Project Coordinator'): ?>
<?php $this->view('includes/header')?>

     <div  class="table_header" >
          <h1 style="margin-left: 35%;"> Details </h1>
          
     </div>
     
     <div class="form_container">
         
               <fieldset class="FormFieldset" >
                    <legend class="Formlegend">Material Request Details</legend>
            
                    <div class="form-group">
                         <br>
                         
                         <div class="column">                   
                              <label for="firstname">Request ID :</label>
                              <input type="text" id="occupation" name="occupation"value= "<?= $rows["common"]->id;?>">
                         </div>
                         <div class="column">
                              <label for="lastName">Requested Material</label>
                              <input type="text" id="occupation" name="occupation"value= "<?= $rows["common"]->material->material_name;?>">
                         </div>
                         <div class="column">
                              <label for="occupation">Requested Quantity</label>
                              <input type="text" id="occupation" name="occupation" value= "<?= $rows["common"]->requested_quantity;?>">
                         </div>
                         
                    
                    </div>
               </fieldset>


               <br><br>

               
               
                <fieldset class="FormFieldset" >
                        <legend class="Formlegend"> Supplier Details</legend>
            
                        <div class="form-group">
                            <br>
                            
                            <div class="column">                   
                                <label for="firstname">Name :</label>
                                <input type="text" id="occupation" name="occupation"value= "<?= $rows["supplier"]->name;?>">
                            </div>
                            <div class="column">
                                <label for="lastName">Address</label>
                                <input type="text" id="occupation" name="occupation"value= "<?= $rows["supplier"]->address;?>">
                            </div>
                            <div class="column">
                                <label for="lastName">Contact Person's Name</label>
                                <input type="text" id="occupation" name="occupation"value= "<?= $rows["supplier"]->contact_person_name;?>">
                            </div>
                            <div class="column">
                                <label for="occupation">Contact Person's Number</label>
                                <input type="text" id="occupation" name="occupation" value= "<?= $rows["supplier"]->contact_person_number;?>">
                            </div>
                            <div class="column">
                                <label for="lastName">Contact Person's Email</label>
                                <input type="text" id="occupation" name="occupation" value= "<?= $rows["supplier"]->contact_person_email;?>">
                            </div>
                            
                        </div>
                </fieldset>

               

              
               

     


<?php $this->view('includes/footer'); ?>


<?php else: ?>
    <?php $this->view('404'); ?>
<?php endif; ?>
