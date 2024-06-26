<?php if($_SESSION['role']== 'Client'): ?>
<link rel="stylesheet" href="<?=ROOT?>/css/style.css" />

<style>
   

input:disabled:hover + .radio-tile {
  box-shadow: 0 0 0 0;
}
.input-container input:disabled {
  cursor: not-allowed; 
}
.errors{
    padding-bottom: 20px;
    color: red;
  }
</style>



<div  class="table_header" >
        <h1 style="margin-left: 35%;">  Express Your Home Makeover Vision !</h1>
</div>
    <div class="form_container">
        <form method="post" enctype="multipart/form-data" id="requestForm">

        <?php if (isset($errors)) : ?>
            <div class="errors">
                <?php foreach ($errors as $error) : ?>
                    <p class="error"><?= $error ?></p>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
            
            <fieldset class="FormFieldset" >
            <legend class="Formlegend"> Personal Details</legend>
            <div class="form-group">
                
                <div class="column">
                    <label for="occupation">Occupation</label>
                    <input type="text" id="occupation" name="occupation" value= "<?= get_var('occupation');?>">
                </div>
                <div class="column">
                    <label for="lastName">Monthly Salary(LKR)</label>
                    
                    <select id="type" name="salary">
                        <option value="" disabled selected>Select Your Monthly Salary</option>
                        <option <?= get_select2('salary','< 100 000');?> value="< 100 000">< 100 000</option>
                        <option <?= get_select2('salary','100 000-300 000');?> value="100 000-300 000">100 000-300 000</option>
                        <option <?= get_select2('salary','300 000-500 000');?> value="300 000-500 000">300 000-500 000</option>
                        <option <?= get_select2('salary','500 000 <');?> value="500 000 <">500 000 <</option>
                    </select>

                </div>

                <div class="column">
                    <label for="proof">Salary Proofing Document</label>
                    <p>Upload monthly salary sheet or any kind of your monthly income proof docuxment</p>
                    
                    <input type="file" name="files[]" id="file" accept="application/pdf,image/*" required>
                </div>

            </div>
            </fieldset>

        <br><br>

            <fieldset class="FormFieldset" >
            <legend class="Formlegend"> Land Details</legend>
            <div class="form-group">
                
                
                <!-- <div class="column">
                    <label for="landCondition">Land Condition</label>
                        <select id="type" name="type" >
                            <option value="" disabled selected>Select land topography</option>
                            <option value="Flat or Level Land">Flat or Level Land</option>
                            <option value="Hillside or Sloped Land">Hillside or Sloped Land</option>
                            <option value="Mountainous Terrain">Mountainous Terrain</option>
                            <option value="Waterfront or Coastal Land">Waterfront or Coastal Land</option>
                            <option value="Valley Land">Valley Land</option>
                            <option value="Other">Other</option>
                        </select>
                </div> -->

                <div class="column">
                    <label for="district">District</label>
                    <select id="selectDistrict" name="district" onchange="updateTown()">
                        <option value="" disabled selected>Choose a District</option>
                        <?php 
                            $options = ['Colombo', 'Kandy', 'Galle', 'Ampara', 'Anuradhapura', 'Badulla', 'Batticaloa', 'Gampaha', 'Hambantota', 'Jaffna', 'Kalutara', 'Kegalle', 'Kilinochchi', 'Kurunegala', 'Mannar', 'Matale', 'Matara', 'Moneragala', 'Mullativu', 'Nuwara Eliya', 'Polonnaruwa', 'Puttalam', 'Ratnapura', 'Trincomalee', 'Vavuniya'];
                            foreach ($options as $option) {
                                echo '<option value="' . $option . '"';
                                if (get_var('district') === $option) {
                                    echo ' selected';
                                }
                                echo '>' . $option . '</option>';
                            }
                        ?>
                    </select>
                </div>

                <div class="column">
                    <label for="town">Town</label>
                    <select id="selectTown" name="town">
                        <option value="" disabled selected>Choose a Town</option>
                    </select>
                </div>
                
                <div class="column">
                    <label for="Street">Street</label>
                    <input type="text" id="street" name="street" value= "<?= get_var('street');?>">
                </div>

                <div class="column">
                    <label for="area">Land Area(Perch)</label>
                    <input type="test" id="area" name="area" value= "<?= get_var('area');?>">
                </div>

                <div class="column">
                    <label for="plan">Land Photograph</label>
                     <input type="file" name="files[]" id="file" accept="image/*" required>
                </div>
                <div class="column">
                    <label for="plan">Block Plan of the Land</label>
                    <input type="file" name="files[]" id="file" accept="application/pdf" required>
                </div>
            </div>
            </fieldset>
            
            <!-- <button class="add___" style="width: 50%; font-size: medium; height: 40px;">Submit</button>
            
        </form> -->


        <br><br>

       
            <fieldset class="FormFieldset" >
            <legend class="Formlegend">Modification</legend>

            <!-- Living Room Modification -->
            
            <button type="button" class="collapsible">Living Room</button>
                <div class="collaps-content">
                    <div class="checkbox-container">
                        <input type="checkbox" id="agreeCheck" name="agreeCheck" onchange="modify('agreeCheck','HiddenForm')" style="width: 20px; height: 20px; margin-top: 20px; margin-bottom: 20px; ">
                        <label for="agree" id="agree"> By selecting this, you are confirming that you have agree to modify your Living Room.</label><br>
                    </div>

                    
                   <div id="HiddenForm" style="display: none;">
                   <label for="paint" class="lableForCollaps">Paint Colour</label>

                   <div class="input-container">
                            <input id="defaultColor" type="radio" name="Paint" disabled>
                            <div class="radio-tile" style="background-color: white;">
                                <label for="default">White</label>
                            </div>
                    </div>
                    <p style="margin-left: 20px;">Default</p>

                    <div class="radio-tile-group"  style="display: none;  display: flex; flex-wrap: wrap;">
                <?php if(isset($rows)): ?>

                <?php foreach ($rows as $row):?>
                        <div class="input-container">
                            <input id="walk" type="radio" name="livingRoomPaint" value="<?=$row->id?>">
                            <div class="radio-tile" style="background-color: <?=$row->color?>">
                                <label for="walk"><?=$row->name?></label>
                            </div>
                        </div>
                <?php endforeach;?>
                <?php endif; ?>

                </div>

                

                <label for="tile" class="lableForCollaps">Tile Styles</label>
                
                <div class="input-container">
                            <input id="defaultColor" type="radio" name="radio" disabled>
                            <div class="radio-tile" style="background-image: url(<?=ROOT?>/tiles/Interior_tile_1.jpeg);">
                                
                            </div>
                            
                    </div>
                    <p style="margin-left: 20px;">Default</p>
                    
                    <div class="radio-tile-group"  style="display: none;  display: flex; flex-wrap: wrap;">

                    <?php for ($i = 2; $i <= 4; $i++): ?>

                    <div class="input-container">
                            <input id="defaultColor" type="radio" name="livingRoomTile" value="Interior_tile_<?= $i ?>">
                            <div class="radio-tile" style="background-image: url(<?=ROOT?>/tiles/Interior_tile_<?= $i ?>.jpeg);">  
                            </div>
                    </div>
                    <?php endfor; ?>
               
                </div>
                    
                    </div>
                    </div>

            <!-- Dining Room Modification -->
                
            <button type="button" class="collapsible">Dining Room</button>
            
            <div class="collaps-content">
                    <div class="checkbox-container">
                        <input type="checkbox" id="agreeCheck_dining" name="agreeCheck" onchange="modify('agreeCheck_dining','DiningHiddenForm')" style="width: 20px; height: 20px; margin-top: 20px; margin-bottom: 20px; ">
                        <label for="agree" id="agree"> By selecting this, you are confirming that you have agree to modify your Living Room.</label><br>
                    </div>
                    <div id="DiningHiddenForm" style="display: none;">
                   <label for="paint" class="lableForCollaps">Paint Colour</label>

                   <div class="input-container">
                            <input id="defaultColor" type="radio" name="Paint" disabled>
                            <div class="radio-tile" style="background-color: white;">
                                <label for="default">White</label>
                            </div>
                    </div>
                    <p style="margin-left: 20px;">Default</p>

                    <div class="radio-tile-group"  style="display: none;  display: flex; flex-wrap: wrap;">
                <?php if(isset($rows)): ?>

                <?php foreach ($rows as $row):?>
                        <div class="input-container">
                            <input id="walk" type="radio" name="diningRoomPaint" value="<?=$row->id?>">
                            <div class="radio-tile" style="background-color: <?=$row->color?>">
                                <label for="walk"><?=$row->name?></label>
                            </div>
                        </div>
                <?php endforeach;?>
                <?php endif; ?>

                </div>

                

                <label for="tile" class="lableForCollaps">Tile Styles</label>

                <div class="input-container">
                            <input id="defaultColor" type="radio" name="radio" disabled>
                            <div class="radio-tile" style="background-image: url(<?=ROOT?>/tiles/Interior_tile_1.jpeg);">
                               
                            </div>
                    </div>
                    <p style="margin-left: 20px;">Default</p>
                    <div class="radio-tile-group"  style="display: none;  display: flex; flex-wrap: wrap;">

                    <?php for ($i = 2; $i <= 4; $i++): ?>

                    <div class="input-container">
                            <input id="defaultColor" type="radio" name="diningRoomTile" value="Interior_tile_<?= $i ?>">
                            <div class="radio-tile" style="background-image: url(<?=ROOT?>/tiles/Interior_tile_<?= $i ?>.jpeg);">  
                            </div>
                    </div>
                    <?php endfor; ?>
               
                </div>
                    
                    </div>
            </div>
           



<button type="button" class="collapsible">Kitchen</button>

            <div class="collaps-content">
                    <div class="checkbox-container">
                        <input type="checkbox" id="agreeCheck_kitchen" name="agreeCheck" onchange="modify('agreeCheck_kitchen','kitchenHiddenForm')" style="width: 20px; height: 20px; margin-top: 20px; margin-bottom: 20px; ">
                        <label for="agree" id="agree"> By selecting this, you are confirming that you have agree to modify your Living Room.</label><br>
                    </div>
                    <div id="kitchenHiddenForm" style="display: none;">
                   <label for="paint" class="lableForCollaps">Paint Colour</label>

                   <div class="input-container">
                            <input id="defaultColor" type="radio" name="Paint" disabled>
                            <div class="radio-tile" style="background-color: white;">
                                <label for="default">White</label>
                            </div>
                    </div>
                    <p style="margin-left: 20px;">Default</p>

                    <div class="radio-tile-group"  style="display: none;  display: flex; flex-wrap: wrap;">
                <?php if(isset($rows_kitchen)): ?>

                <?php foreach ($rows_kitchen as $row):?>
                        <div class="input-container">
                            <input id="walk" type="radio" name="kitchenPaint" value="<?=$row->id?>">
                            <div class="radio-tile" style="background-color: <?=$row->color?>">
                                <label for="walk"><?=$row->name?></label>
                            </div>
                        </div>
                <?php endforeach;?>
                <?php endif; ?>

                </div>

                

                <label for="tile" class="lableForCollaps">Tile Styles</label>

                <div class="input-container">
                            <input id="defaultColor" type="radio" name="radio" disabled>
                            <div class="radio-tile" style="background-image: url(<?=ROOT?>/tiles/Kitchen_tile_1.jpeg);">
                               
                            </div>
                    </div>
                    <p style="margin-left: 20px;">Default</p>
                    <div class="radio-tile-group"  style="display: none;  display: flex; flex-wrap: wrap;">

                    <?php for ($i = 2; $i <= 4; $i++): ?>

                    <div class="input-container">
                            <input id="defaultColor" type="radio" name="kitchenTile" value="Kitchen_tile_<?= $i ?>">
                            <div class="radio-tile" style="background-image: url(<?=ROOT?>/tiles/Kitchen_tile_<?= $i ?>.jpeg);">  
                            </div>
                    </div>
                    <?php endfor; ?>
               
                </div>
                    
                    </div>
</div>
<button type="button" class="collapsible">Bathroom</button>
<div class="collaps-content">

                    <div class="checkbox-container">
                        <input type="checkbox" id="agreeCheck_bathroom" name="agreeCheck" onchange="modify('agreeCheck_bathroom','bathroomHiddenForm')" style="width: 20px; height: 20px; margin-top: 20px; margin-bottom: 20px; ">
                        <label for="agree" id="agree"> By selecting this, you are confirming that you have agree to modify your Living Room.</label><br>
                    </div>
            <div id="bathroomHiddenForm" style="display: none;">
                   <label for="paint" class="lableForCollaps">Paint Colour</label>

                   <div class="input-container">
                            <input id="defaultColor" type="radio" name="Paint" disabled>
                            <div class="radio-tile" style="background-color: white;">
                                <label for="default">White</label>
                            </div>
                    </div>
                    <p style="margin-left: 20px;">Default</p>

                    <div class="radio-tile-group"  style="display: none;  display: flex; flex-wrap: wrap;">
                <?php if(isset($rows_kitchen)): ?>

                <?php foreach ($rows_kitchen as $row):?>
                        <div class="input-container">
                            <input id="walk" type="radio" name="bathroomPaint" value="<?=$row->id?>">
                            <div class="radio-tile" style="background-color: <?=$row->color?>">
                                <label for="walk"><?=$row->name?></label>
                            </div>
                        </div>
                <?php endforeach;?>
                <?php endif; ?>

                </div>

                

                <label for="tile" class="lableForCollaps">Tile Styles</label>

                <div class="input-container">
                            <input id="defaultColor" type="radio" name="radio" disabled>
                            <div class="radio-tile" style="background-image: url(<?=ROOT?>/tiles/Bathroom_tile_1.jpeg);">
                               
                            </div>
                    </div>
                    <p style="margin-left: 20px;">Default</p>
                    <div class="radio-tile-group"  style="display: none;  display: flex; flex-wrap: wrap;">

                    <?php for ($i = 2; $i <= 4; $i++): ?>

                    <div class="input-container">
                            <input id="defaultColor" type="radio" name="bathroomTile" value="Bathroom_tile_<?= $i ?>">
                            <div class="radio-tile" style="background-image: url(<?=ROOT?>/tiles/Bathroom_tile_<?= $i ?>.jpeg);">  
                            </div>
                    </div>
                    <?php endfor; ?>
               
                </div>
                    
                    </div>
</div>
<button type="button" class="collapsible">Bedroom</button>
<div class="collaps-content">
                    <div class="checkbox-container">
                        <input type="checkbox" id="agreeCheck_bedroom" name="agreeCheck" onchange="modify('agreeCheck_bedroom','bedroomHiddenForm')" style="width: 20px; height: 20px; margin-top: 20px; margin-bottom: 20px; ">
                        <label for="agree" id="agree"> By selecting this, you are confirming that you have agree to modify your Living Room.</label><br>
                    </div>
            <div id="bedroomHiddenForm" style="display: none;">
                   <label for="paint" class="lableForCollaps">Paint Colour</label>

                   <div class="input-container">
                            <input id="defaultColor" type="radio" name="Paint" disabled>
                            <div class="radio-tile" style="background-color: white;">
                                <label for="default">White</label>
                            </div>
                    </div>
                    <p style="margin-left: 20px;">Default</p>

                    <div class="radio-tile-group"  style="display: none;  display: flex; flex-wrap: wrap;">
                <?php if(isset($rows)): ?>

                <?php foreach ($rows as $row):?>
                        <div class="input-container">
                            <input id="walk" type="radio" name="bedroomPaint" value="<?=$row->id?>">
                            <div class="radio-tile" style="background-color: <?=$row->color?>">
                                <label for="walk"><?=$row->name?></label>
                            </div>
                        </div>
                <?php endforeach;?>
                <?php endif; ?>

                </div>

                

                <label for="tile" class="lableForCollaps">Tile Styles</label>

                <div class="input-container">
                            <input id="defaultColor" type="radio" name="radio" disabled>
                            <div class="radio-tile" style="background-image: url(<?=ROOT?>/tiles/Interior_tile_1.jpeg);" >
                               
                            </div>
                    </div>
                    <p style="margin-left: 20px;">Default</p>
                    <div class="radio-tile-group"  style="display: none;  display: flex; flex-wrap: wrap;">

                    <?php for ($i = 2; $i <= 4; $i++): ?>

                    <div class="input-container">
                            <input id="defaultColor" type="radio" name="bedroomTile" value="Interior_tile_<?= $i ?>">
                            <div class="radio-tile" style="background-image: url(<?=ROOT?>/tiles/Interior_tile_<?= $i ?>.jpeg);">  
                            </div>
                    </div>
                    <?php endfor; ?>
               
                </div>
                    
                    </div>
</div>
<button type="button" class="collapsible">Exterior</button>
<div class="collaps-content">

                    <div class="checkbox-container">
                        <input type="checkbox" id="agreeCheck_exterior" name="agreeCheck" onchange="modify('agreeCheck_exterior','exteriorHiddenForm')" style="width: 20px; height: 20px; margin-top: 20px; margin-bottom: 20px; ">
                        <label for="agree" id="agree"> By selecting this, you are confirming that you have agree to modify your Living Room.</label><br>
                    </div>
<div id="exteriorHiddenForm" style="display: none;">
                   <label for="paint" class="lableForCollaps">Paint Colour</label>

                   <div class="input-container">
                            <input id="defaultColor" type="radio" name="Paint" disabled>
                            <div class="radio-tile" style="background-color: white;">
                                <label for="default">White</label>
                            </div>
                    </div>
                    <p style="margin-left: 20px;">Default</p>

                    <div class="radio-tile-group"  style="display: none;  display: flex; flex-wrap: wrap;">
                <?php if(isset($rows_exterior)): ?>

                <?php foreach ($rows_exterior as $row):?>
                        <div class="input-container">
                            <input id="walk" type="radio" name="exteriorPaint" value="<?=$row->id?>">
                            <div class="radio-tile" style="background-color: <?=$row->color?>">
                                <label for="walk"><?=$row->name?></label>
                            </div>
                        </div>
                <?php endforeach;?>
                <?php endif; ?>

                </div>

                

                <label for="tile" class="lableForCollaps">Tile Styles</label>

                <div class="input-container">
                            <input id="defaultColor" type="radio" name="radio" disabled>
                            <div class="radio-tile" style="background-image: url(<?=ROOT?>/tiles/Exterior_tile_1.jpeg);">
                               
                            </div>
                    </div>
                    <p style="margin-left: 20px;">Default</p>
                    <div class="radio-tile-group"  style="display: none;  display: flex; flex-wrap: wrap;">

                    <?php for ($i = 2; $i <= 4; $i++): ?>

                    <div class="input-container">
                            <input id="defaultColor" type="radio" name="exteriorTile" value="Exterior_tile_<?= $i ?>">
                            <div class="radio-tile" style="background-image: url(<?=ROOT?>/tiles/Exterior_tile_<?= $i ?>.jpeg);">  
                            </div>
                    </div>
                    <?php endfor; ?>
               
                </div>
                    
                    </div>
</div>
           
            </fieldset>

            
      

        <br><br>

        <fieldset class="FormFieldset" >
            <legend class="Formlegend">Payment Plan</legend>
            <div class="form-group">

            <div class="column">
                    <label for="locationLink">View Payment Plans</label>
                    <!-- <a href="<?=ROOT?>/price" target="_blank">
                    <button class="action-button">View</button>
                    </a> -->
                    <button id="viewPaymentPlans" class="action-button">View</button>
                </div>
                
                <div class="column">
                    <label for="landCondition">Payment Plan</label>
                        <select id="type" name="type" >
                            <option value="" disabled selected>Select Payment Plan</option>
                            <option <?= get_select2('type','1');?> value="1">DuoEase Pay</option>
                            <option <?= get_select2('type','2');?> value="2">TriEase Pay</option>
                            <option <?= get_select2('type','3');?> value="3">PentaEase Pay</option>
                        </select>
                </div>
                
                
                
            </div>
            </fieldset>
            
            <br><br>

            <fieldset class="FormFieldset" >
                <legend class="Formlegend">Term & Conditions</legend>

                <div class="column">
                    
                    <input type="checkbox" id="agree" name="agreeTerm" required>
                    <label for="agreeTerm">I agree to the <a href="<?=ROOT?>/pdf/TermsAndConditions.pdf" target="_blank" style="color: blue;"> terms and conditions </a></label>
                </div>
            </fieldset>  

            <button class="add___" style="width: 50%; font-size: medium; height: 40px; margin-top: 25px;" type="submit">Submit</button>
            
            </form>
        

    </div>

    <script>
    function modify(elementId,hiddenFormId){
  var checkbox = document.getElementById(elementId);
  var hiddenForm = document.getElementById(hiddenFormId);

  console.log(checkbox.checked)

  if (checkbox.checked) {
      hiddenForm.style.display = 'block';
  } else {
      hiddenForm.style.display = 'none';
  }

}
    document.getElementById('viewPaymentPlans').addEventListener('click', function(event) {
        event.preventDefault(); 
        window.open('<?= ROOT ?>/price', '_blank');
    });

    document.getElementById("requestForm").addEventListener("submit", function(event) {
        if (!document.getElementById("agreeTerm").checked) {
            event.preventDefault(); // Prevent form submission
            alert("Please agree to the terms and conditions.");
        }
    });
</script>

    <?php $this->view('includes/footer'); ?>
    <?php else: ?>
    <?php $this->view('404'); ?>
<?php endif; ?>

   

    