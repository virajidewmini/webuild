<?php if(Auth::getRole()== 'Storekeeper'): ?>
<?php $this->view('includes/header')?>

<div class="table">

    <div class="table_header">
        <h1>Requests from project manager</h1>
    </div>
      
    <a href="<?=ROOT?>/requestsecond/add/"><button  style="background-color:
     #fd7238; color:aliceblue; margin-left:85%;margin-bottom:1.5rem;">Create Quotation</button></a>

     

    <div class="table_section" style="height: 1000px;">
        <table>
            <thead>
                <tr>
                    <th>Request ID</th>
                    <th>Project ID</th>
                    <th>Material Name</th>
                    <th>Material Code</th>
                    <th>Measure Unit</th>
                    <th>Quantity</th>
                </tr>
            </thead>
            <tbody>
                <?php if(isset($rows)): ?>
                    <?php foreach ($rows as $row):?>
                         <tr>
                            <td><?=$row->request_id?></td>
                            <td><?=$row->project_id?></td>
                            <td><?=$row->material_or_item_name?></td>
                            <td><?=$row->material_or_item_id?></td>
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