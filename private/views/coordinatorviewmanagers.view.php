<?php if(Auth::getRole()== 'Project Coordinator'): ?>
<?php $this->view('includes/header')?>
<style>
body{
    overflow: hidden;
}
</style>
    <?php if($rows["managers"]):?>
        <div class="table">
            <div class="table_header">
                <div style="display: flex;" >
                    <h3>  Project Managers  </h3>
                </div>
                
            </div>
            <div class="table_section">
                <table>
                    <thead>
                        <tr>
                            <th>Employee ID</th>
                            <th>Name</th>
                            <th>No. of Projects</th>
                            <th>Joined Date</th>
                            <th>See Projects</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($rows["managers"] as $row) :?>
                            <tr>                       
                                <td><?=$row->staff_id?></td>
                                <td><?=$row->firstname?> <?=$row->lastname?></td>
                                <td><?=$row->count?></td> 
                                <td><?=$row->joineddate?></td> 
                                <td>
                                    <a href="<?=ROOT?>/coordinatorviewmanagers/seeprojects/<?=$row->staff_id?>">
                                        <button><i class="fa-solid fa-sheet-plastic"></i></button>
                                    </a>
                                </td> 
                                
                            </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
            </div>    
        </div>
    <?php else:?>
        <h4>No Project Managers have been assigned projects.</h4>
    <?php endif;?> 
    

<?php $this->view('includes/footer'); ?>
<?php else: ?>
    <?php $this->view('404'); ?>
<?php endif; ?>
