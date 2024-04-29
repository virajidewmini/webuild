<?php if(Auth::getRole()== 'Supervisor'): ?>
<?php $this->view('includes/header')?> 

<div  class="table_header" >
        <h1 style="margin-left: 35%;">Daily Progress Report</h1>
</div>

<div class="form_container">
<form method="post" >
    
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
                <input type="radio" id="q1_option1" name="h8" value="None" <?= ($weatherDetail->hour_8 == 'None') ? 'checked' : '' ?>>
                <input type="radio" id="q1_option2" name="h8" value="Drizzle" <?= ($weatherDetail->hour_8 == 'Drizzle') ? 'checked' : '' ?>>
                <input type="radio" id="q1_option3" name="h8" value="Light" <?= ($weatherDetail->hour_8 == 'Light') ? 'checked' : '' ?>>
                <input type="radio" id="q1_option4" name="h8" value="Heavy" <?= ($weatherDetail->hour_8 == 'Heavy') ? 'checked' : '' ?>>
                
            </div>
            <div class="question">9.00am - 10.00am</div>
            <div class="optionDiv" >
                <input type="radio" id="q1_option1" name="h9" value="None" <?= ($weatherDetail->hour_9 == 'None') ? 'checked' : '' ?>>
                <input type="radio" id="q1_option2" name="h9" value="Drizzle" <?= ($weatherDetail->hour_9 == 'Drizzle') ? 'checked' : '' ?>>
                <input type="radio" id="q1_option3" name="h9" value="Light" <?= ($weatherDetail->hour_9 == 'Light') ? 'checked' : '' ?>>
                <input type="radio" id="q1_option4" name="h9" value="Heavy" <?= ($weatherDetail->hour_9 == 'Heavy') ? 'checked' : '' ?>>
                
            </div>
            <div class="question">10.00am - 11.00am</div>
            <div class="optionDiv" >
                <input type="radio" id="q1_option1" name="h10" value="None" <?= ($weatherDetail->hour_10 == 'None') ? 'checked' : '' ?>>
                <input type="radio" id="q1_option2" name="h10" value="Drizzle" <?= ($weatherDetail->hour_10 == 'Drizzle') ? 'checked' : '' ?>>
                <input type="radio" id="q1_option3" name="h10" value="Light" <?= ($weatherDetail->hour_10 == 'Light') ? 'checked' : '' ?>>
                <input type="radio" id="q1_option4" name="h10" value="Heavy" <?= ($weatherDetail->hour_10 == 'Heavy') ? 'checked' : '' ?>>
                
            </div>
            <div class="question">11.00am - 12.00pm</div>
            <div class="optionDiv" >
                <input type="radio" id="q1_option1" name="h11" value="None" <?= ($weatherDetail->hour_11 == 'None') ? 'checked' : '' ?>>
                <input type="radio" id="q1_option2" name="h11" value="Drizzle" <?= ($weatherDetail->hour_11 == 'Drizzle') ? 'checked' : '' ?>>
                <input type="radio" id="q1_option3" name="h11" value="Light" <?= ($weatherDetail->hour_11 == 'Light') ? 'checked' : '' ?>>
                <input type="radio" id="q1_option4" name="h11" value="Heavy" <?= ($weatherDetail->hour_11 == 'Heavy') ? 'checked' : '' ?>>
                
            </div>
            <div class="question">1.00pm - 2.00pm</div>
            <div class="optionDiv" >
                <input type="radio" id="q1_option1" name="h1" value="None" <?= ($weatherDetail->hour_1 == 'None') ? 'checked' : '' ?>>
                <input type="radio" id="q1_option2" name="h1" value="Drizzle" <?= ($weatherDetail->hour_1 == 'Drizzle') ? 'checked' : '' ?>>
                <input type="radio" id="q1_option3" name="h1" value="Light" <?= ($weatherDetail->hour_1 == 'Light') ? 'checked' : '' ?>>
                <input type="radio" id="q1_option4" name="h1" vvalue="Heavy" <?= ($weatherDetail->hour_1 == 'Heavy') ? 'checked' : '' ?>>
                
            </div>
            <div class="question">2.00pm - 3.00pm</div>
            <div class="optionDiv" >
                <input type="radio" id="q1_option1" name="h2" value="None" <?= ($weatherDetail->hour_2 == 'None') ? 'checked' : '' ?>>
                <input type="radio" id="q1_option2" name="h2" value="Drizzle" <?= ($weatherDetail->hour_2 == 'Drizzle') ? 'checked' : '' ?>>
                <input type="radio" id="q1_option3" name="h2" value="Light" <?= ($weatherDetail->hour_2 == 'Light') ? 'checked' : '' ?>>
                <input type="radio" id="q1_option4" name="h2" value="Heavy" <?= ($weatherDetail->hour_2 == 'Heavy') ? 'checked' : '' ?>>
                
            </div>
            <div class="question">3.00pm - 4.00pm</div>
            <div class="optionDiv" >
                <input type="radio" id="q1_option1" name="h3" value="None" <?= ($weatherDetail->hour_3 == 'None') ? 'checked' : '' ?>>
                <input type="radio" id="q1_option2" name="h3" value="Drizzle" <?= ($weatherDetail->hour_3 == 'Drizzle') ? 'checked' : '' ?>>
                <input type="radio" id="q1_option3" name="h3" value="Light" <?= ($weatherDetail->hour_3 == 'Light') ? 'checked' : '' ?>>
                <input type="radio" id="q1_option4" name="h3" value="Heavy" <?= ($weatherDetail->hour_3 == 'Heavy') ? 'checked' : '' ?>>
                
            </div>
            <div class="question">4.00pm - 5.00pm</div>
            <div class="optionDiv" >
                <input type="radio" id="q1_option1" name="h4" value="None" <?= ($weatherDetail->hour_4 == 'None') ? 'checked' : '' ?>>
                <input type="radio" id="q1_option2" name="h4" value="Drizzle" <?= ($weatherDetail->hour_4 == 'Drizzle') ? 'checked' : '' ?>">
                <input type="radio" id="q1_option3" name="h4" value="Light" <?= ($weatherDetail->hour_4 == 'Light') ? 'checked' : '' ?>">
                <input type="radio" id="q1_option4" name="h4" value="Heavy" <?= ($weatherDetail->hour_4 == 'Heavy') ? 'checked' : '' ?>>
                
            </div>
        <br>

        <label class="v_label" id="tempe" name='tempe'style="font-weight: bolder;">Temperature</label>
       
        <input type="text" name="temp" id="temp" value="<?= get_var('temp',$weatherDetail->temperature);?>" class="v_form-control" style=" width:400px; margin-left:32px;" required>
        <br>
        <label class="v_label" id="overallW" style="font-weight: bolder;">Overall Weather </label>
           
            <select id="type" name="overall" class="v_form-control" style=" width:400px; margin-left:10px" >
            <option value="<?= get_var('overall',$weatherDetail->overall);?>" selected><?= get_var('overall',$weatherDetail->overall);?></option>
                <option value="Sunny with Scattered Clouds">Sunny with Scattered Clouds</option>
                <option value="Partly Cloudy with Showers">Partly Cloudy with Showers</option>
                <option value="Overcast with Thunderstorms">Overcast with Thunderstorms </option>
                <option value="Rainy">Rainy </option>
                <option value="Clear and Windy">Clear and Windy </option>
                <option value="other">Other</option>
            </select>    
            

        <h1 style="text-align: center; margin-bottom:30px;" >Work Description</h1>
        <label for="description">Work Description</label>
        <input type="text" name="description" value="<?= get_var('work_description',$rows->work_description);?>" id="description" class="v_form-control" style="height: 350px;">
        
            
    



        <h1 style="text-align: center; margin-bottom:30px;" >Challenges</h1>
        <label for="nature">Nature of the Challenge</label>
        <input type="text" name="nature" value="<?= get_var('challenge',$challengeDetail->challenge);?>" id="nature" class="v_form-control" >

        <label for="challenge_description">Description</label>
        <input type="text" name="challenge_description" value="<?= get_var('description',$challengeDetail->description);?>" id="challenge_description" class="v_form-control" style="height: 150px;">

        <label for="impact">Impact of the Schedule</label>
        <br><br>
        
        <input type="radio" id="impact_yes" name="impact" value="Yes" <?= ($challengeDetail->impact == 'Yes') ? 'checked' : '' ?>>
        <label for="impact_yes">Yes</label>

        <input type="radio" id="impact_no" name="impact" value="No" <?= ($challengeDetail->impact == 'No') ? 'checked' : '' ?>>
        <label for="impact_no">No</label>


        <br><br>

        <label for="root_case">Root Case</label>
        <input type="text" name="root_case" value="<?= get_var('root_case',$challengeDetail->root_case);?>" id="root_case" class="v_form-control">

        <label for="face">How face it</label>
        <input type="text" name="face" value="<?= get_var('face_it',$challengeDetail->face_it);?>" id="face" class="v_form-control" style="height: 250px;">
        
           

        <h1 style="text-align: center; margin-bottom:30px;" >General Note</h1>
        <label for="comment">General Note & Comments</label>
        <input type="text" name="comment" value="<?= get_var('comment',$rows->comment);?>" id="comment" class="v_form-control" style="height: 150px;">
           
           
                
                
                <a href="<?=ROOT?>/dailyprogressreport/" ><button class="v_submit_button" style="margin-left:750px; width:200px;" type="submit">Submit</button></a>
          
            
            
           
        
        
    </form>
</div>
</div>

<?php else : ?>
    <?php $this->view('404'); ?>
<?php endif; ?>