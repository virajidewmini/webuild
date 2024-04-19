<?php if(Auth::getRole()== 'Storekeeper'): ?>
<?php $this->view('includes/header')?>

<div class="table">

<!-- <form method="GET" action="<?= ROOT ?>/request/index">
    <input type="text" name="filter" placeholder="Enter project CODE...">
    <button type="submit" class="filter-button">Filter</button>
</form> -->

    <div class="table_header">
        <h1>Requests from project manager</h1>
    </div>

    <a href="<?=ROOT?>/Request/add/<?=$r_id?>/<?=$rows[0]->send_district?>"><button  style="background-color:
     #fd7238; color:aliceblue; margin-left:85%;margin-bottom:1.5rem;">Create Quotation</button></a>
     

    <div class="table_section" style="height: 1000px;">
        <table>
            <thead>
                <tr>
                    <th>Material Name</th>
                    <th>Measure Unit</th>
                    <th>Quantity</th>
                </tr>
            </thead>
            <tbody>
                <?php if(isset($rows)): ?>
                    <?php foreach ($rows as $row):?>
                         <tr
                             data-material-name="<?=$row->material_or_item_name?>" ,
                             data-measure-unit="<?=$row->mesure_unit?>" ,
                             data-quantity="<?=$row->quantity?>" ,>

                            <td><?=$row->material_or_item_name?></td>
                            <td><?=$row->mesure_unit?></td>
                            <td><?=$row->quantity?></td>
                           
                        </tr>
                    <?php endforeach;?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

<?php $this->view('includes/footer'); ?>

<?php else: ?>
    <?php $this->view('404'); ?>
<?php endif; ?>




