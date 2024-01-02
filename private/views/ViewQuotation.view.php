<?php $this->view('includes/header')?>

<div style="margin-left: 400px;" class="table_header" >
        <h1>Quotation </h1>
</div>

<div class="total-card" style="margin-bottom: 30px;">
        <div class="total-amount">$1,000.00<br></div> 
        <p class="card_label">Total Amount</p>
    </div>

<div class="table">
    <div class="table_section">
        <table>
                <thead>
                    <tr>
                        <th>Created Date</th>
                        <th>Quotation Number</th>
                        <th>Quotation</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>

                    <tr>
                        <td>2024.01.01</td>
                        <td>Quotation 1</td>
                        <td><a href="<?=ROOT?>/uploads/658bf9d448f6c_1703672276.pdf"  target="_blank" style="color: blue;">658bf9d448f6c_1703672276.pdf</a></td>
                        
                        <td>
                         <a href="<?=ROOT?>/accept"><button class="accept-button" style="background-color: #4CAF50; ">Accept</button></a>
                           
                         <a href="<?=ROOT?>/reject"><button class="reject-button" style="background-color: #f44336;">Reject</button></a> 
                         
        
                        </td>
                        
                    </tr>

                </tbody>
        </table>
    </div>

</div>

<?php $this->view('includes/footer'); ?>

