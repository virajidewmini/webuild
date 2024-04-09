<?php $this->view('includes/header')?>

<div style="margin-left: 450px;" class="table_header" >
        <h1> Sub Tasks</h1>
</div>



<div class="v_table">
    
    <div class="v_table_section">
        <table>
            <thead class="v_thead">
                <tr>
                    <th class="v_data"style="width:260px;">Task</th>
                    <th class="v_data" style="width:600px;">Description</th>
                    
                    
                    <th class="v_data">Status</th>
                    <th class="v_data">Update</th>
                </tr>
            </thead>
            <tbody>
            <?php if(isset($rows)): ?>
                <?php foreach ($rows as $row): ?>
                    

                <tr>
                    <td class="v_data"><?=$row->sub_task_name?></td>
                    <td class="v_data"><?=$row->sub_task_details?></td>
                    <td class="v_data"><?=$row->status?></td>
                    
                    

                    <td class="v_data">
                        <a href="<?= ROOT ?>/status/UpdateState/<?= $row->id ?>"
                        style="<?= ($row->status == 'Complete') ? 'display: none;' : '' ?>" >
                            <button class="v_action_button">Edit</button>
                        </a>
                        
                    </td>
                </tr>
                <?php endforeach;?>
                <?php endif; ?>

                
            </tbody>
        </table>
    </div>
</div>
            </div>
        </div>
    </body>
</html>

<?php $this->view('includes/footer'); ?>