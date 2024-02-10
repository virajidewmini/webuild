<?php $this->view('includes/header')?>


<div class="table">
<div class="table_header">
            <h1>Send Requests for Maintain Store</h1>
            <!-- <div>
               <a href="clientcomplaint/add"><button class="add___">Add New</button></a>   
            </div> -->
        </div>
        <div class="table_section" style="height: 1000px;">
            <table>
                <thead>
                    <tr>
                        <th>Material Name</th>
                        <th>Material Code</th>
                        <th>Remain Quantity</th>
                        <th>Requested Quntity</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php if(isset($rows)): ?>
                
                    <?php foreach ($rows as $row):?>
                         <tr>
                        <td><?=$row->material_name?></td>
                        <td><?=$row->material_code?></td>
                        <td><?=$row->remain_quantity?></td>
                        <td><?=$row->requested_quantity?></td>
                        
                        <td>

                        <a href="<?=ROOT?>/maintainrequests/update/<?=$row->id?>"><button ><i class="fa-regular fa-pen-to-square"></i></button>
                           
                        <a href="<?=ROOT?>/maintainrequests/delete/<?=$row->id?>"><button ><i class="fas fa-trash-alt"></i></button></a> 

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

