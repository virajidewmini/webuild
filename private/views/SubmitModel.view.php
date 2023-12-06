<link rel="stylesheet" href="<?=ROOT?>/css/style.css" />


<div  class="table_header" >
        <h1 style="margin-left: 35%;">  Express Your Home Makeover Vision !</h1>
</div>
    <div class="form_container">
        <form>
            <fieldset class="FormFieldset" >
            <legend class="Formlegend"> Personal Details</legend>
            <div class="form-group">
                
                <div class="column">
                    <label for="occupation">Occupation</label>
                    <input type="text" id="occupation" name="occupation">
                </div>
                <div class="column">
                    <label for="lastName">Monthly Salary(LKR)</label>
                    
                    <select id="type" name="type" >
                        <option value="" disabled selected>Select Your Monthly Salary</option>
                        <option value="< 100 000">< 100 000</option>
                        <option value="100 000-300 000">100 000-300 000</option>
                        <option value="300 000-500 000">300 000-500 000</option>
                        <option value="500 000 <">500 000 <</option>
                    </select>

                </div>
            </div>
            </fieldset>
        </form>

        <br><br>

        <form>
            <fieldset class="FormFieldset" >
            <legend class="Formlegend"> Land Details</legend>
            <div class="form-group">
                
                <div class="column">
                    <label for="location">Location</label>
                    <input type="text" id="location" name="location">
                </div>
                <div class="column">
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
                </div>
                <div class="column">
                    <label for="locationLink">Location Link</label>
                    <input type="url" id="location" name="location">
                </div>
                <div class="column">
                    <label for="locationLink">Block Plan of the Land</label>
                    <button class="action-button">Upload</button>
                </div>
            </div>
            </fieldset>
        </form>

        <br><br>

        <form>
            <fieldset class="FormFieldset" >
            <legend class="Formlegend">Modification</legend>
            <button type="button" class="collapsible">Living Room</button>
                <div class="collaps-content">
                <div class="form-group">
                
                <div class="column">
                    <label for="location">Paint</label>
                    <a href="https://www.asianpaints.com/catalogue/colour-catalogue.html?f=room%3Aliving%20room%2Cliving%20room" class="button">Click me</a>
                </div>
                <div class="column">
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
                </div>
                <div class="column">
                    <label for="locationLink">Tile</label>
                    <button class="action-button">View Tile</button>
                </div>
                <div class="column">
                    <label for="locationLink">Block Plan of the Land</label>
                    <select id="type" name="type" >
                            <option value="" disabled selected>Select land topography</option>
                            <option value="Flat or Level Land">Flat or Level Land</option>
                            <option value="Hillside or Sloped Land">Hillside or Sloped Land</option>
                            <option value="Mountainous Terrain">Mountainous Terrain</option>
                            <option value="Waterfront or Coastal Land">Waterfront or Coastal Land</option>
                            <option value="Valley Land">Valley Land</option>
                            <option value="Other">Other</option>
                        </select>
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
        </form>

        <br><br>

        <fieldset class="FormFieldset" >
            <legend class="Formlegend">Payment Plan</legend>
            <div class="form-group">
                
                <div class="column">
                    <label for="landCondition">Payment Plan</label>
                        <select id="type" name="type" >
                            <option value="" disabled selected>Select Payment Plan</option>
                            <option value="Flat or Level Land">Flat or Level Land</option>
                            <option value="Hillside or Sloped Land">Hillside or Sloped Land</option>
                        </select>
                </div>
                <div class="column">
                    <label for="locationLink">View Payment Plans</label>
                    <a href="https://www.asianpaints.com/catalogue/colour-catalogue.html?f=room%3Aliving%20room" target="_blank">
                    <button class="action-button">View</button>
                    </a>
                </div>
                
                
            </div>
            </fieldset>
        </form>

        <br><br>
        <button class="add___" style="width: 50%; font-size: medium; height: 40px;">Submit</button>

    </div>

    <?php $this->view('includes/footer'); ?>

   

    