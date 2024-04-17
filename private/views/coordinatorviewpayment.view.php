<?php if(Auth::getRole()== 'Project Coordinator'): ?>
<?php $this->view('includes/header')?>
<!-- <pre><?php print_r($rows['remaining_amount']);?></pre> -->
<br>
<!-- <pre><?php print_r("gggggggggggg");?></pre> -->
<!-- <br><pre><?php print_r($rows["total_amount"]->total_amount);?></pre> -->

    <div style="text-align:center;"><h1> Details of the Payments </h1></div>
    <div style="text-align:center;"><h3> Project ID : <?= $rows["project_id"];?> </h3></div>

    <br>
            <div>Total Amount :<?= $rows["total_amount"]->total_amount;?></div>
            <div>Paid Amount :<?php print_r(($rows["total_amount"]->total_amount) - ($rows["remaining_amount"]->total_amount))?></div>
            <div>Remaining Amount :<?= $rows["remaining_amount"]->total_amount;?></div> 

    <br>    

    <div class="table">
        <div class="table_header">
            <div style="display: flex;" >
                <h3>  Installments </h3>
            </div>
            
        </div>
        <div class="table_section">
            <table>
                <thead>
                    <tr>
                        <th>Installment Number</th>
                        <th>Date</th>
                        <th>Amount</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($rows['installemets'] as $row) :?>
                        <?php if($row->status=="Paid"):?>
                            <tr style="background-color:#f2781b">                       
                                <td style="color: white;"><?=$row->installement_number?></td>
                                <td style="color: white;"><?=$row->date?></td>
                                <td style="color: white;"><?=$row->amount?></td>
                                <td style="color: white;"><?=$row->status?></td>  
                                 
                                
                            </tr>
                        <?php elseif($row->status=="Notified"):?>
                            <tr style="background-color:#2ecc71">                       
                                <td style="color: white;"><?=$row->installement_number?></td>
                                <td style="color: white;"><?=$row->date?></td>
                                <td style="color: white;"><?=$row->amount?></td>
                                <td style="color: white;"><?=$row->status?></td>  
                                    
                                
                            </tr>
                        <?php elseif($row->status=="Unpaid"):?>
                            <tr>                       
                                <td><?=$row->installement_number?></td>
                                <td><?=$row->date?></td>
                                <td><?=$row->amount?></td>
                                <td><?=$row->status?></td>  
                                    
                                
                            </tr>
                        <?php endif;?>
                    <?php endforeach;?>
                </tbody>
            </table>
        </div>    
    </div>

   <br><br>
   <script>
        document.addEventListener("DOMContentLoaded", function() {
            const toggleButton = document.getElementById("toggleButton");
            const hiddenContent = document.getElementById("hiddenContent");

            toggleButton.addEventListener("click", function() {
                if (hiddenContent.style.display === "none") {
                    hiddenContent.style.display = "block";
                    toggleButton.value = "Hide Payment Plan";
                } else {
                    hiddenContent.style.display = "none";
                    toggleButton.value = "View Payment Plan";
                }
            });
        });
    </script>
        
    <div style="display: flex; justify-content:center; margin-left: 1036px;">
        <input id="toggleButton" type="submit" value="View Payment Plan" class="cancel-button">
    </div>







        <div id="hiddenContent" style="display: none;">
    
                <div style="text-align:center;"><h3> Details of the Payment Paln </h3></div>
                <br><br>
                <div> Plan ID : <?= $rows["payment_plan"]->id;?></div>
                <div> Plan Name : <?= $rows["payment_plan"]->name;?></div>
                <div> Total Interest Added : <?= $rows["payment_plan"]->interest;?> %</div>
                <div> Number of Installments : <?= $rows["payment_plan"]->installement_count;?></div>
                <br>
                <div class="table_header">
                    <div style="display: flex;" >
                        <h3>  Details of Installments </h3>
                    </div>
                    
                </div>
            
                <div class="table">      
       
        <div class="table_section">
            <table>
                <thead>
                    <tr>
                        <th>Payment Plan ID</th>
                        <th>Installment Number</th>
                        <th>Interest</th>
                       
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($rows['payment_installments'] as $row) :?>
                            <tr>                       
                                <td><?=$row->payment_plan_id?></td>
                                <td><?=$row->installment_number?></td>
                                <td><?=$row->percentage?> %</td>
                                
                                
                            </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
        </div>    
    </div>
   
    </div>
<?php $this->view('includes/footer'); ?>
<?php else: ?>
    <?php $this->view('404'); ?>
<?php endif; ?>
