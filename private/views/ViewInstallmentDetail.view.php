<?php if ($_SESSION['role'] == 'Client') : ?>
<?php $this->view('includes/header')?>

<script src="https://cdn.jsdelivr.net/npm/js-md5@0.8.3/src/md5.min.js"></script>

<img src="<?=ROOT?>/img/Thank_you.png" alt="thank you"  class="thankYouImg">


     <h2>Payment Details</h2>

<table class="viewTable">
  
    <tr>
        <th class="viewTableHeader">Total Project Cost</th>
        <?php if(isset($rows)): ?>
        <td class="viewTableData" id="cost" >RS.<?=$rows[0]->total_amount?></td>
        <?php endif; ?>
    </tr>
    <?php if(isset($details)): ?>
    <tr> 
        <th class="viewTableHeader">Initial Payment Amount</th>
        <td class="viewTableData">RS. <span id="price"><?=$details[0]->amount?></span></td>
    </tr>
    <tr>
        <th class="viewTableHeader">Payment Due Date</th>
        <td class="viewTableData" id="date"><?=$details[0]->date?></td>
    </tr>
    <?php endif; ?>
  
</table>

<h2>Payment Methods</h2>

<a href="https://www.payhere.lk" target="_blank"><img style="width: 500px;  margin-left: 300px;" src="https://www.payhere.lk/downloads/images/payhere_square_banner.png" alt="PayHere" /></a>

<h2>Terms and Conditions</h2>


<p> <b>1.</b>  Clients may cancel the project within 24 hours of making the initial payment without incurring any cancellation fees.</p>
<p> <b>2.</b>  If cancellation is requested after the project has officially commenced, the cancellation fee will be calculated based on the work completed up to the cancellation date.</p>
<p> <b>3.</b>  Clients are required to notify us in writing of their intention to cancel the project, stating the reasons for cancellation.</p>
<p> <b>4.</b>  Refunds, if applicable, will be processed within 90 business days after deducting the applicable cancellation fee.</p>


<form action="https://sandbox.payhere.lk/pay/checkout" method="POST" id="payhere-payment-form">
    <input type="hidden" name="merchant_id" value="1225745"> 
    <input type="hidden" name="return_url" value="<?=ROOT?>/payment/">
    <input type="hidden" name="cancel_url" value="<?=ROOT?>/payment/fail">
    <input type="hidden" name="notify_url" value="http://localhost:8888/payhere">
    <input type="hidden" name="first_name" value="<?=$user[0]->firstname?>">
    <input type="hidden" name="last_name" value="<?=$user[0]->lastname?>">
    <input type="hidden" name="email" value="<?=$user[0]->email?>">
    <input type="hidden" name="phone" value="<?=$user[0]->contactnumber?>">
    <input type="hidden" name="address" value="<?=$user[0]->address?>">
    <input type="hidden" name="city" value="Galle">
    <input type="hidden" name="country" value="Sri Lanka">
    <input type="hidden" name="order_id" value="<?=$details[0]->id?>">
    <input type="hidden" name="items" value="<?=$details[0]->id?>">
    <input type="hidden" name="currency" value="LKR">
    <input type="hidden" name="amount" value="<?=$details[0]->amount?>">
    <input type="hidden" name="hash" id="hashField"> 

    <button class="v_submit_button" type="submit" onclick="calculateChecksum()"  style=" margin-left: 830px; margin-top: 30px;">Pay</button>
  </form>

  <script>
    function calculateChecksum() {
      const merchantSecret = 'MTI5NTAzNzQyOTI0NDczMzQzNzAyNjc2NjQ1NTIzMzg3MzkyNDM5MQ=='; // Replace!
      const merchantSecretHASH = md5(merchantSecret).toUpperCase();
      const stringToHash = 
            document.getElementById('payhere-payment-form').merchant_id.value +
            document.getElementById('payhere-payment-form').order_id.value + 
            document.getElementById('payhere-payment-form').amount.value+
            document.getElementById('payhere-payment-form').currency.value
            // ...add other required fields based on PayHere's instructions

        const hash = md5(stringToHash + merchantSecretHASH).toUpperCase();
        document.getElementById('hashField').value = hash;
    }
  </script>

<!-- <button class="v_submit_button" type="submit" onclick="calculateChecksum()"  style=" margin-left: 830px; margin-top: 30px;">Pay</button> -->
    

<?php $this->view('includes/footer'); ?>

<?php else : ?>
    <?php $this->view('404'); ?>
<?php endif; ?>