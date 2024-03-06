<?php $this->view('includes/header')?>

<img src="<?=ROOT?>/img/Thank_you.png" alt="thank you"  class="thankYouImg">

<p style="text-align: center; font-weight: 500;">Thank you for choosing our services! We appreciate your trust and look forward to 
    working together on your construction project. Feel free to reach out if you have any
     questions. Excited to bring your vision to life! To officially kickstart your project, kindly proceed with the initial payment.</p>

     <h2>Payment Details</h2>

<table class="viewTable">
  
    <tr>
        <th class="viewTableHeader">Total Project Cost</th>
        <td class="viewTableData" id="cost" >RS. 200 000 000</td>
    </tr>
    
    <tr> 
        <th class="viewTableHeader">Initial Payment Amount</th>
        <td class="viewTableData">RS. <span id="price">2 000 000</span></td>
    </tr>
    <tr>
        <th class="viewTableHeader">Payment Due Date</th>
        <td class="viewTableData" id="date">24.01.2024</td>
    </tr>

  
</table>

<h2>Payment Methods</h2>

<a href="https://www.payhere.lk" target="_blank"><img style="width: 500px;  margin-left: 300px;" src="https://www.payhere.lk/downloads/images/payhere_square_banner.png" alt="PayHere" /></a>

<h2>Terms and Conditions</h2>


<p> <b>1.</b>  Clients may cancel the project within 24 hours of making the initial payment without incurring any cancellation fees.</p>
<p> <b>2.</b>  If cancellation is requested after the project has officially commenced, the cancellation fee will be calculated based on the work completed up to the cancellation date.</p>
<p> <b>3.</b>  Clients are required to notify us in writing of their intention to cancel the project, stating the reasons for cancellation.</p>
<p> <b>4.</b>  Refunds, if applicable, will be processed within 90 business days after deducting the applicable cancellation fee.</p>

<button class="v_submit_button" onclick="buyNow()"  style=" margin-left: 830px; margin-top: 30px;">Pay</button>

<?php $this->view('includes/footer'); ?>