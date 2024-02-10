<?php $this->view('includes/header')?>

<div  class="table_header" >
        <h1 style="margin-left: 35%;">Daily Progress Report</h1>
</div>
<div class="form_container">
    <div class="form_progressbar">
        <div class="form_progress" id="form_progress"></div>
        <div class="form_progress-step  form_progress-step-active" data-title="Intro"></div>
        <div class="form_progress-step" data-title="Intro"></div>
        <div class="form_progress-step" data-title="Intro"></div>
        <div class="form_progress-step" data-title="Intro"></div>
        <div class="form_progress-step" data-title="Intro"></div>
    </div>
   
    <form>

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
            <input type="radio" id="q1_option1" name="h8" value="None">
            <input type="radio" id="q1_option2" name="h8" value="Drizzle">
            <input type="radio" id="q1_option3" name="h8" value="Light">
            <input type="radio" id="q1_option4" name="h8" value="Heavy">
            
        </div>
        <div class="question">10.00am - 11.00am</div>
        <div class="optionDiv" >
            <input type="radio" id="q1_option1" name="h8" value="None">
            <input type="radio" id="q1_option2" name="h8" value="Drizzle">
            <input type="radio" id="q1_option3" name="h8" value="Light">
            <input type="radio" id="q1_option4" name="h8" value="Heavy">
            
        </div>
        <div class="question">11.00am - 12.00pm</div>
        <div class="optionDiv" >
            <input type="radio" id="q1_option1" name="h8" value="None">
            <input type="radio" id="q1_option2" name="h8" value="Drizzle">
            <input type="radio" id="q1_option3" name="h8" value="Light">
            <input type="radio" id="q1_option4" name="h8" value="Heavy">
            
        </div>
        <div class="question">1.00pm - 2.00pm</div>
        <div class="optionDiv" >
            <input type="radio" id="q1_option1" name="h8" value="None">
            <input type="radio" id="q1_option2" name="h8" value="Drizzle">
            <input type="radio" id="q1_option3" name="h8" value="Light">
            <input type="radio" id="q1_option4" name="h8" value="Heavy">
            
        </div>
        <div class="question">2.00pm - 3.00pm</div>
        <div class="optionDiv" >
            <input type="radio" id="q1_option1" name="h8" value="None">
            <input type="radio" id="q1_option2" name="h8" value="Drizzle">
            <input type="radio" id="q1_option3" name="h8" value="Light">
            <input type="radio" id="q1_option4" name="h8" value="Heavy">
            
        </div>
        <div class="question">3.00pm - 4.00pm</div>
        <div class="optionDiv" >
            <input type="radio" id="q1_option1" name="h8" value="None">
            <input type="radio" id="q1_option2" name="h8" value="Drizzle">
            <input type="radio" id="q1_option3" name="h8" value="Light">
            <input type="radio" id="q1_option4" name="h8" value="Heavy">
            
        </div>
        <div class="question">4.00pm - 5.00pm</div>
        <div class="optionDiv" >
            <input type="radio" id="q1_option1" name="h8" value="None">
            <input type="radio" id="q1_option2" name="h8" value="Drizzle">
            <input type="radio" id="q1_option3" name="h8" value="Light">
            <input type="radio" id="q1_option4" name="h8" value="Heavy">
            
        </div>

            </div>
            <a class="form_btn form_btn-next">Next</a>
        </div>

    <!-- End of the First Form -->
        <div class="v_form-step ">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" class="v_form-control">
            </div>

            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" class="v_form-control">
            </div>

            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" class="v_form-control">
            </div>
            <div class="form_btns-group">
                <a href="#" class="form_btn form_btn-previous">Previous</a>
                <a href="#" class="form_btn form_btn-next">Next</a>
            </div>
            

        </div>
        
    </form>
</div>

<script src="<?=ROOT?>/js/DailyProgressReport.js"></script>