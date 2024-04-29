<?php if(Auth::getRole()== 'Project Coordinator'): ?>
<?php $this->view('includes/header')?>


     <?php if($rows):?>
       <!-- <pre><?php  print_r($rows);?></pre> -->
          <div class="table">
            <div class="table_header">
                <div style="display: flex;">
                    <h3>  
                        <?php if($rows[0]->status=='Ongoing'):?> 
                            Ongoing Projects
                        <?php elseif($rows[0]->status=='Completed'):?> 
                            Completed Projects
                        <?php elseif($rows[0]->status=='Cancelled'):?> 
                            Cancelled Projects 
                        <?php endif;?>
                    </h3>
                </div>
                
            </div>
            <div class="table_section">
                <table>
                    <thead>
                        <tr>
                            <th>Project ID</th>
                            <th>Customer Name</th>
                            <th>Project Manager</th>
                            <th>Supervisor</th>
                            <th>Model</th>
                            <th>Seemore</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($rows as $row) :?>
                            
                                <tr>                       
                                    
                                    <td><?=$row->id?></td>                                  
                                    <td><?=$row->user->firstname?> <?=$row->user->lastname?></td>
                                    <td><?=$row->staff_m->firstname?> <?=$row->staff_m->lastname?></td>
                                    <td><?=$row->staff->firstname?> <?=$row->staff->lastname?></td>
                                    <td><?=$row->mdl->name?></td>  
                                    
                                    <td>
                                        <a href="<?=ROOT?>/coordinatorprojects/seemore/<?=$row->id?>">
                                            <button><i class="fa-solid fa-eye"></i></button>
                                        </a>
                                    </td>  
                                    
                                </tr>
                            
                                
                        <?php endforeach;?>
                    </tbody>
                </table>
            </div>    
        </div>
    <?php else:?>
        <h4>No Projects.</h4>
        <br><br>
    <?php endif;?> 


<?php $this->view('includes/footer'); ?>

<?php else: ?>
    <?php $this->view('404'); ?>
<?php endif; ?>

