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
                            <th>Name</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>NIC</th>
                            <th>Address</th>
                            <th>Role</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($rows as $row) :?>
                            <tr>                       
                                <td><?=$row->staffid?></td>
                                <td><?=$row->name?> </td>
                                <td><?=$row->email?></td>
                                <td><?=$row->password?> </td>
                                <td><?=$row->nic?></td>
                                <td><?=$row->address?> </td>
                                <td><?=$row->role?></td>                      
                                <td>
                                    <button><i class="fa-solid fa-eye"></i></button>
                                </td>
                            </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
            </div>    
        </div>
        <div>
          <button class="add___">Add Users</button>
     </div>
    <?php else:?>
        <h4>No staff is found</h4>
        <div>
                <button class="add___">Add Users</button>
            </div>
    <?php endif;?>        

<?php $this->view('includes/footer'); ?>

