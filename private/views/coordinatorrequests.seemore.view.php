<?php if(Auth::getRole()== 'Project Coordinator'): ?>
<?php $this->view('includes/header')?>
<script>
     function showForm() {
    var formContainer = document.getElementById("formContainer");
    formContainer.style.display = "block";
}
</script>


<!-- <pre><?php print_r($rows["model_details"]);?></pre> -->
     <div  class="table_header" >
          
          
     </div>
     <div style="text-align:center;"><h1> Details of the Request </h1></div>
     <div style="text-align:center;"><h3>Request ID : <?= $rows["common"]->id;?> </h3></div>
     <!-- <pre><?php print_r( $rows["common"]->user->id);?></pre> -->
     
     <div class="form_container">
               <fieldset style="padding:10px;" class="FormFieldset" >
               
               <div class="form-group">
                      <br>  
                               
                         <?php if ($rows["common"]->status=='Modified'):?>
                              <div class="column">                   
                                   <label for="firstname">Status</label>
                                   <input type="text" readonly id="occupation" name="occupation"value= "Pending">
                              </div>  
                                  
                         <?php elseif ($rows["common"]->status=='Rejected'):?>
                              <div class="column">                   
                                   <label for="firstname">Status</label>
                                   <input type="text" readonly id="occupation" name="occupation"value= "<?= $rows["common"]->status;?>">
                              </div>
                              <div class="column">
                                   <label for="lastName">Reason</label>
                                   <input type="text" readonly id="occupation" name="occupation"value= "<?= $rows["reject_reason"]->reason;?>">
                              </div>
          
                         <?php elseif ($rows["common"]->status=='Accepted'):?>
                              <div class="column">                   
                                   <label for="firstname">Status</label>
                                   <input type="text" readonly id="occupation" name="occupation"value= "<?= $rows["common"]->status;?>">
                              </div>
                         <?php elseif ($rows["common"]->status=='Done'):?>
                              <div class="column">                   
                                   <label for="firstname">Status</label>
                                   <input type="text" readonly id="occupation" name="occupation"value= "<?= $rows["common"]->status;?>">
                              </div>
                         <?php endif;?>
                    </div>     
               </fieldset>
               
               <br><br>
         
               <fieldset style="padding:10px;" class="FormFieldset" >
                    <legend class="Formlegend"> Customer Details</legend>
            
                    <div class="form-group">
                         <br>
                         
                         <div class="column">                   
                              <label for="firstname">First Name</label>
                              <input type="text" readonly id="occupation" name="occupation"value= "<?= $rows["common"]->user->firstname;?>">
                         </div>
                         <div class="column">
                              <label for="lastName">Last Name</label>
                              <input type="text" readonly id="occupation" name="occupation"value= "<?= $rows["common"]->user->lastname;?>">
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
                              <input type="text" readonly id="contactnumber" name="contactnumber" value= "<?= $rows["common"]->user->contactnumber;?>">
                         </div>
                         <div class="column">
                              <label for="lastName">Email</label>
                              <input type="text" readonly id="occupation" name="occupation" value= "<?= $rows["common"]->user->email;?>">
                         </div>
                         <div class="column">
                              <label for="locationLink">Salary Proofing Document</label>
                              <a target="_blank" href="<?=ROOT?>/uploads/<?= $rows["salary"]->file_name;?>" >
                              <button class="action-button">Salary Proofing Document</button>
                              </a>
                         </div>
                         
                    
                    </div>
               </fieldset>


               <br><br>

               
              
                    <fieldset style="padding:10px;" class="FormFieldset" >
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
                                   <label for="occupation">Area (in perch)</label>
                                   <input type="text" readonly id="contactnumber" name="contactnumber" value= "<?= $rows["customer"]->ul_area;?>">
                              </div>
    
                              <div class="column">
                                   <label for="locationLink">Block Plan</label>
                                   <a target="_blank" href="<?=ROOT?>/uploads/<?= $rows["blockplan"]->file_name;?>" >
                                   <button class="action-button">Block Plan</button>
                                   </a>
                              </div>
                         
                              <div class="column">
                                   <label for="locationLink">Land Photograph</label>
                                   <a target="_blank" href="<?=ROOT?>/uploads/<?= $rows["landphoto"]->file_name;?>">
                                   <button class="action-button">Land Photograph</button>
                                   </a>
                              </div>
                              
                         </div>
                    </fieldset>

               
               

               <br><br>

               <fieldset style="padding:10px;" class="FormFieldset" >
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

               
               
               <br><br>

               <fieldset style="padding:10px;" class="FormFieldset" >
                    <legend class="Formlegend"> Modification Details</legend>
                    <br>

                         <?php if(empty($rows["common"]->modification_id)): ?>
                              <h4>No modifications have been applied to this request.</h4>
                              <br><br>
                              
                         <?php else : ?>                           
                              <fieldset style="padding:10px;" class="FormFieldset" >
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
                              <fieldset style="padding:10px;" class="FormFieldset" >
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
                              <fieldset style="padding:10px;" class="FormFieldset" >
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
                              <fieldset style="padding:10px;" class="FormFieldset" >
                                   <legend class="Formlegend"> Bathroom Modification Details</legend>
                                   <br>
                                        <?php if($rows["bathroom_modification_details"]):?>
                                             <!-- <pre><?php print_r($rows["bathroom_modification_details"][0]->tile_id)?></pre> -->
                                             
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
                              <fieldset style="padding:10px;" class="FormFieldset" >
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
                              <fieldset style="padding:10px;" class="FormFieldset" >
                                   <legend class="Formlegend"> Bedroom Modification Details</legend>
                                   <!-- <pre><?php print_r($rows["bedroom_modification_details"][0]);?></pre> -->
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

               <fieldset style="padding:10px;" class="FormFieldset" >
                    <legend class="Formlegend"> Model Details</legend>
                    <br>
                    
                         <?php if(empty($rows["common"]->model_id)): ?>
                              <h4>No models have been selected.</h4>
                              
                         <?php else : ?>  
                              <!-- <pre><?php print_r($rows["model_details"]);?>       </pre>                 -->
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
                                        <a href="<?=ROOT?>/uploads/<?= $rows["model_details"]->flow_plan;?>" target="_blank"><input type="text"  style="color: blue;" readonly id="occupation" name="occupation"value= "<?= $rows["model_details"]->flow_plan;?>"></a>
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
                                        <label for="lastName">Time Duration (In months)</label>
                                        <input type="text" readonly id="occupation" name="occupation" value= "<?= $rows["model_details"]->time_duration_in_months;?>">
                                   </div>
                                   <div class="column">
                                        <label for="lastName">Minimum Area</label>
                                        <input type="text" readonly id="occupation" name="occupation"value= "<?= $rows["model_details"]->minimum_area;?>">
                                   </div>
                                   <div class="column">                   
                                        <label for="firstname">Parking Space </label>
                                        <input type="text" readonly id="occupation" name="occupation"value= "<?= $rows["model_details"]->parking_space;?>">
                                   </div>
                                   <div class="column">                   
                                        <label for="firstname">Number of Square feets for Bathroom Tiling</label>
                                        <input type="text" readonly id="occupation" name="occupation"value= "<?= $rows["model_details"]->number_of_s_feet_for_tiling_bathrooms;?>">
                                   </div>
                                   <div class="column">                   
                                        <label for="firstname">Number of Square feets for Bathroom Painting</label>
                                        <input type="text" readonly id="occupation" name="occupation"value= "<?= $rows["model_details"]->number_of_s_feet_for_painting_bathrooms;?>">
                                   </div>
                                   <div class="column">                   
                                        <label for="firstname">Number of Square feets for Bedroom Tiling</label>
                                        <input type="text" readonly id="occupation" name="occupation"value= "<?= $rows["model_details"]->number_of_s_feet_for_tiling_bedrooms;?>">
                                   </div>
                                   <div class="column">                   
                                        <label for="firstname">Number of Square feets for Bedroom Painting</label>
                                        <input type="text" readonly id="occupation" name="occupation"value= "<?= $rows["model_details"]->number_of_s_feet_for_painting_bedrooms;?>">
                                   </div>
                                   <div class="column">                   
                                        <label for="firstname">Number of Square feets for Dining Room Tiling</label>
                                        <input type="text" readonly id="occupation" name="occupation"value= "<?= $rows["model_details"]->number_of_s_feet_for_tiling_dining;?>">
                                   </div>
                                   <div class="column">                   
                                        <label for="firstname">Number of Square feets for Dining Room Painting</label>
                                        <input type="text" readonly id="occupation" name="occupation"value= "<?= $rows["model_details"]->number_of_s_feet_for_painting_dining;?>">
                                   </div>
                                   <div class="column">                   
                                        <label for="firstname">Number of Square feets for Exterior Tiling</label>
                                        <input type="text" readonly id="occupation" name="occupation"value= "<?= $rows["model_details"]->number_of_s_feet_for_tiling_exterior;?>">
                                   </div>
                                   <div class="column">                   
                                        <label for="firstname">Number of Square feets for Exterior Painting</label>
                                        <input type="text" readonly id="occupation" name="occupation"value= "<?= $rows["model_details"]->number_of_s_feet_for_painting_exterior;?>">
                                   </div>
                                   <div class="column">                   
                                        <label for="firstname">Number of Square feets for dKitchen Tiling</label>
                                        <input type="text" readonly id="occupation" name="occupation"value= "<?= $rows["model_details"]->number_of_s_feet_for_tiling_kitchens;?>">
                                   </div>
                                   <div class="column">                   
                                        <label for="firstname">Number of Square feets for Bathroom Painting</label>
                                        <input type="text" readonly id="occupation" name="occupation"value= "<?= $rows["model_details"]->number_of_s_feet_for_painting_kitchens;?>">
                                   </div>
                                   <div class="column">                   
                                        <label for="firstname">Number of Square feets for Living Area Tiling</label>
                                        <input type="text" readonly id="occupation" name="occupation"value= "<?= $rows["model_details"]->number_of_s_feet_for_tiling_living_area;?>">
                                   </div>
                                   <div class="column">                   
                                        <label for="firstname">Number of Square feets for Living Area Painting</label>
                                        <input type="text" readonly id="occupation" name="occupation"value= "<?= $rows["model_details"]->number_of_s_feet_for_painting_living_area;?>">
                                   </div>
                    
                              </div>
                         <?php endif;?>
            
                    
               </fieldset>

               <br>
                    <fieldset style="padding:10px;" class="FormFieldset" >
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
                                   <h4>No payment plan has been selected to this project request.</h4>
                                   <br><br>
                              <?php endif;?>
               
                         
                    </fieldset>
                    <br>
                              
                         
            
                    
               </fieldset>




               <?php if ($rows["common"]->status=='Modified'):?>
                                   
                              
                              <div style="display: flex; justify-content: center;" >
                                        <a href="<?=ROOT?>/coordinatorrequests/accept/<?= $rows["common"]->id;?>">
                                             <input type="button" value="Accept"class="save-button">
                                        </a>
                                        
                                             <input type="button" value="Reject"class="delete-button"  onclick="showForm()">
                                                  
                                        </div>
                                             <br>
                                             <div id="formContainer" style="display: none;" class="form_container">
        
                                             
                                             
                                                  <form action="<?=ROOT?>/coordinatorrequests/reject/<?= $rows["common"]->id;?>/<?= $rows["common"]->user->id?>"class="v_form" method="post">
                                                  <!-- Your form fields go here -->
                                                  
                                                 <b> <label for="name">Select Reason:</label></b>
                                                  <br>
                                                  <br>
                                                  <input type="checkbox" id="salary" name="reject_reason" value="False Monthly Salary Details">
                                                  <label for="male">False Monthly Salary Details</label><br>
                                                  <input type="checkbox" id="land" name="reject_reason" value="False Land Salary Details">
                                                  <label for="female">False Land Salary Details</label><br>
                                                  <br>
                                                  
                                                  <button style="background-color:#E5863D; color:white"  type="submit">Add Reason</button>
                                                  </form>
                              
                    <?php endif;?>
                    <?php if ($rows["common"]->status=='Done'):?>
                         <!-- <?php print_r($rows['quotation']->quotation);?> -->
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
                         
                         <a href="<?=ROOT?>/uploads/<?=($rows['quotation']->quotation)?>" target="_blank" class="button-box">View Quotation</a>
                                             
                    <?php endif;?>
    

               

     
               </div>

<?php $this->view('includes/footer'); ?>


<?php else: ?>
    <?php $this->view('404'); ?>
<?php endif; ?>
