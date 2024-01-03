<?php $this->view('includes/header')?>

<div style="margin-left: 400px;" class="table_header" >
        <h1>Quotation Rejections</h1>
</div>
<p style="color: #E5863D; margin-left: 50px;">We apologize that the following quotations were not accepted. 
                We appreciate your consideration and welcome any feedback to enhance 
                our services for future opportunities.</p>

    <div class="form_container">
        <form method="post"  class="v_form">
            
            <label class="v_label" id="rejectionReason">Reasons for Rejection</label>

                    <div class="checkbox-container">
                        <input type="checkbox" id="highCost" name="reasons[]" value="Cost too high" style="width: 20px; height: 20px; margin-top: 20px;  ">
                        <label for="agree" id="agree">Cost too high</label><br>

                        <input type="checkbox" id="terms" name="reasons[]" value="Unsatisfactory terms" style="width: 20px; height: 20px; margin-top: 20px;  ">
                        <label for="agree" id="agree">Unsatisfactory terms</label><br>

                        <input type="checkbox" id="noDetail" name="reasons[]" value="No detailed quotation provided" style="width: 20px; height: 20px; margin-top: 20px;  ">
                        <label for="agree" id="agree">No detailed quotation provided</label><br>

                        <input type="checkbox" id="provider" name="reasons[]" value="Better offer from another provider" style="width: 20px; height: 20px; margin-top: 20px;  ">
                        <label for="agree" id="agree">Better offer from another provider</label><br>

                        <input type="checkbox" id="scope" name="reasons[]" value="Scope of work not clear" style="width: 20px; height: 20px; margin-top: 20px;  ">
                        <label for="agree" id="agree">Scope of work not clear</label><br>

                        <input type="checkbox" id="other" name="reasons[]" value="Other" style="width: 20px; height: 20px; margin-bottom: 20px;  margin-top: 20px;  ">
                        <label for="agree" id="agree">Other</label><br>
                    </div>

            <label for="description">Describe above reasons</label>
            <input type="text" name="description" id="description" class="v_form-control" style="height: 150px;" required>

            <label for="rating">Please give ratings</label><br><br><br>

            <label for="rating">1. Clarity of information</label><br>
            <div class="rate">
                <input type="radio" id="star5" name="rate" value="5" />
                <label for="star5" title="text">5 stars</label>
                <input type="radio" id="star4" name="rate" value="4" />
                <label for="star4" title="text">4 stars</label>
                <input type="radio" id="star3" name="rate" value="3" />
                <label for="star3" title="text">3 stars</label>
                <input type="radio" id="star2" name="rate" value="2" />
                <label for="star2" title="text">2 stars</label>
                <input type="radio" id="star1" name="rate" value="1" />
                <label for="star1" title="text">1 star</label>
            </div>
            <br><br><br>
            <label for="rating">2. Transparency in pricing</label><br>
            <div class="rate">
                <input type="radio" id="star5_2" name="rate_2" value="5" />
                <label for="star5_2" title="text">5 stars</label>
                <input type="radio" id="star4_2" name="rate_2" value="4" />
                <label for="star4_2" title="text">4 stars</label>
                <input type="radio" id="star3_2" name="rate_2" value="3" />
                <label for="star3_2" title="text">3 stars</label>
                <input type="radio" id="star2_2" name="rate_2" value="2" />
                <label for="star2_2" title="text">2 stars</label>
                <input type="radio" id="star1_2" name="rate_2" value="1" />
                <label for="star1_2" title="text">1 star</label>
            </div>
            <br><br><br>
            <label for="rating">3. Presentation of scope of work</label><br>
            <div class="rate">
                <input type="radio" id="star5_3" name="rate_3" value="5" />
                <label for="star5_3" title="text">5 stars</label>
                <input type="radio" id="star4_3" name="rate_3" value="4" />
                <label for="star4_3" title="text">4 stars</label>
                <input type="radio" id="star3_3" name="rate_3" value="3" />
                <label for="star3_3" title="text">3 stars</label>
                <input type="radio" id="star2_3" name="rate_3" value="2" />
                <label for="star2_3" title="text">2 stars</label>
                <input type="radio" id="star1_3" name="rate_3" value="1" />
                <label for="star1_3" title="text">1 star</label>
            </div>

            <br><br><br>
            <label for="rating">4. Overall satisfaction</label><br>
            <div class="rate">
                <input type="radio" id="star5_4" name="rate_4" value="5" />
                <label for="star5_4" title="text">5 stars</label>
                <input type="radio" id="star4_4" name="rate_4" value="4" />
                <label for="star4_4" title="text">4 stars</label>
                <input type="radio" id="star3_4" name="rate_4" value="3" />
                <label for="star3_4" title="text">3 stars</label>
                <input type="radio" id="star2_4" name="rate_4" value="2" />
                <label for="star2_4" title="text">2 stars</label>
                <input type="radio" id="star1_4" name="rate_4" value="1" />
                <label for="star1_4" title="text">1 star</label>
            </div>

            <br><br><br><br>

            <label for="comment">Comments & Suggestions</label>
            <input type="text" name="comment" id="comment" class="v_form-control" style="height: 150px;" required>

            <div class="checkbox-container">
                        <input type="checkbox" id="otherQuotation" name="otherQuotation" style="width: 20px; height: 20px; margin-bottom: 20px; ">
                        <label for="agree" id="agree">Please send another Quotaion</label><br>
            </div>

            <a href="<?=ROOT?>/clientcomplaint"> <button class="v_submit_button" type="submit">Submit</button></a>
           

        </form>
    </div>

<?php $this->view('includes/footer'); ?>
