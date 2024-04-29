<?php if ($_SESSION['role'] == 'Client') : ?>
<?php $this->view('includes/header')?>

<div style="margin-left: 600px;" class="table_header" >
        <h1>Quotation </h1>
</div>

<div class="total-card" style="margin-bottom: 30px;">
    <?php if(isset($rows)): ?>
        <?php if($rows[0]->status === "Display"): ?>
            <div class="total-amount">RS. <?=$rows[0]->total_amount?><br></div> 
        <?php endif; ?>   
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
                        <th>Project ID</th>
                        <th>Quotation</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                <?php if(isset($rows)): ?>
                    
                    
                    <?php foreach ($rows as $row):?>
                        <?php if($row->status === "Display"): ?>
                    <tr>
                        <td><?=$row->created_date?></td>
                        <td><?=$row->id?></td>
                        <td><?=$row->project_id?></td>
                        <td><a href="<?=ROOT?>/uploads/<?=$row->quotation?>"  target="_blank" style="color: blue;"><?=$row->quotation?></a></td>
                        
                        <td>
                            
                            <?php if($status === "Unpaid" && $row->status === "Display"):  ?>
                                <a href="<?=ROOT?>/accept/<?=$row->project_id?>"><button class="accept-button" style="background-color: #4CAF50; ">Accept</button></a>
                                <a href="<?=ROOT?>/quotation/reject"><button class="reject-button" style="background-color: #f44336;">Reject</button></a> 
                            <?php endif; ?> 
                        </td>
                        <?php endif; ?> 
                    </tr>
                    
                    <?php endforeach;?>
                <?php endif; ?>
                </tbody>
        </table>
    </div>

</div>

<?php $this->view('includes/footer'); ?>

<?php else : ?>
    <?php $this->view('404'); ?>
<?php endif; ?>