<?php $this->view('includes/header')?>


<div class="table">
<div class="table_header">
            <h1>Requests from project manager</h1>
            <!-- <div>
               <a href="clientcomplaint/add"><button class="add___">Add New</button></a>   
            </div> -->
        </div>
        <div class="table_section" style="height: 1000px;">
            <table>
                <thead>
                    <tr>
                        <th>Project Code</th>
                        <th>Material Code</th>
                        <th>Material Name</th>
                        <th>Measure Unit</th>
                        <th>Quntity</th>
                        <th>Availability</th>
                        
                        <th> Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php if(isset($rows)): ?>
                
                    <?php foreach ($rows as $row):?>
                         <tr>
                        <td><?=$row->p_id?></td>
                        <td><?=$row->material_or_item_id?></td>
                        <td><?=$row->material_or_item_name?></td>
                        <td><?=$row->mesure_unit?></td>
                        <td><?=$row->quantity?></td>
                        <td></td>
                        
                        
                        <td>
                        <a href="<?=ROOT?>/quotationorder/add"><button ><i class="fa-regular fa-clock"></i></button></a>
                        
                        </td>

                        
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

