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
                    <h3>  Webuild Staff  </h3>
                </div>
                
            </div>
            <div class="table_section">
                <table>
                    <thead>
                        <tr>
                            <th>Employee ID</th>
                            <!-- <th>Profile</th> -->
                            <th>Name</th>
                            <th>Role</th>
                            <th>Joined Date</th>
                            <th>
                                <a href="<?=ROOT?>/staff/add">
                                    <button><i class="fa-solid fa-user-plus" style="color: #e67f1e;"></i></button>
                                    <!-- <button class="add___">Add Staff</button> -->
                                </a>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($rows as $row) :?>
                            <tr>                       
                                <td><?=$row->id?></td>
                                <!-- <td></td> -->
                                <td><?=$row->firstname?> <?=$row->lastname?></td>
                                <td><?=$row->role?></td>  
                                <td><?=get_date($row->joineddate)?></td>                    
                                <td>
                                    <a href="<?=ROOT?>/userprofile/seemore/<?=$row->id?>">
                                        <button><i class="fa-solid fa-eye"></i></button>
                                    </a>
                                    <a href="<?=ROOT?>/staff/delete/<?=$row->id?>">
                                        <button><i class="fa-solid fa-trash"></i></button>
                                    </a>
                                    <a href="<?=ROOT?>/staff/edit?id=<?=$row->id?>">
                                        <button><i class="fa-solid fa-pen-to-square"></i></button>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
            </div>    
        </div>
    <?php else:?>
        <h4>No staff is found</h4>
        <div>
            <a href="<?=ROOT?>/staff/add">
                <button class="add___">Add Staff</button>
            </a>
        </div>
    <?php endif;?>        

<?php $this->view('includes/footer'); ?>

