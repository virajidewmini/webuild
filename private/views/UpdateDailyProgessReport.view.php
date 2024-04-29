<?php if(Auth::getRole()== 'Supervisor'): ?>
<?php $this->view('includes/header')?> 

<style>
    .errors{
    padding-bottom: 20px;
    color: red;
  }
</style>

<div  class="table_header" >
        <h1 style="margin-left: 35%;">Daily Progress Report</h1>
</div>
 
<div class="form_container">
    <div class="form_progressbar">
        <div class="form_progress" id="form_progress"></div>
        <div class="form_progress-step  form_progress-step-active" data-title="Weather Report"></div>
        <div class="form_progress-step" data-title="Work Description"></div>
        <div class="form_progress-step" data-title="Challenges"></div>
        <div class="form_progress-step" data-title="General Note"></div>
    </div>
   
   
    <form method="post" >
    <?php if (isset($errors)) : ?>
            <div class="errors">
                <?php foreach ($errors as $error) : ?>
                    <p class="error"><?= $error ?></p>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>
    
    <!-- First Form -->
        <div class="v_form-step v_form-step-active">
            <h1 style="text-align: center; margin-bottom:30px;" >Weather Report</h1>
            <label class="v_label" id="rainHour" style="font-weight: bolder;">Rain Hours</label>
           
                <div class="optionDiv">
                    <label class="v_label" for="option">None</label>
                    <label class="v_label" for="option">Drizzle</label>
                    <label class="v_label" for="option">Light</label>
                    <label class="v_label"  for="option">Heavy</label>
                </div>

            <div class="question">8.00am - 9.00am</div>
            <div class="optionDiv" >
                <input type="radio" id="q1_option1" name="h8" value="None" <?= (get_var('h8') === 'None') ? 'checked' : ''; ?>>
                <input type="radio" id="q1_option2" name="h8" value="Drizzle" <?= (get_var('h8') === 'Drizzle') ? 'checked' : ''; ?>>
                <input type="radio" id="q1_option3" name="h8" value="Light" <?= (get_var('h8') === 'Light') ? 'checked' : ''; ?>>
                <input type="radio" id="q1_option4" name="h8" value="Heavy" <?= (get_var('h8') === 'Heavy') ? 'checked' : ''; ?>>
                
            </div>
            <div class="question">9.00am - 10.00am</div>
            <div class="optionDiv" >
                <input type="radio" id="q1_option1" name="h9" value="None" <?= (get_var('h9') === 'None') ? 'checked' : ''; ?>>
                <input type="radio" id="q1_option2" name="h9" value="Drizzle" <?= (get_var('h9') === 'Drizzle') ? 'checked' : ''; ?>>
                <input type="radio" id="q1_option3" name="h9" value="Light" <?= (get_var('h9') === 'Light') ? 'checked' : ''; ?>>
                <input type="radio" id="q1_option4" name="h9" value="Heavy" <?= (get_var('h9') === 'Heavy') ? 'checked' : ''; ?>>
                
            </div>
            <div class="question">10.00am - 11.00am</div>
            <div class="optionDiv" >
                <input type="radio" id="q1_option1" name="h10" value="None" <?= (get_var('h10') === 'None') ? 'checked' : ''; ?>>
                <input type="radio" id="q1_option2" name="h10" value="Drizzle" <?= (get_var('h10') === 'Drizzle') ? 'checked' : ''; ?>>
                <input type="radio" id="q1_option3" name="h10" value="Light" <?= (get_var('h10') === 'Light') ? 'checked' : ''; ?>>
                <input type="radio" id="q1_option4" name="h10" value="Heavy" <?= (get_var('h10') === 'Heavy') ? 'checked' : ''; ?>>
                
            </div>
            <div class="question">11.00am - 12.00pm</div>
            <div class="optionDiv" >
                <input type="radio" id="q1_option1" name="h11" value="None" <?= (get_var('h11') === 'None') ? 'checked' : ''; ?>>
                <input type="radio" id="q1_option2" name="h11" value="Drizzle" <?= (get_var('h11') === 'Drizzle') ? 'checked' : ''; ?>>
                <input type="radio" id="q1_option3" name="h11" value="Light" <?= (get_var('h11') === 'Light') ? 'checked' : ''; ?>>
                <input type="radio" id="q1_option4" name="h11" value="Heavy" <?= (get_var('h11') === 'Heavy') ? 'checked' : ''; ?>>
                
            </div>
            <div class="question">1.00pm - 2.00pm</div>
            <div class="optionDiv" >
                <input type="radio" id="q1_option1" name="h1" value="None" <?= (get_var('h1') === 'None') ? 'checked' : ''; ?>>
                <input type="radio" id="q1_option2" name="h1" value="Drizzle" <?= (get_var('h1') === 'Drizzle') ? 'checked' : ''; ?>>
                <input type="radio" id="q1_option3" name="h1" value="Light" <?= (get_var('h1') === 'Light') ? 'checked' : ''; ?>>
                <input type="radio" id="q1_option4" name="h1" value="Heavy" <?= (get_var('h1') === 'Heavy') ? 'checked' : ''; ?>>
                
            </div>
            <div class="question">2.00pm - 3.00pm</div>
            <div class="optionDiv" >
                <input type="radio" id="q1_option1" name="h2" value="None" <?= (get_var('h2') === 'None') ? 'checked' : ''; ?>>
                <input type="radio" id="q1_option2" name="h2" value="Drizzle" <?= (get_var('h2') === 'Drizzle') ? 'checked' : ''; ?>>
                <input type="radio" id="q1_option3" name="h2" value="Light" <?= (get_var('h2') === 'Light') ? 'checked' : ''; ?>>
                <input type="radio" id="q1_option4" name="h2" value="Heavy" <?= (get_var('h2') === 'Heavy') ? 'checked' : ''; ?>>
                
            </div>
            <div class="question">3.00pm - 4.00pm</div>
            <div class="optionDiv" >
                <input type="radio" id="q1_option1" name="h3" value="None" <?= (get_var('h3') === 'None') ? 'checked' : ''; ?>>
                <input type="radio" id="q1_option2" name="h3" value="Drizzle" <?= (get_var('h3') === 'Drizzle') ? 'checked' : ''; ?>> 
                <input type="radio" id="q1_option3" name="h3" value="Light" <?= (get_var('h3') === 'Light') ? 'checked' : ''; ?>>
                <input type="radio" id="q1_option4" name="h3" value="Heavy" <?= (get_var('h3') === 'Heavy') ? 'checked' : ''; ?>>
                
            </div>
            <div class="question">4.00pm - 5.00pm</div>
            <div class="optionDiv" >
                <input type="radio" id="q1_option1" name="h4" value="None" <?= (get_var('h4') === 'None') ? 'checked' : ''; ?>>
                <input type="radio" id="q1_option2" name="h4" value="Drizzle" <?= (get_var('h4') === 'Drizzle') ? 'checked' : ''; ?>>
                <input type="radio" id="q1_option3" name="h4" value="Light" <?= (get_var('h4') === 'Light') ? 'checked' : ''; ?>>
                <input type="radio" id="q1_option4" name="h4" value="Heavy" <?= (get_var('h4') === 'Heavy') ? 'checked' : ''; ?>>
                
            </div>
        <br>

        <label class="v_label" for="temp" style="font-weight: bolder;">Temperature</label>
       
        <input type="text" name="temp" id="temp" class="v_form-control" style=" width:400px; margin-left:32px;" value= "<?= get_var('temp');?>">
        <br>
        <label class="v_label" id="overallW" for="overall" style="font-weight: bolder;">Overall Weather </label>
           
            <select id="type" name="overall" class="v_form-control" style=" width:400px; margin-left:10px" >
                <option value="" disabled selected>Select Weather Type</option>
                <option <?= get_select2('overall','Sunny with Scattered Clouds');?> value="Sunny with Scattered Clouds">Sunny with Scattered Clouds</option>
                <option <?= get_select2('overall','Partly Cloudy with Showers');?> value="Partly Cloudy with Showers">Partly Cloudy with Showers</option>
                <option <?= get_select2('overall','Overcast with Thunderstorms');?> value="Overcast with Thunderstorms">Overcast with Thunderstorms </option>
                <option <?= get_select2('overall','Rainy');?> value="Rainy">Rainy </option>
                <option <?= get_select2('overall','Clear and Windy');?> value="Clear and Windy">Clear and Windy </option>
                <option <?= get_select2('overall','other');?> value="other">Other</option>
            </select>    
            <a class="form_btn form_btn-next">Next</a>
        </div>
        

    <!-- End of the First Form -->

    

 <!-- Third Form -->

<div class="v_form-step ">

        <h1 style="text-align: center; margin-bottom:30px;" >Work Description</h1>
        <label for="description">Work Description</label>
        <input type="text" name="description" id="description" class="v_form-control" style="height: 350px;" value= "<?= get_var('description');?>">
        
            <div class="form_btns-group">
                <a href="#" class="form_btn form_btn-previous">Previous</a>
                <a href="#" class="form_btn form_btn-next">Next</a>
            </div>
    

</div>

<!-- End of the Third Form -->

<!-- Final Form -->
    <div class="v_form-step ">

        <h1 style="text-align: center; margin-bottom:30px;" >Challenges</h1>
        <label for="nature">Nature of the Challenge</label>
        <input type="text" name="nature" id="nature" class="v_form-control" value= "<?= get_var('nature');?>">

        <label for="challenge_description">Description</label>
        <input type="text" name="challenge_description" id="challenge_description" class="v_form-control" style="height: 150px;" value= "<?= get_var('challenge_description');?>">

        <label for="impact">Impact of the Schedule</label>
        <br><br>
        <input type="radio" id="impact_yes" name="impact" value="Yes" <?= (get_var('impact') === 'Yes') ? 'checked' : ''; ?>>
        <label for="yes">Yes</label>
        <input type="radio" id="impact_no" name="impact" value="No" <?= (get_var('impact') === 'No') ? 'checked' : ''; ?>>
        <label for="no">No</label>

        <br><br>

        <label for="root_case">Root Case</label>
        <input type="text" name="root_case" id="root_case" class="v_form-control" value= "<?= get_var('root_case');?>">

        <label for="face">How face it</label>
        <input type="text" name="face" id="face" class="v_form-control" style="height: 250px;" value= "<?= get_var('face');?>">
        
            <div class="form_btns-group">
                <a href="#" class="form_btn form_btn-previous">Previous</a>
                <a href="#" class="form_btn form_btn-next">Next</a>
            </div>
          

    </div>

<!-- End of the Final Form -->


    <!-- Final Form -->

    

        <div class="v_form-step ">

        <h1 style="text-align: center; margin-bottom:30px;" >General Note</h1>
        <label for="comment">General Note & Comments</label>
        <input type="text" name="comment" id="comment" class="v_form-control" style="height: 150px;" value= "<?= get_var('comment');?>">
           
           
                <div style="display: flex;">
                <a href="#" class="form_btn form_btn-previous">Previous</a> 
                <a href="<?=ROOT?>/dailyprogressreport/" ><button class="v_submit_button" style="margin-left:500px; width:200px;" type="submit">Submit</button></a>
          
            </div>
            
           
        </div>

        <!-- End of the Final Form -->
        
    </form>
</div>

<script src="<?=ROOT?>/js/DailyProgressReport.js"></script>

<?php else : ?>
    <?php $this->view('404'); ?>
<?php endif; ?>