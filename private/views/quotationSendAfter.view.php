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
                    <th>Project No</th>
                    <th>Quotation No</th>
                    <th>Material Name</th>
                    <th>Material Code</th>
                    <th>Requested Quantity</th>
                    <th>Batch code</th>
                    <th>Quantity</th>
                    <th>Unit Price</th>
                    <th>Total Price</th>
                    <th>Issue Date</th>
                    <th>Action</th>
                    <th>Decision</th>
                </tr>
            </thead>
            <tbody>
                <?php if(isset($rows)): ?>
                    <?php foreach ($rows as $row):?>
                        <tr class="<?php echo $row->decision === 'ACCEPT' ? 'accept' : ($row->decision === 'REJECT' ? 'reject' : 'pending'); ?>">
                            <td><?=$row->p_id?></td>
                            <td><?=$row->quotation_id?></td>
                            <td><?=$row->material_name?></td>
                            <td><?=$row->material_code?></td>
                            <td><?=$row->requested_quantity?></td>
                            <td><?=$row->batch_NO?></td>
                            <td><?=$row->send_quantity?></td>
                            <td><?=$row->unit_Price?></td>
                            <td><?=$row->total_price?></td>
                            <td><?=$row->quotation_issue_date?></td>
                            <td>
                                <a href="<?=ROOT?>/quotationorder/update/<?=$row->id?>"><button><i class="fa-regular fa-pen-to-square"></i></button></a>
                                <a href="<?=ROOT?>/quotationorder/delete/<?=$row->id?>"><button><i class="fas fa-trash-alt"></i></button></a> 
                            </td>
                            <td><button type="submit"><?=$row->decision?></button></td>
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

