<?php if(Auth::getRole()== 'Project Coordinator'): ?>
<?php $this->view('includes/header')?>
<style>
body{
    overflow: hidden;
}
</style>

    <?php if($rows):?>
        
        <div class="table">
            <div class="table_header">
                <div style="display: flex;" >
                    <h3>  Rejected Project Requests  </h3>
                </div>
                
            </div>
            <div class="table_section">
                <table>
                    <thead>
                        <tr>
                            <th>Request ID</th>
                            <th>User Name</th>
                            <th>Reason</th>
                            <th>Date</th>
                            <th>See more</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($rows as $row) :?>
                        
                            <tr>                       
                                <td><?=$row->id?></td>
                                <td><?=$row->user->firstname?> <?=$row->user->lastname?></td>   
                                <td><?=$row->reason?></td>          
                                <td><?=get_date($row->date)?></td> 
                                <td>
                                    <a href="<?=ROOT?>/coordinatorrequests/seemore/<?=$row->id?>">
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
        <h4>No Rejected Requests are found</h4>
        <!-- <div>
            <a href="#">
                <button class="add___">Add Staff</button>
            </a>
        </div> -->
    <?php endif;?>        

<?php $this->view('includes/footer'); ?>
<?php else: ?>
    <?php $this->view('404'); ?>
<?php endif; ?>
