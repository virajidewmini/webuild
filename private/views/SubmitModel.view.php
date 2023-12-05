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
                    <label for="lastName">Monthly Salary</label>
                    
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
            <div class="form-group">
                <div class="column">
                <label for="landCondition">Payment Plan</label>
                </div>

                
                <div class="column">
                    
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
                    <button class="action-button">View</button>
                </div>
                
                
            </div>
            </fieldset>
        </form>

        <br><br>
        <button class="add___" style="width: 50%;">Add New</button>

    </div>

   

    