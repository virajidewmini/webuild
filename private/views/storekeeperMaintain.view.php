<!-- <style>
    .filter-button {
  background-color: #4CAF50; /* Green background */
  border: none; /* Remove border */
  color: white; /* White text color */
  padding: 10px 20px; /* Padding */
  text-align: center; /* Center text */
  text-decoration: none; /* Remove underline */
  display: inline-block; /* Display as inline block */
  font-size: 16px; /* Font size */
  cursor: pointer; /* Add cursor pointer */
  border-radius: 4px; /* Rounded corners */
  transition: background-color 0.3s; /* Smooth transition */
}

.filter-button:hover {
  background-color: #45a049; /* Darker green on hover */
}

</style> -->

<?php $this->view('includes/header')?>

<form method="GET" action="<?= ROOT ?>/maintain/index">
    <input type="text" name="material_name" placeholder="Enter material name...">
    <button type="submit" class="filter-button">Filter</button>
</form>


<div class="table">
    <div class="table_header">
        <h1>Details of Store Materials</h1>
    </div>
    <div class="table_section" style="height: 250px;">
        <table>
            <thead>
                <tr>
                    <th>Material Name</th>
                    <th>Material Code</th>
                    <th>Mesure Unit</th>
                    <th>Total Quantity</th>
                    <th>Remain Quantity</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php if(isset($rows)): ?>
                    <?php foreach ($rows as $row):?>
                        <?php if($row->status=='LOW'):?>
                        <tr style="background-color: #FF6347;"  data-material-name="<?=$row->material_name?>" 
                            data-material-code="<?=$row->material_code?>" 
                            data-remain-quantity="<?=$row->remain_quantity?>">
                            <td><?=$row->material_name?></td>
                            <td><?=$row->material_code?></td>
                            <td><?=$row->measure_unit?></td>
                            <td><?=$row->total_quantity?></td>
                            <td><?=$row->remain_quantity?></td>
                            <!-- <td>
                                <button><a href="<?=ROOT?>/maintainrequests/add"><?=$row->status?></a></button>
                            </td> -->
                            <td><button><a href="<?=ROOT?>/maintainrequests/add?material_name=<?= $row->material_name ?>
                            &material_code=<?= $row->material_code ?>&remain_quantity=<?= $row->remain_quantity ?>"><?=$row->status?></a></button></td>

                        </tr>
                        <?php elseif($row->status=='NORMAL'):?>
                            <tr data-material-name="<?=$row->material_name?>" 
                            data-material-code="<?=$row->material_code?>" 
                            data-remain-quantity="<?=$row->remain_quantity?>">
                            <td><?=$row->material_name?></td>
                            <td><?=$row->material_code?></td>
                            <td><?=$row->measure_unit?></td>
                            <td><?=$row->total_quantity?></td>
                            <td><?=$row->remain_quantity?></td>
                            <!-- <td>
                                <button><a href="<?=ROOT?>/maintainrequests/add"><?=$row->status?></a></button>
                            </td> -->
                            <td><button><a href="<?=ROOT?>/maintainrequests/add?material_name=<?= $row->material_name ?>
                            &material_code=<?= $row->material_code ?>&remain_quantity=<?= $row->remain_quantity ?>"><?=$row->status?></a></button></td>
                        </tr>
                        <?php endif;?>
                    <?php endforeach;?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>
<?php $this->view('includes/footer'); ?>

