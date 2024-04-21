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
                            <th>District</th>
                            <th>No. of Currently Working Projects</th>
                            <th>See Projects</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($rows["managers"] as $row) :?>
                            <tr>                       
                                <td><?=$row->id?></td>
                                <td><?=$row->firstname?> <?=$row->lastname?></td>
                                <td><?=$row->district?></td>
                                <td><?=$row->project_count?></td> 
                                <td>
                                    <a href="<?=ROOT?>/coordinatorviewmanagers/seeprojects/<?=$row->id?>">
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
