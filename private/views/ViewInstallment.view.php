<?php $this->view('includes/header')?>

<script src="https://cdn.jsdelivr.net/npm/js-md5@0.8.3/src/md5.min.js"></script>


<div class="table">
<div class="table_header">
            <h1>Payment Installment Details</h1>
            
        </div>
        <div class="table_section" style="height: 1000px;">
            <table>
                <thead>
                    <tr>
                        <th>Payment ID</th>
                        <th>Installment Number</th>
                        <th>Amount</th>
                        <th>Payment Due Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php if(isset($rows)): ?>

                <?php 
                    $most_recent_date = null;
                    $current_timestamp = time();

                    
                    foreach ($rows as $row){
                        $installment_timestamp = strtotime($row->date);

                        if ($installment_timestamp > $current_timestamp && (!$most_recent_date || $installment_timestamp < strtotime($most_recent_date)) && $row->status!== "Paid")  {
                            $most_recent_date = $row->date;
                        }
                    }
                    
                ?>
                    
                    
                
                    <?php foreach ($rows as $row):?>
                         <tr>
                        <td><?=$row->id?></td>
                        <td><?=$row->installement_number?></td>
                        <td><?=$row->amount?></td>
                        <td><?=$row->date?></td>
                        
                        <td>

                        <?php if($row->status !== "Paid"):?>

                            <?php if($row->date === $most_recent_date):?>
                                <a href="<?=ROOT?>/installment/installmentPayment/<?=$row->id?>"><button class="accept-button" id="paidButton" style="background-color: #4CAF50; ">Pay</button></a>
                        
                            <?php else: ?>
                                <button class="reject-button" style="background-color: #fbe400; cursor: not-allowed">Upcoming</button>
                            <?php endif; ?>
                        
                        <?php else: ?>
                            <button class="reject-button" style="background-color: #f44336; cursor: not-allowed">Completed</button>
                        <?php endif; ?>
                         
                        </td>
                        
                    </tr>

                    <?php endforeach;?>

            <?php else: ?>
                <h3>No Installment Details added Yet</h3>

            <?php endif; ?>

                </tbody>
            </table>
        </div>
    </div>

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

     

<?php $this->view('includes/footer'); ?>

