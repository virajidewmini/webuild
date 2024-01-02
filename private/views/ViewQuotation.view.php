<?php $this->view('includes/header')?>

<div style="margin-left: 400px;" class="table_header" >
        <h1>Quotation </h1>
</div>

<div class="total-card" style="margin-bottom: 30px;">
    <?php if(isset($rows)): ?>
        <div class="total-amount">RS. <?=$rows[0]->total_amount?><br></div> 
    <?php endif; ?>
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
                <?php if(isset($rows)): ?>
                    <?php $quotationNumber = 1; ?>
                    <?php foreach ($rows as $row):?>

                    <tr>
                        <td><?=$row->created_date?></td>
                        <td>Quotation <?=$quotationNumber?></td>
                        <td><a href="<?=ROOT?>/uploads/<?=$row->quotation?>"  target="_blank" style="color: blue;"><?=$row->quotation?></a></td>
                        
                        <td>
                            <?php if($row->status === "Pending"): ?>
                                <a href="<?=ROOT?>/accept"><button class="accept-button" style="background-color: #4CAF50; ">Accept</button></a>
                                <a href="<?=ROOT?>/reject"><button class="reject-button" style="background-color: #f44336;">Reject</button></a> 

                            <?php else: ?>
                                <a href="<?=ROOT?>/accept"><button disabled class="accept-button" style="background-color: #ddd;" >Accept</button></a>
                                <a href="<?=ROOT?>/reject"><button class="reject-button" style="background-color: #ddd;" disabled>Reject</button></a> 
                            
                            <?php endif; ?>
                        </td>
                        
                    </tr>
                    <?php $quotationNumber++; ?> 
                    <?php endforeach;?>
                <?php endif; ?>
                </tbody>
        </table>
    </div>

</div>

<?php $this->view('includes/footer'); ?>

