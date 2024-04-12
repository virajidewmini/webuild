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
                                <td></td> 
                                <td>
                                    <button><i class="fa-solid fa-sheet-plastic"></i></button>
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
    
    
    <?php if($rows["projects"]):?>
        <div class="table">
            <div class="table_header">
                <div style="display: flex;" >
                    <h3>  Projects Assigned for Manager: </h3>
                </div>
                <br>
                <br>
                <br>
                
                <div style="display: flex; width: 50%; margin: 0 auto; background-color: #f0f0f0;padding: 20px;">
                    <h4><?=$rows["projects"][0]->manager->firstname?>  <?=$rows["projects"][0]->manager->lastname?></h4>
                </div>
    
            </div>
            <div class="table_section">
                <table>
                    <thead>
                        <tr>
                            <th>Project ID</th>
                            <th>Customer Name</th>
                            <th>Model Name</th>
                            <th>Date</th>
                            <th>Staus</th>
                            <th>See More</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($rows["projects"] as $row) :?>
                            <tr>                       
                                <td><?=$row->id?></td>
                                <td><?=$row->firstname?> <?=$row->lastname?></td>
                                <td><?=$row->model->name?></td> 
                                <td><?=get_date($row->date)?></td>
                                <td><?=$row->status?></td> 
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
        <h4>This manager hasn't been assigned any project yet.</h4>
    <?php endif;?>

<?php $this->view('includes/footer'); ?>
<?php else: ?>
    <?php $this->view('404'); ?>
<?php endif; ?>
