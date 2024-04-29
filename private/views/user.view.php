<?php if(Auth::getRole()== 'Admin'): ?>
<?php $this->view('includes/header')?>


     
<style>
     /* main{
          display: grid;
          grid-template-columns: 1fr 1fr 1fr 1fr;
          gap: 1rem;
     }
     .box{
          display: flex;
          align-items: stretch;
          justify-content: center;
          flex-direction: column;
          border: 2px solid black;
          border-radius:5px;
     }

     .image-wrapper{
          display: flex;
          align-items: center;
          justify-content: center;
          width: 100%;
     }
     .user-overview{
          display: flex;
          align-items: flex-start;
          justify-content: flex-start;
          flex-direction: column;
          margin: 2rem;
     } */

</style>
     <?php if($rows):?>
          <div class="table">
            <div class="table_header">
                <div style="display: flex;">
                    <h3>  Customers </h3>
                </div>
                
            </div>
            <div class="table_section">
                <table>
                    <thead>
                        <tr>
                            <th>Customer ID</th>
                            <th>Customer Name</th>
                            <th>NIC</th>
                            <th>Gender</th>
                            <th>Contact Number</th>
                            <th>Address</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($rows as $row) :?>
                            
                                <tr>                       
                                    
                                    <td><?=$row->id?></td>                                  
                                    <td><?=$row->firstname?> <?=$row->lastname?></td>
                                    <td><?=$row->nic?></td>
                                    <td><?=$row->gender?></td>
                                    <td><?=$row->contactnumber?></td>  
                                    <td><?=$row->address?></td>
                                    <td><?=$row->email?></td>  
                                    
                                </tr>
                            
                                
                        <?php endforeach;?>
                    </tbody>
                </table>
            </div>    
        </div>
    <?php else:?>
        <h4>No Users.</h4>
        <br><br>
    <?php endif;?> 


    <?php $this->view('includes/footer'); ?>
<?php else: ?>
    <?php $this->view('404'); ?>
<?php endif; ?>

