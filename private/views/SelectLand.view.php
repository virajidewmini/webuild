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

        

        <br><br>
        <button class="add___" style="width: 50%; font-size: medium; height: 40px;">Submit</button>

    </div>

    <?php $this->view('includes/footer'); ?>

   

    