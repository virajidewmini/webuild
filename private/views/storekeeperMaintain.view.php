<?php $this->view('includes/header')?>
<div class="table">
        <div class="table_header">

        <h1>Details of Store Materials</h1>
            
            <!-- <div>
               <a href="<?=ROOT?>/maintain/add"><button class="add___">Add Request</button></a>   
            </div> -->
        </div>
        <div class="table_section" style="height: 250px;">
            <table>
                <thead>
                    <tr>
                        <th>Material Name</th>
                        <th>Material Code</th>
                        <th>Mesure Unit</th>
                        <th>Total Quantity</th>
                        <th>Remain Quntity</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                <?php if(isset($rows)): ?>
                
                <?php foreach ($rows as $row):?>
                    <?php if($row->status=='LOW'):?>
                        <tr style="background-color: #FF6347;"> 
                    
                            <td><?=$row->material_name?></td>
                            <td><?=$row->material_code?></td>
                            <td><?=$row->measure_unit?></td>
                            <td><?=$row->total_quantity?></td>
                            <td><?=$row->remain_quantity?></td>
                            <td><button><a href="<?=ROOT?>/maintainrequests/add"><?=$row->status?></a>
                                </button>
                               </td>
                            <!-- <td></td> -->
                        </tr>
                    <?php elseif($row->status=='NORMAL'):?>
                        <tr> 
                    
                            <td><?=$row->material_name?></td>
                            <td><?=$row->material_code?></td>
                            <td><?=$row->measure_unit?></td>
                            <td><?=$row->total_quantity?></td>
                            <td><?=$row->remain_quantity?></td>
                            
                            <td><button><a href="<?=ROOT?>/maintainrequests/add"><?=$row->status?></a>
                                </button>
                               </td>
                          
                            
                        </tr>
                    <?php endif;?>

                <?php endforeach;?>

        <?php else: ?>
            <!-- <h3>No Complaints Yet</h3> -->

        <?php endif; ?>

                </tbody>
                    
            </table>
        </div>
    </div>

     
<?php $this->view('includes/footer'); ?>
