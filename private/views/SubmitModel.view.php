<link rel="stylesheet" href="<?=ROOT?>/css/style.css" />



<div  class="table_header" >
        <h1 style="margin-left: 35%;">  Express Your Home Makeover Vision !</h1>
</div>
    <div class="form_container">
        <form method="post">
            
            <fieldset class="FormFieldset" >
            <legend class="Formlegend"> Personal Details</legend>
            <div class="form-group">
                
                <div class="column">
                    <label for="occupation">Occupation</label>
                    <input type="text" id="occupation" name="occupation">
                </div>
                <div class="column">
                    <label for="lastName">Monthly Salary(LKR)</label>
                    
                    <select id="type" name="salary" >
                        <option value="" disabled selected>Select Your Monthly Salary</option>
                        <option value="< 100 000">< 100 000</option>
                        <option value="100 000-300 000">100 000-300 000</option>
                        <option value="300 000-500 000">300 000-500 000</option>
                        <option value="500 000 <">500 000 <</option>
                    </select>

                </div>

                <div class="column">
                    <label for="proof">Salary Proofing Document</label>
                    <p>Upload monthly salary sheet or any kind of your monthly income proof docuxment</p>
                    

                    <!-- <input type="file" name="imageFile" id="imageFile" accept="image/*" required>
        <button type="submit">Upload Image</button> -->
                    <button class="action-button">Upload</button>
                    <!-- <div class="img-container">
                        <input type="file" id="file" accept="image/*" hidden>
                       
                        <div style="">
                            <button class="btn select-image" style="margin-left: 80px;">Select Image</button>
                        </div>
                  
                    </div> -->
                </div>

            </div>
            </fieldset>

        <br><br>

            <fieldset class="FormFieldset" >
            <legend class="Formlegend"> Land Details</legend>
            <div class="form-group">
                
                <div class="column">
                    <label for="Street">Street</label>
                    <input type="text" id="street" name="street">
                </div>
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
                    <label for="town">Town</label>
                    <input type="text" id="town" name="town">
                </div>
                <div class="column">
                    <label for="town">District</label>
                    <select id="selectDistrict" name="district">
                        <option>Choose a District</option>
                    </select>
                </div>
                <div class="column">
                    <label for="area">Land Area(Perch)</label>
                    <input type="test" id="area" name="area">
                </div>
                <div class="column">
                    <label for="plan">Land Photograph</label>
                    <button class="action-button">Upload Photograph</button>
                </div>
                <div class="column">
                    <label for="plan">Block Plan of the Land</label>
                    <input type="file" name="pdfFile" id="pdfFile" class="real-file" accept=".pdf" hidden="hidden">
                    <button class="action-button">Upload Block Plan </button> 
                </div>
            </div>
            </fieldset>
            <button class="add___" style="width: 50%; font-size: medium; height: 40px;">Submit</button>
            
        </form>


        <br><br>

       
            <fieldset class="FormFieldset" >
            <legend class="Formlegend">Modification</legend>
            
            <button type="button" class="collapsible">Living Room</button>
                <div class="collaps-content">
                    <div class="checkbox-container">
                        <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" onchange="changeWennako()" style="width: 20px; height: 20px; margin-top: 20px; margin-bottom: 20px; ">
                        <label for="agree" id="agree"> By selecting this, you are confirming that you have agree to modify your house.</label><br>
                    </div>

                    
                   <div id="hiddenForm" style="display: none;">
                   <label for="paint" class="lableForCollaps">Paint Colour</label>

                   <div class="input-container">
                            <input id="walk" type="radio" name="radio">
                            <div class="radio-tile" style="background-color: white;">
                                <label for="walk">White</label>
                            </div>
                        </div>
                    <p style="margin-left: 20px;">Default</p>
                    <div class="radio-tile-group"  style="display: none;  display: flex; flex-wrap: wrap;">

                    

                <?php if(isset($rows)): ?>

                <?php foreach ($rows as $row):?>
                        <div class="input-container">
                            <input id="walk" type="radio" name="radio">
                            <div class="radio-tile" style="background-color: <?=$row->color?>">
                                <label for="walk"><?=$row->name?></label>
                            </div>
                        </div>
                <?php endforeach;?>
                <?php endif; ?>

                    <!-- <div class="input-container">
                            <input id="bike" type="radio" name="radio">
                            <div class="radio-tile">
                                <label for="bike">Bike</label>
                            </div>
                    </div>

                    <div class="input-container">
                        <input id="car" type="radio" name="radio">
                        <div class="radio-tile" style="background-color: aquamarine;">
                            <label for="car">Drive</label>
                        </div>
                    </div> 

                    <div class="input-container">
                        <input id="fly" type="radio" name="radio">
                        <div class="radio-tile">
                            <label for="fly">Fly</label>
                        </div>
                    </div> -->

                </div>
                </div>
                    </div>
                
            <button type="button" class="collapsible">Dining Room</button>
<div class="collaps-content">
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
</div>
<button type="button" class="collapsible">Kitchen</button>
<div class="collaps-content">
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
</div>
<button type="button" class="collapsible">Study Room</button>
<div class="collaps-content">
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
</div>
<button type="button" class="collapsible">Balcony</button>
<div class="collaps-content">
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
</div>
<button type="button" class="collapsible">Bedroom</button>
<div class="collaps-content">
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
</div>
           
            </fieldset>
      

        <br><br>

        <fieldset class="FormFieldset" >
            <legend class="Formlegend">Payment Plan</legend>
            <div class="form-group">

            <div class="column">
                    <label for="locationLink">View Payment Plans</label>
                    <a href="<?=ROOT?>/price" target="_blank">
                    <button class="action-button">View</button>
                    </a>
                </div>
                
                <div class="column">
                    <label for="landCondition">Payment Plan</label>
                        <select id="type" name="type" >
                            <option value="" disabled selected>Select Payment Plan</option>
                            <option value="DuoEase Pay">DuoEase Pay</option>
                            <option value="TriEase Pay">TriEase Pay</option>
                            <option value="PentaEase Pay">PentaEase Pay</option>
                        </select>
                </div>
                
                
                
            </div>
            </fieldset>  
        <!-- </form>

        <br><br>
         <button class="add___" style="width: 50%; font-size: medium; height: 40px;">Submit</button> -->
        <!-- <a href="<?=ROOT?>/clientcomplaint"> <button class="v_submit_button" type="submit">Submit</button></a> -->

    </div>

    <script>
    function changeWennako(){
  var checkbox = document.getElementById('vehicle1');
  var hiddenForm = document.getElementById('hiddenForm');

  console.log(checkbox.checked)

  if (checkbox.checked) {
      hiddenForm.style.display = 'block';
  } else {
      hiddenForm.style.display = 'none';
  }

}</script>

    <?php $this->view('includes/footer'); ?>

   

    