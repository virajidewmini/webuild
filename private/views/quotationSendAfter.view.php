<?php $this->view('includes/header')?>


<div class="table">
<div class="table_header">
            <h1>Order Quotation </h1>
            <!-- <div>
               <a href="clientcomplaint/add"><button class="add___">Add New</button></a>   
            </div> -->
        </div>
        <div class="table_section" style="height: 1000px;">
            <table>
                <thead>
                    <tr>
                        <th>Quotation No</th>
                        <th>Material Name</th>
                        <th>Material Code</th>
                        <th>Batch code</th>
                        <th>Quantity</th>
                        <th>Unite Price</th>
                        <th>Total Price</th>
                        <th>Issuse Date</th>
                        <th>Action</th>
                        <th>Decision</th>
                    </tr>
                </thead>
                <tbody>
                <?php if(isset($rows)): ?>
                
                    <?php foreach ($rows as $row):?>
                        <?php if($row->decision=='REJECT'):?>
                         <tr style="background-color: #FF6347;">
                        <td><?=$row->quotation_id?></td>
                        <td><?=$row->material_name?></td>
                        <td><?=$row->material_code?></td>
                        <td><?=$row->batch_NO?></td>
                        <td><?=$row->send_quantity?></td>
                        <td><?=$row->unit_Price?></td>
                        <td><?=$row->total_price?></td>
                        <td><?=$row->quotation_issue_date?></td>
                        
                       
                        
                        <td>

                        
                        <a href="<?=ROOT?>/quotationorder/update/<?=$row->id?>"><button ><i class="fa-regular fa-pen-to-square"></i></button>
                        <a href="<?=ROOT?>/quotationorder/delete/<?=$row->id?>"><button ><i class="fas fa-trash-alt"></i></button></a> 

                        </td>

                        <td><button type="submit"><?=$row->decision?> </button>  </td>

                        
                    </tr>
                    <?php elseif($row->decision=='ACCEPT'):?>
                        <tr> 
                    
                        <td><?=$row->quotation_id?></td>
                        <td><?=$row->material_name?></td>
                        <td><?=$row->material_code?></td>
                        <td><?=$row->batch_NO?></td>
                        <td><?=$row->send_quantity?></td>
                        <td><?=$row->unit_Price?></td>
                        <td><?=$row->total_price?></td>
                        <td><?=$row->quotation_issue_date?></td>
                        <!-- <td><?=$row->decision?></td> -->
                        
                        <td>

                        
                        <a href="<?=ROOT?>/quotationorder/update/<?=$row->id?>"><button ><i class="fa-regular fa-pen-to-square"></i></button>
                        <a href="<?=ROOT?>/quotationorder/delete/<?=$row->id?>"><button ><i class="fas fa-trash-alt"></i></button></a> 

                        </td>

                        <td><button type="submit"><?=$row->decision?></button> </td>
                            
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

