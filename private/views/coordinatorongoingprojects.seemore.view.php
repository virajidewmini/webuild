<?php if(Auth::getRole()== 'Project Coordinator'): ?>
<?php $this->view('includes/header')?>

<!-- <pre><?php print_r($rows["model_details"]);?></pre> -->
     <div  class="table_header" >
          
          
     </div>
     <div style="text-align:center;"><h1> Details of the Project </h1></div>
     <div style="text-align:center;"><h3>Project ID : <?= $rows["common"]->id;?> </h3></div>
     
     <div class="form_container">
         
               <fieldset class="FormFieldset" >
                    <legend class="Formlegend"> Customer Details</legend>
            
                    <div class="form-group">
                         <br>
                         
                         <div class="column">                   
                              <label for="firstname">First Name</label>
                              <input type="text" readonly id="occupation" name="occupation"value= "<?= $rows["common"]->firstname;?>">
                         </div>
                         <div class="column">
                              <label for="lastName">Last Name</label>
                              <input type="text" readonly id="occupation" name="occupation"value= "<?= $rows["common"]->lastname;?>">
                         </div>
                         <div class="column">
                              <label for="occupation">Occupation</label>
                              <input type="text" readonly id="occupation" name="occupation" value= "<?= $rows["common"]->occupation;?>">
                         </div>
                         <div class="column">
                              <label for="lastName">Monthly Salary(LKR)</label>
                              <input type="text" readonly id="occupation" name="occupation" value= "<?= $rows["common"]->salary;?>">

                         </div>
                         <div class="column">
                              <label for="occupation">Contact Number</label>
                              <input type="text" readonly id="contactnumber" name="contactnumber" value= "<?= $rows["common"]->contactnumber;?>">
                         </div>
                         <div class="column">
                              <label for="lastName">Email</label>
                              <input type="text" readonly id="occupation" name="occupation" value= "<?= $rows["common"]->email;?>">
                         </div>
                    
                    </div>
               </fieldset>


               <br><br>

               
              
                    <fieldset class="FormFieldset" >
                         <legend class="Formlegend"> Land Details</legend>
               
                         <div class="form-group">
                              <br>
                              
                              <div class="column">                   
                                   <label for="firstname">Land ID</label>
                                   <input type="text" readonly id="occupation" name="occupation"value= "<?= $rows["customer"]->id;?>">
                              </div>
                              
                              <div class="column">
                                   <label for="lastName">Street</label>
                                   <input type="text" readonly id="occupation" name="occupation"value= "<?= $rows["customer"]->ul_street;?>">
                              </div>
                              <div class="column">
                                   <label for="occupation">Town</label>
                                   <input type="text" readonly id="occupation" name="occupation" value= "<?= $rows["customer"]->ul_town;?>">
                              </div>
                              <div class="column">
                                   <label for="lastName">District</label>
                                   <input type="text" readonly id="occupation" name="occupation" value= "<?= $rows["customer"]->ul_district;?>">

                              </div>
                              <div class="column">
                                   <label for="occupation">Area (In perch)</label>
                                   <input type="text" readonly id="contactnumber" name="contactnumber" value= "<?= $rows["customer"]->ul_area;?>">
                              </div>
                              
                              
                             
                              <div class="column">
                                   <label for="locationLink">Block Plan</label>
                                   <a href="#" target="#">
                                   <button class="action-button">Block Plan</button>
                                   </a>
                              </div>
                         
                              <div class="column">
                                   <label for="locationLink">Photograph</label>
                                   <a href="#" target="#">
                                   <button class="action-button">Image</button>
                                   </a>
                              </div>
                              
                         </div>
                    </fieldset>

               
               

               <br><br>

               <fieldset class="FormFieldset" >
                    <legend class="Formlegend"> Project Manager Details</legend>
                         <br>

                         <?php if(empty($rows["common"]->manager_id)): ?>
                              <h4>No project manager has been assigned to this request yet.</h4>
                              <br>
                              <a href="<?=ROOT?>/coordinatorrequests">
                                   <button class="add-button"> Add</button>
                              </a>
                              <br><br>
                         <?php else : ?>                                
                              <div class="form-group">
                                   <br>
                         
                                   <div class="column">                   
                                        <label for="firstname">First Name</label>
                                        <input type="text" readonly id="occupation" name="occupation"value= "<?= $rows["manager_details"]->firstname;?>">
                                   </div>
                                   <div class="column">
                                        <label for="lastName">Last Name</label>
                                        <input type="text" readonly id="occupation" name="occupation"value= "<?= $rows["manager_details"]->lastname;?>">
                                   </div>                                  
                                   <div class="column">
                                        <label for="lastName">Email</label>
                                        <input type="text" readonly id="occupation" name="occupation" value= "<?= $rows["manager_details"]->email;?>">
                                   </div>
                                   <div class="column">
                                        <label for="lastName">Contact Number</label>
                                        <input type="text" readonly id="occupation" name="occupation"value= "<?= $rows["manager_details"]->contactnumber;?>">
                                   </div>
                    
                              </div>
                         <?php endif;?>
            
                    
               </fieldset>
               <fieldset style="padding:10px;" class="FormFieldset" >
                    <legend class="Formlegend"> Project Supervisor Details</legend>
                         <br>

                                                        
                              <div class="form-group">
                                   <br>
                         
                                   <div class="column">                   
                                        <label for="firstname">First Name</label>
                                        <input type="text" readonly id="occupation" name="occupation"value= "<?= $rows["supervisor_details"]->staff->firstname;?>">
                                   </div>
                                   <div class="column">
                                        <label for="lastName">Last Name</label>
                                        <input type="text" readonly id="occupation" name="occupation"value= "<?= $rows["supervisor_details"]->staff->lastname;?>">
                                   </div>                                  
                                   <div class="column">
                                        <label for="lastName">Email</label>
                                        <input type="text" readonly id="occupation" name="occupation" value= "<?= $rows["supervisor_details"]->staff->email;?>">
                                   </div>
                                   <div class="column">
                                        <label for="lastName">Contact Number</label>
                                        <input type="text" readonly id="occupation" name="occupation"value= "<?= $rows["supervisor_details"]->staff->contactnumber;?>">
                                   </div>
                    
                              </div>
                        
            
                    
               </fieldset>
               
               <br><br>

               <fieldset class="FormFieldset" >
                    <legend class="Formlegend"> Modification Details</legend>
                    <br>

                         <?php if(empty($rows["common"]->modification_id)): ?>
                              <h4>No modifications have been applied to this request.</h4>
                              <br><br>
                              
                         <?php else : ?>                           
                              <fieldset class="FormFieldset" >
                                   <legend class="Formlegend"> Kitchen Modification Details</legend>
                                   <br>
                                        <?php if($rows["kitchen_modification_details"]):?>
                                             
                                             <div class="form-group">
                                                  <?php if($rows["kitchen_modification_details"][0]->tile_id):?>
                                                  <div class="column">
                                                       <label for="lastName">Tile</label>
                                                       <input type="text" readonly id="occupation" name="occupation" value= "<?= $rows["kitchen_modification_details"][0]->tile->name;?>">
                                                  </div>
                                                  <?php endif;?>
                                                  <?php if($rows["kitchen_modification_details"][0]->paint_id):?>
                                                  <div class="column">
                                                       <label for="lastName">Paint</label>
                                                       <input type="text" readonly id="occupation" name="occupation"value= "<?= $rows["kitchen_modification_details"][0]->paint->name;?>">
                                                  </div>
                                                  <?php endif;?>
                                             </div>
                                             
                                             
                                        <?php else : ?>                           
                                             <h4>No modifications have been applied to kitchen.</h4>
                                             <br><br>
                                        <?php endif;?>
                         
                                   
                              </fieldset>
                              <br>
                              <fieldset class="FormFieldset" >
                                   <legend class="Formlegend"> Dining Room Modification Details</legend>
                                   <br>
                                        <?php if($rows["dining_modification_details"]):?>
                                             
                                             <div class="form-group">
                                                  <?php if($rows["dining_modification_details"][0]->tile_id):?>
                                                  <div class="column">
                                                       <label for="lastName">Tile</label>
                                                       <input type="text" readonly id="occupation" name="occupation" value= "<?= $rows["dining_modification_details"][0]->tile->name;?>">
                                                  </div>
                                                  <?php endif;?>
                                                  <?php if($rows["dining_modification_details"][0]->paint_id):?>
                                                  <div class="column">
                                                       <label for="lastName">Paint</label>
                                                       <input type="text" readonly id="occupation" name="occupation"value= "<?= $rows["dining_modification_details"][0]->paint->name;?>">
                                                  </div>
                                                  <?php endif;?>
                                   
                                             </div>
                                             
                                             
                                        <?php else : ?>                           
                                             <h4>No modifications have been applied to Dining Room.</h4>
                                             <br><br>
                                        <?php endif;?>
                         
                                   
                              </fieldset>
                              <br>
                              <fieldset class="FormFieldset" >
                                   <legend class="Formlegend"> Living Room Modification Details</legend>
                                   <br>
                                        <?php if($rows["living_modification_details"]):?>
                                             
                                             <div class="form-group">
                                                  <?php if($rows["living_modification_details"][0]->tile_id):?>
                                                  <div class="column">
                                                       <label for="lastName">Tile</label>
                                                       <input type="text" readonly id="occupation" name="occupation" value= "<?= $rows["living_modification_details"][0]->tile->name;?>">
                                                  </div>
                                                  <?php endif;?>
                                                  <?php if($rows["living_modification_details"][0]->paint_id):?>
                                                  <div class="column">
                                                       <label for="lastName">Paint</label>
                                                       <input type="text" readonly id="occupation" name="occupation"value= "<?= $rows["living_modification_details"][0]->paint->name;?>">
                                                  </div>
                                                  <?php endif;?>

                                             </div>
                                             
                                             
                                        <?php else : ?>                           
                                             <h4>No modifications have been applied to Living Room.</h4>
                                             <br><br>
                                        <?php endif;?>
                         
                                   
                              </fieldset>
                              <br>
                              <fieldset class="FormFieldset" >
                                   <legend class="Formlegend"> Bathroom Modification Details</legend>
                                   <br>
                                        <?php if($rows["bathroom_modification_details"]):?>
                                             
                                             <div class="form-group">
                                                  <?php if($rows["bathroom_modification_details"][0]->tile_id):?>
                                                  <div class="column">
                                                       <label for="lastName">Tile</label>
                                                       <input type="text" readonly id="occupation" name="occupation" value= "<?= $rows["bathroom_modification_details"][0]->tile->name;?>">
                                                  </div>
                                                  <?php endif;?>
                                                  <?php if($rows["bathroom_modification_details"][0]->paint_id):?>
                                                  <div class="column">
                                                       <label for="lastName">Paint</label>
                                                       <input type="text" readonly id="occupation" name="occupation"value= "<?= $rows["bathroom_modification_details"][0]->paint->name;?>">
                                                  </div>
                                                  <?php endif;?>
                                   
                                             </div>
                                             
                                             
                                        <?php else : ?>                           
                                             <h4>No modifications have been applied to Bathroom.</h4>
                                             <br><br>
                                        <?php endif;?>
                         
                                   
                              </fieldset>
                              <br>
                              <fieldset class="FormFieldset" >
                                   <legend class="Formlegend"> Exterior Modification Details</legend>
                                   <br>
                                        <?php if($rows["exterior_modification_details"]):?>
                                             
                                             <div class="form-group">
                                                  <?php if($rows["exterior_modification_details"][0]->tile_id):?>
                                                  <div class="column">
                                                       <label for="lastName">Tile</label>
                                                       <input type="text" readonly id="occupation" name="occupation" value= "<?= $rows["exterior_modification_details"][0]->tile->name;?>">
                                                  </div>
                                                  <?php endif;?>
                                                  <?php if($rows["exterior_modification_details"][0]->paint_id):?>
                                                  <div class="column">
                                                       <label for="lastName">Paint</label>
                                                       <input type="text" readonly id="occupation" name="occupation"value= "<?= $rows["exterior_modification_details"][0]->paint->name;?>">
                                                  </div>
                                                  <?php endif;?>
                                   
                                             </div>
                                             
                                             
                                        <?php else : ?>                           
                                             <h4>No modifications have been applied to Exterior.</h4>
                                             <br><br>
                                        <?php endif;?>
                         
                                   
                              </fieldset>
                              <br>
                              <fieldset class="FormFieldset" >
                                   <legend class="Formlegend"> Bedroom Modification Details</legend>
                                   <br>
                                        <?php if($rows["bedroom_modification_details"]):?>
                                             
                                             <div class="form-group">
                                                  <?php if($rows["bedroom_modification_details"][0]->tile_id):?>
                                                  <div class="column">
                                                       <label for="lastName">Tile</label>
                                                       <input type="text" readonly id="occupation" name="occupation" value= "<?= $rows["bedroom_modification_details"][0]->tile->name;?>">
                                                  </div>
                                                  <?php endif;?>
                                                  <?php if($rows["bedroom_modification_details"][0]->paint_id):?>
                                                  <div class="column">
                                                       <label for="lastName">Paint</label>
                                                       <input type="text" readonly id="occupation" name="occupation"value= "<?= $rows["bedroom_modification_details"][0]->paint->name;?>">
                                                  </div>
                                                  <?php endif;?>
                                   
                                             </div>
                                             
                                             
                                        <?php else : ?>                           
                                             <h4>No modifications have been applied to Bedroom.</h4>
                                             <br><br>
                                        <?php endif;?>
                         
                                   
                              </fieldset>
                              <br>
                              
                         <?php endif;?>
            
                    
               </fieldset>
               
               <br><br>

               <fieldset class="FormFieldset" >
                    <legend class="Formlegend"> Model Details</legend>
                    <br>
                    
                         <?php if(empty($rows["common"]->model_id)): ?>
                              <h4>No models have been selected.</h4>
                              
                         <?php else : ?>  
                                                        
                              <div class="form-group">
                                   <br>
                         
                                   <div class="column">                   
                                        <label for="firstname">Model ID</label>
                                        <input type="text" readonly id="occupation" name="occupation"value= "<?= $rows["model_details"]->id;?>">
                                   </div>
                                   <div class="column">
                                        <label for="lastName">Model Name</label>
                                        <input type="text" readonly id="occupation" name="occupation"value= "<?= $rows["model_details"]->name;?>">
                                   </div>                                  
                                   <div class="column">
                                        <label for="lastName">Number of Rooms</label>
                                        <input type="text" readonly id="occupation" name="occupation" value= "<?= $rows["model_details"]->no_room;?>">
                                   </div>
                                   <div class="column">
                                        <label for="lastName">Number of Kitchens</label>
                                        <input type="text" readonly id="occupation" name="occupation"value= "<?= $rows["model_details"]->no_kitchen;?>">
                                   </div>
                                   <div class="column">                   
                                        <label for="firstname">flow_plan </label>
                                        <input type="text" readonly id="occupation" name="occupation"value= "<?= $rows["model_details"]->flow_plan;?>">
                                   </div>
                                   <div class="column">
                                        <label for="lastName">Number of Floors</label>
                                        <input type="text" readonly id="occupation" name="occupation"value= "<?= $rows["model_details"]->no_floor;?>">
                                   </div>                                  
                                   <div class="column">
                                        <label for="lastName">Kitchen Tile</label>
                                        <input type="text" readonly id="occupation" name="occupation" value= "<?= $rows["model_details"]->kitchenTile->name;?>">
                                   </div>
                                   <div class="column">
                                        <label for="lastName">Dining Tile</label>
                                        <input type="text" readonly id="occupation" name="occupation"value= "<?= $rows["model_details"]->diningTile->name;?>">
                                   </div>
                                   <div class="column">
                                        <label for="lastName">Bathroom Tile</label>
                                        <input type="text" readonly id="occupation" name="occupation" value= "<?= $rows["model_details"]->bathroomTile->name;?>">
                                   </div>
                                   <div class="column">
                                        <label for="lastName">Default Tile</label>
                                        <input type="text" readonly id="occupation" name="occupation"value= "<?= $rows["model_details"]->defaultTile->name;?>">
                                   </div>
                                   <div class="column">                   
                                        <label for="firstname">Default Colour</label>
                                        <input type="text" readonly id="occupation" name="occupation"value= "<?= $rows["model_details"]->defaultColor->name;?>">
                                   </div>
                                   <div class="column">
                                        <label for="lastName">Description</label>
                                        <input type="text" readonly id="occupation" name="occupation"value= "<?= $rows["model_details"]->description;?>">
                                   </div>                                  
                                   <div class="column">
                                        <label for="lastName">time_duration_in_months</label>
                                        <input type="text" readonly id="occupation" name="occupation" value= "<?= $rows["model_details"]->time_duration_in_months;?>">
                                   </div>
                                   <div class="column">
                                        <label for="lastName">minimum_area</label>
                                        <input type="text" readonly id="occupation" name="occupation"value= "<?= $rows["model_details"]->minimum_area;?>">
                                   </div>
                                   <div class="column">                   
                                        <label for="firstname">parking_space </label>
                                        <input type="text" readonly id="occupation" name="occupation"value= "<?= $rows["model_details"]->parking_space;?>">
                                   </div>
                    
                              </div>
                         <?php endif;?>
            
                    
               </fieldset>

               <br>
                <fieldset class="FormFieldset" >
                        <legend class="Formlegend"> Selected Payment Package Details</legend>
                        <br>
                            <?php if($rows["payment_plan"]):?>
                                
                                <div class="form-group">
                                    <div class="column">
                                            <label for="lastName">Payment Plan ID</label>
                                            <input type="text" readonly id="occupation" name="occupation" value= "<?= $rows["payment_plan"][0]->id;?>">
                                    </div>
                                    <div class="column">
                                            <label for="lastName">Payment Plan Name</label>
                                            <input type="text" readonly id="occupation" name="occupation"value= "<?= $rows["payment_plan"][0]->name;?>">
                                    </div>
                                    <div class="column">
                                            <label for="lastName">Installment Count</label>
                                            <input type="text" readonly id="occupation" name="occupation" value= "<?= $rows["payment_plan"][0]->installement_count;?>">
                                    </div>
                                    <div class="column">
                                            <label for="lastName">Interest(In Percentage)</label>
                                            <input type="text" readonly id="occupation" name="occupation"value= "<?= $rows["payment_plan"][0]->interest;?>%">
                                    </div>
                        
                                </div>
                                
                                
                            <?php else : ?>                           
                                <h4>No pament plan has been selected to this project request.</h4>
                                <br><br>
                            <?php endif;?>
            
                        
                </fieldset>
                <br>
                    
                <style>
                    .button-box {
                        display: inline-block;
                        padding: 10px 20px;
                        background-color: #3d9ce5; /* Your desired color */
                        color: #fff; /* Text color */
                        border: 2px solid #3d9ce5; /* Border color */
                        border-radius: 5px;
                        text-decoration: none;
                        font-size: 16px;
                        font-weight: bold;
                        cursor: pointer;
                        transition: background-color 0.3s ease, color 0.3s ease;
                    }

                    .button-box:hover {
                        background-color: #2d7cbf; /* Darker color on hover */
                        border-color: #2d7cbf; /* Darker border color on hover */
                    }
                    </style>
                    
                    
                    <br>
                    
                    <a href="<?=ROOT?>/uploads/<?=($rows['quotation']->quotation)?>" class="button-box">View Quotation</a>
               
            </div>

               

     


<?php $this->view('includes/footer'); ?>


<?php else: ?>
    <?php $this->view('404'); ?>
<?php endif; ?>
