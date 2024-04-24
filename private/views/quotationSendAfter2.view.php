<?php if(Auth::getRole()== 'Storekeeper'): ?>
<?php $this->view('includes/header')?>
<style>
    .accept {
    background-color: #ccddff; /* Light green for ACCEPT */
}

.reject {
    background-color: #ff9980; /* Light red for REJECT */
}

.pending {
    background-color: #ffffb3; /* Yellow for PENDING */
}
</style>

<div class="table">
<form method="GET" action="<?= ROOT ?>/quotationorder/index">
    <input type="text" name="filter" placeholder="Enter project ID...">
    <button type="submit" class="filter-button">Filter</button>
</form>

    <div class="table_header">
        <h1>Order Quotation </h1>
    </div>
    <div class="table_section" style="height: 1000px;">
        <table>
            <thead>
                <tr>
                    
                    <th>Material Name</th>
                    <th>Measure Unit</th>
                    <th>Batch 1 Q uantity</th>
                    <th>Batch 1 Q uantity</th>
                    <th>Total Quantity</th>
                    <th>Total Price</th>
                    <!-- <th>Action</th> -->
                </tr>
            </thead>
            <tbody>
                <?php if(isset($rows)): ?>
                    <?php foreach ($rows as $row):?>
                        <tr class="<?php echo $row->decision === 'ACCEPT' ? 'accept' : ($row->decision === 'REJECT' ? 'reject' : 'pending'); ?>">
                           

                            <td><?=$row->material_or_item_name?></td>
                            <td><?=$row->mesure_unit?></td>
                            
                            <td><?=$row->send_quantity1?></td>
                            <td><?=$row->send_quantity2?></td>
                            <td><?=$row->send_total_quantity?></td>
                            <td><?=$row->total_price?></td>
                            <!-- <td>
                                <a href="<?=ROOT?>/quotationorder/update/<?=$row->id?>"><button><i class="fa-regular fa-pen-to-square"></i></button></a>
                                <a href="<?=ROOT?>/quotationorder/delete/<?=$row->id?>"><button><i class="fas fa-trash-alt"></i></button></a> 
                            </td> -->
                            <!-- <td><button type="submit"><?=$row->decision?></button></td> -->
                        </tr>
                    <?php endforeach;?>
                <?php else: ?>
                    <!-- <h3>No Complaints Yet</h3> -->
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>
     
<?php $this->view('includes/footer'); ?>

<?php else: ?>
    <?php $this->view('404'); ?>
<?php endif; ?>