<?php $this->view('includes/header')?>

<div style="margin-left: 450px;" class="table_header" >
        <h1>  Tasks</h1>
</div>



<div class="v_table">
    
    <div class="v_table_section">
        <table>
            <thead class="v_thead">
                <tr>
                    <th class="v_data">Task</th>
                    <th class="v_data">Status</th>
                    <th class="v_data">Progress</th>
                    <th class="v_data"></th>
                    <th class="v_data">Start Date</th>
                    <th class="v_data">Evidence</th>
                </tr>
            </thead>
            <tbody>
            <?php if(isset($rows)): ?>
                <?php foreach ($rows as $row):?>

                <tr>
                    <td class="v_data"><?=$row->task_name?></td>
                    <td class="v_data"><?=$row->status?></td>
                    <td class="v_data">
                        <div class="progress-bar"  style="width: 350px;">
                            <div class="progress-done" data-value=<?=$row->progress?> id="progress-done"></div>  
                        </div>
                    </td>
                    <td class="v_data" style="text-align: right;"><?=$row->progress?></td>
                    <td class="v_data"><?=$row->est_start_date?></td>


                    <td class="v_data">
                        <a href="<?= ROOT ?>/progress/viewPhotograph/<?= $row->id ?>">
                            <button class="v_action_button">Photo</button>
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