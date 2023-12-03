<?php $this->view('includes/header')?>
<style>
body{
    overflow: hidden;
}
</style>
    <?php if($rows):?>
        <div class="table">
            <div class="table_header">
                <p>Webuild Staff</p>
                
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
                                <td><?=$row->staffid?></td>
                                <!-- <td></td> -->
                                <td><?=$row->name?></td>
                                <td><?=$row->role?></td>  
                                <td><?=get_date($row->joineddate)?></td>                    
                                <td>
                                    <a href="<?=ROOT?>/staff/seemore/<?=$row->staffid?>">
                                        <button><i class="fa-solid fa-eye"></i></button>
                                    </a>
                                    <a href="<?=ROOT?>/staff/delete/<?=$row->staffid?>">
                                        <button><i class="fa-solid fa-trash"></i></button>
                                    </a>
                                    <a href="<?=ROOT?>/staff/edit/<?=$row->staffid?>">
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
            <button class="add___">Add Staff</button>
        </div>
    <?php endif;?>        

<?php $this->view('includes/footer'); ?>

