<?php $this->view('includes/header')?>

<div style="margin-left: 400px;" class="table_header" >
        <h1>Auto Assigned Coworkers</h1>
</div>

<div class="table_section" style="height: 1000px;">
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Role</th>
                        <th>Name</th>
                        <th>Phone No</th>
                        
                    </tr>
                </thead>
                <tbody>
               
                
                    
                <?php if(isset($coworkers)&& !empty($coworkers)):?>
                    <?php $counter = 1; ?>
                  
                    <?php foreach ($coworkers as $row):?>
                         <tr>
                        <td><?= $counter++ ?></td>
                        <td><?=$row->role?></td>
                        <td><?=$row->name?></td>
                        <td><?=$row->phone_no?></td>
                        
                        <td>
                           
                         <button ><i class="fas fa-trash-alt"></i></button>

                        </td>
                        
                    </tr>
                    <?php endforeach;?>
                    <?php else: ?>
                        <tr><td colspan="5">No data available</td></tr>
                <?php endif; ?>

                   

            

                </tbody>
            </table>

            <?php
           $url = $_GET["url"]; 
           $parts = explode('/', $url); 
           $id = end($parts); 
           
           ?>
        <a href="<?= ROOT ?>/task/addCoworker/<?=$id?>" > <button style="margin-left:750px;" class="v_submit_button" type="submit">Submit</button></a>


        </div>

        