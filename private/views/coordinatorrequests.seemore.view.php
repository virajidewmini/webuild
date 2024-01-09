<?php if(Auth::getRole()== 'Project Coordinator'): ?>
<?php $this->view('includes/header')?>

     <div  class="table_header" >
          <h1 style="margin-left: 35%;"> Request Details </h1>
          <h2 style="margin-left: 35%;"> ID : <?= $rows["common"]->id;?> </h2>
     </div>
     
     <div class="form_container">
         
               <fieldset class="FormFieldset" >
                    <legend class="Formlegend"> Customer Details</legend>
            
                    <div class="form-group">
                         <br>
                         
                         <div class="column">                   
                              <label for="firstname">First Name</label>
                              <input type="text" id="occupation" name="occupation"value= "<?= $rows["common"]->firstname;?>">
                         </div>
                         <div class="column">
                              <label for="lastName">Last Name</label>
                              <input type="text" id="occupation" name="occupation"value= "<?= $rows["common"]->lastname;?>">
                         </div>
                         <div class="column">
                              <label for="occupation">Occupation</label>
                              <input type="text" id="occupation" name="occupation" value= "<?= $rows["common"]->occupation;?>">
                         </div>
                         <div class="column">
                              <label for="lastName">Monthly Salary(LKR)</label>
                              <input type="text" id="occupation" name="occupation" value= "<?= $rows["common"]->salary;?>">

                         </div>
                         <div class="column">
                              <label for="occupation">Contact Number</label>
                              <input type="text" id="contactnumber" name="contactnumber" value= "<?= $rows["common"]->contactnumber;?>">
                         </div>
                         <div class="column">
                              <label for="lastName">Email</label>
                              <input type="text" id="occupation" name="occupation" value= "<?= $rows["common"]->email;?>">
                         </div>
                    
                    </div>
               </fieldset>


               <br><br>

               
               <?php if(($rows["common"]->status_of_land)=='customer'): ?>
                    <fieldset class="FormFieldset" >
                         <legend class="Formlegend"> Land Details</legend>
               
                         <div class="form-group">
                              <br>
                              
                              <div class="column">                   
                                   <label for="firstname">Land ID</label>
                                   <input type="text" id="occupation" name="occupation"value= "<?= $rows["customer"]->land_id;?>">
                              </div>
                              <div class="column">
                                   <label for="lastName">Land Name</label>
                                   <input type="text" id="occupation" name="occupation"value= "<?= $rows["customer"]->ul_name;?>">
                              </div>
                              <div class="column">
                                   <label for="lastName">Street</label>
                                   <input type="text" id="occupation" name="occupation"value= "<?= $rows["customer"]->ul_street;?>">
                              </div>
                              <div class="column">
                                   <label for="occupation">Town</label>
                                   <input type="text" id="occupation" name="occupation" value= "<?= $rows["customer"]->ul_town;?>">
                              </div>
                              <div class="column">
                                   <label for="lastName">District</label>
                                   <input type="text" id="occupation" name="occupation" value= "<?= $rows["customer"]->ul_district;?>">

                              </div>
                              <div class="column">
                                   <label for="occupation">Area (in perch)</label>
                                   <input type="text" id="contactnumber" name="contactnumber" value= "<?= $rows["customer"]->ul_area;?>">
                              </div>
                              <div class="column">
                                   <label for="lastName">Land Type</label>
                                   <input type="text" id="occupation" name="occupation" value= "<?= $rows["customer"]->land_type;?>">
                              </div>
                              <div class="column">
                                   
                              </div>
                              <div class="column">
                                   <label for="locationLink">Road Map</label>
                                   <a href="#" target="#">
                                   <button class="action-button">Road Map</button>
                                   </a>
                              </div>
                              <div class="column">
                                   <label for="locationLink">Block Plan</label>
                                   <a href="#" target="#">
                                   <button class="action-button">Block Plan</button>
                                   </a>
                              </div>
                         
                              <div class="column">
                                   <label for="locationLink">Image</label>
                                   <a href="#" target="#">
                                   <button class="action-button">Image</button>
                                   </a>
                              </div>
                              
                         </div>
                    </fieldset>

               <?php elseif(($rows["common"]->status_of_land)=='company'): ?>
                    <fieldset class="FormFieldset" >
                         <legend class="Formlegend"> Land Details</legend>
               
                         <div class="form-group">
                              <br>
                              
                              <div class="column">                   
                                   <label for="firstname">Land ID</label>
                                   <input type="text" id="occupation" name="occupation"value= "<?= $rows["company"]->land_id;?>">
                              </div>
                              <div class="column">
                                   <label for="lastName">Land Name</label>
                                   <input type="text" id="occupation" name="occupation"value= "<?= $rows["company"]->name;?>">
                              </div>
                              <div class="column">
                                   <label for="occupation">Lane</label>
                                   <input type="text" id="occupation" name="occupation" value= "<?= $rows["company"]->lane;?>">
                              </div>
                              <div class="column">
                                   <label for="occupation">Town</label>
                                   <input type="text" id="occupation" name="occupation" value= "<?= $rows["company"]->town;?>">
                              </div>
                              <div class="column">
                                   <label for="lastName">District</label>
                                   <input type="text" id="occupation" name="occupation" value= "<?= $rows["company"]->district;?>">

                              </div>
                              <div class="column">
                                   <label for="occupation">Area (in perch)</label>
                                   <input type="text" id="contactnumber" name="contactnumber" value= "<?= $rows["company"]->area_in_perch;?>">
                              </div>
                              <div class="column">
                                   <label for="locationLink">Road Map</label>
                                   <a href="#" target="#">
                                   <button class="action-button">Road Map</button>
                                   </a>
                              </div>
                              <div class="column">
                                   <label for="locationLink">Image</label>
                                   <a href="#" target="#">
                                   <button class="action-button">Image</button>
                                   </a>
                              </div>
                              <div class="column">
                                   <label for="locationLink">Block Plan</label>
                                   <a href="#" target="#">
                                   <button class="action-button">Block Plan</button>
                                   </a>
                              </div>
                         
                         </div>
                    </fieldset>
               <?php endif; ?>

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
                                        <input type="text" id="occupation" name="occupation"value= "<?= $rows["manager_details"]->firstname;?>">
                                   </div>
                                   <div class="column">
                                        <label for="lastName">Last Name</label>
                                        <input type="text" id="occupation" name="occupation"value= "<?= $rows["manager_details"]->lastname;?>">
                                   </div>                                  
                                   <div class="column">
                                        <label for="lastName">Email</label>
                                        <input type="text" id="occupation" name="occupation" value= "<?= $rows["manager_details"]->email;?>">
                                   </div>
                                   <div class="column">
                                        <label for="lastName">Contact Number</label>
                                        <input type="text" id="occupation" name="occupation"value= "<?= $rows["manager_details"]->contactnumber;?>">
                                   </div>
                    
                              </div>
                         <?php endif;?>
            
                    
               </fieldset>
               
               <br><br>

               <fieldset class="FormFieldset" >
                    <legend class="Formlegend"> Modification Details</legend>
                    <br>

                         <?php if(empty($rows["common"]->modification_id)): ?>
                              <h4>No modifications have been applied to this request.</h4>
                              <br><br>
                              
                         <?php else : ?>                           
                              <div class="form-group">
                                   <br>
                         
                                   <div class="column">                   
                                        <label for="firstname">Modification ID</label>
                                        <input type="text" id="occupation" name="occupation"value= "<?= $rows["modification_details"]->modification_id;?>">
                                   </div>                                 
                                   <div class="column">
                                        <label for="lastName">kitchen_tile</label>
                                        <input type="text" id="occupation" name="occupation" value= "<?= $rows["modification_details"]->kitchen_tile->tile_name;?>">
                                   </div>
                                   <div class="column">
                                        <label for="lastName">kitchen_color_id</label>
                                        <input type="text" id="occupation" name="occupation"value= "<?= $rows["modification_details"]->kitchen_color->name;?>">
                                   </div>
                                   <div class="column">                   
                                        <label for="firstname">bathroom_tile_id </label>
                                        <input type="text" id="occupation" name="occupation"value= "<?= $rows["modification_details"]->bathroom_tile->tile_name;?>">
                                   </div>
                                   <div class="column">
                                        <label for="lastName">bathroom_color_id</label>
                                        <input type="text" id="occupation" name="occupation"value= "<?= $rows["modification_details"]->bathroom_color->name;?>">
                                   </div>                                  
                                   <div class="column">
                                        <label for="lastName">dining_tile_id</label>
                                        <input type="text" id="occupation" name="occupation" value= "<?= $rows["modification_details"]->dining_tile->tile_name;?>">
                                   </div>
                                   <div class="column">
                                        <label for="lastName">dining_color_id</label>
                                        <input type="text" id="occupation" name="occupation"value= "<?= $rows["modification_details"]->dining_color->name;?>">
                                   </div>
                                   <div class="column">
                                        <label for="lastName">living_room_tile_id</label>
                                        <input type="text" id="occupation" name="occupation" value= "<?= $rows["modification_details"]->living_room_tile->tile_name;?>">
                                   </div>
                                   <div class="column">
                                        <label for="lastName">living_room_color_id</label>
                                        <input type="text" id="occupation" name="occupation"value= "<?= $rows["modification_details"]->living_room_color->name;?>">
                                   </div>
                                   <div class="column">
                                        <label for="lastName">living_area_tile_id</label>
                                        <input type="text" id="occupation" name="occupation" value= "<?= $rows["modification_details"]->living_area_tile->tile_name;?>">
                                   </div>
                                   <div class="column">
                                        <label for="lastName">living_area_color_id</label>
                                        <input type="text" id="occupation" name="occupation" value= "<?= $rows["modification_details"]->living_area_color->name;?>">
                                   </div>
                                   <div class="column">
                                        <label for="lastName">exterior_tile_id</label>
                                        <input type="text" id="occupation" name="occupation"value= "<?= $rows["modification_details"]->exterior_tile->tile_name;?>">
                                   </div>
                                   <div class="column">
                                        <label for="lastName">exterior_color_id</label>
                                        <input type="text" id="occupation" name="occupation"value= "<?= $rows["modification_details"]->exterior_color->name;?>">
                                   </div>
                    
                              </div>
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
                                        <input type="text" id="occupation" name="occupation"value= "<?= $rows["model_details"]->model_id;?>">
                                   </div>
                                   <div class="column">
                                        <label for="lastName">Model Name</label>
                                        <input type="text" id="occupation" name="occupation"value= "<?= $rows["model_details"]->name;?>">
                                   </div>                                  
                                   <div class="column">
                                        <label for="lastName">no_room</label>
                                        <input type="text" id="occupation" name="occupation" value= "<?= $rows["model_details"]->no_room;?>">
                                   </div>
                                   <div class="column">
                                        <label for="lastName">no_kitchen</label>
                                        <input type="text" id="occupation" name="occupation"value= "<?= $rows["model_details"]->no_kitchen;?>">
                                   </div>
                                   <div class="column">                   
                                        <label for="firstname">flow_plan </label>
                                        <input type="text" id="occupation" name="occupation"value= "<?= $rows["model_details"]->flow_plan;?>">
                                   </div>
                                   <div class="column">
                                        <label for="lastName">no_floor</label>
                                        <input type="text" id="occupation" name="occupation"value= "<?= $rows["model_details"]->no_floor;?>">
                                   </div>                                  
                                   <div class="column">
                                        <label for="lastName">kitchen_tile</label>
                                        <input type="text" id="occupation" name="occupation" value= "<?= $rows["model_details"]->kitchen_tile->tile_name;?>">
                                   </div>
                                   <div class="column">
                                        <label for="lastName">dining_tile</label>
                                        <input type="text" id="occupation" name="occupation"value= "<?= $rows["model_details"]->dining_tile->tile_name;?>">
                                   </div>
                                   <div class="column">
                                        <label for="lastName">bathroom_tile</label>
                                        <input type="text" id="occupation" name="occupation" value= "<?= $rows["model_details"]->bathroom_tile->tile_name;?>">
                                   </div>
                                   <div class="column">
                                        <label for="lastName">tile</label>
                                        <input type="text" id="occupation" name="occupation"value= "<?= $rows["model_details"]->default_tile->tile_name;?>">
                                   </div>
                                   <div class="column">                   
                                        <label for="firstname">Colour</label>
                                        <input type="text" id="occupation" name="occupation"value= "<?= $rows["model_details"]->default_color->name;?>">
                                   </div>
                                   <div class="column">
                                        <label for="lastName">Description</label>
                                        <input type="text" id="occupation" name="occupation"value= "<?= $rows["model_details"]->description;?>">
                                   </div>                                  
                                   <div class="column">
                                        <label for="lastName">time_duration_in_months</label>
                                        <input type="text" id="occupation" name="occupation" value= "<?= $rows["model_details"]->time_duration_in_months;?>">
                                   </div>
                                   <div class="column">
                                        <label for="lastName">minimum_area</label>
                                        <input type="text" id="occupation" name="occupation"value= "<?= $rows["model_details"]->minimum_area;?>">
                                   </div>
                                   <div class="column">                   
                                        <label for="firstname">parking_space </label>
                                        <input type="text" id="occupation" name="occupation"value= "<?= $rows["model_details"]->parking_space;?>">
                                   </div>
                    
                              </div>
                         <?php endif;?>
            
                    
               </fieldset>

               

     


<?php $this->view('includes/footer'); ?>


<?php else: ?>
    <?php $this->view('404'); ?>
<?php endif; ?>
