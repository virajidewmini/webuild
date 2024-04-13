<?php $this->view('includes/header')?> 

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
                <input type="radio" id="q1_option1" name="h8" value="None">
                <input type="radio" id="q1_option2" name="h8" value="Drizzle">
                <input type="radio" id="q1_option3" name="h8" value="Light">
                <input type="radio" id="q1_option4" name="h8" value="Heavy">
                
            </div>
            <div class="question">9.00am - 10.00am</div>
            <div class="optionDiv" >
                <input type="radio" id="q1_option1" name="h9" value="None">
                <input type="radio" id="q1_option2" name="h9" value="Drizzle">
                <input type="radio" id="q1_option3" name="h9" value="Light">
                <input type="radio" id="q1_option4" name="h9" value="Heavy">
                
            </div>
            <div class="question">10.00am - 11.00am</div>
            <div class="optionDiv" >
                <input type="radio" id="q1_option1" name="h10" value="None">
                <input type="radio" id="q1_option2" name="h10" value="Drizzle">
                <input type="radio" id="q1_option3" name="h10" value="Light">
                <input type="radio" id="q1_option4" name="h10" value="Heavy">
                
            </div>
            <div class="question">11.00am - 12.00pm</div>
            <div class="optionDiv" >
                <input type="radio" id="q1_option1" name="h11" value="None">
                <input type="radio" id="q1_option2" name="h11" value="Drizzle">
                <input type="radio" id="q1_option3" name="h11" value="Light">
                <input type="radio" id="q1_option4" name="h11" value="Heavy">
                
            </div>
            <div class="question">1.00pm - 2.00pm</div>
            <div class="optionDiv" >
                <input type="radio" id="q1_option1" name="h1" value="None">
                <input type="radio" id="q1_option2" name="h1" value="Drizzle">
                <input type="radio" id="q1_option3" name="h1" value="Light">
                <input type="radio" id="q1_option4" name="h1" value="Heavy">
                
            </div>
            <div class="question">2.00pm - 3.00pm</div>
            <div class="optionDiv" >
                <input type="radio" id="q1_option1" name="h2" value="None">
                <input type="radio" id="q1_option2" name="h2" value="Drizzle">
                <input type="radio" id="q1_option3" name="h2" value="Light">
                <input type="radio" id="q1_option4" name="h2" value="Heavy">
                
            </div>
            <div class="question">3.00pm - 4.00pm</div>
            <div class="optionDiv" >
                <input type="radio" id="q1_option1" name="h3" value="None">
                <input type="radio" id="q1_option2" name="h3" value="Drizzle">
                <input type="radio" id="q1_option3" name="h3" value="Light">
                <input type="radio" id="q1_option4" name="h3" value="Heavy">
                
            </div>
            <div class="question">4.00pm - 5.00pm</div>
            <div class="optionDiv" >
                <input type="radio" id="q1_option1" name="h4" value="None">
                <input type="radio" id="q1_option2" name="h4" value="Drizzle">
                <input type="radio" id="q1_option3" name="h4" value="Light">
                <input type="radio" id="q1_option4" name="h4" value="Heavy">
                
            </div>
        <br>

        <label class="v_label" id="tempe" name='tempe'style="font-weight: bolder;">Temperature</label>
       
        <input type="text" name="temp" id="temp" class="v_form-control" style=" width:400px; margin-left:32px;" required>
        <br>
        <label class="v_label" id="overallW" style="font-weight: bolder;">Overall Weather </label>
           
            <select id="type" name="overall" class="v_form-control" style=" width:400px; margin-left:10px" >
                <option value="" disabled selected>Select Weather Type</option>
                <option value="Sunny with Scattered Clouds">Sunny with Scattered Clouds</option>
                <option value="Partly Cloudy with Showers">Partly Cloudy with Showers</option>
                <option value="Overcast with Thunderstorms">Overcast with Thunderstorms </option>
                <option value="Rainy">Rainy </option>
                <option value="Clear and Windy">Clear and Windy </option>
                <option value="other">Other</option>
            </select>    
            <a class="form_btn form_btn-next">Next</a>
        </div>
        

    <!-- End of the First Form -->

    

 <!-- Third Form -->

<div class="v_form-step ">

        <h1 style="text-align: center; margin-bottom:30px;" >Work Description</h1>
        <label for="description">Work Description</label>
        <input type="text" name="description" id="description" class="v_form-control" style="height: 350px;">
        
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
        <input type="text" name="nature" id="nature" class="v_form-control" >

        <label for="challenge_description">Description</label>
        <input type="text" name="challenge_description" id="challenge_description" class="v_form-control" style="height: 150px;">

        <label for="impact">Impact of the Schedule</label>
        <br><br>
        <input type="radio" id="impact_yes" name="impact" value="Yes">
        <label for="yes">Yes</label>
        <input type="radio" id="impact_no" name="impact" value="No">
        <label for="no">No</label>

        <br><br>

        <label for="root_case">Root Case</label>
        <input type="text" name="root_case" id="root_case" class="v_form-control">

        <label for="face">How face it</label>
        <input type="text" name="face" id="face" class="v_form-control" style="height: 250px;">
        
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
        <input type="text" name="comment" id="comment" class="v_form-control" style="height: 150px;">
           
           
                <div style="display: flex;">
                <a href="#" class="form_btn form_btn-previous">Previous</a> 
                <a href="<?=ROOT?>/dailyprogressreport/" ><button class="v_submit_button" style="margin-left:500px; width:200px;" type="submit">Submit</button></a>
          
            </div>
            
           
        </div>

        <!-- End of the Final Form -->
        
    </form>
</div>

<script src="<?=ROOT?>/js/DailyProgressReport.js"></script>