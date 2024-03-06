<?php $this->view('includes/header')?>
<style>
          .pro-id{
               display: flex;
               padding: 0 0 20px 0;
               border-radius: 20px;
               width: 100%;
               height: auto;
          }
          .pro-id-details{
               width: 100%;
          }
          .title-id{
               display: flex;
               align-items: center;
               margin-bottom: 20px;
               width: 100%;
          }
          .p-title{
               min-width: 200px;
               width: 20%;
               margin: 10px 0 0 20px;
          }
          .p-title-detail{
               margin-top: 5%;
          }
          .unit-d{
     
               display: flex;
               align-items: center;
               margin-left: 5%;
               margin-bottom: 10px;
          }
          .unit{
               min-width: 150px;
               width: 30%;
               margin: 5px;
          }
          .table_header{
               width:100%;
               height: auto;
          }

          .task_d::placeholder{
            color: black;
          }

          .task_d{
            border: 1px solid black;
            border-radius: 7px;
            padding: 10px 10px 10px 20px;
            margin-left: 10px;
            width:300px;
            height:100px;
          }

.in_a_c:hover{
    box-shadow: 0px 5px 20px rgba(0, 0, 0, 0.4);
}
.in_a_c:active{
    box-shadow: 0px 5px 20px rgba(0, 0, 0, 0.2);
}
</style>
<?php if($row): ?>
     <div style="display:flex; flex-direction: row; justify-content: center; padding: 0 0 40px 0; ">
          <div class="pro-id" style="padding: 0 0 40px 0; ">
                
                    <div class="pro-id-details">
                    <form method="post">
                        <div class="table">
                            <h2 style="margin-bottom: 20px">ADD TASK</h2>
                            <div class="unit-d">
                                <div class="unit">
                                    <p>Project ID :</p>
                                </div>
                                <div class="e-id-d">
                                <?php if(isset($row1[0]->id)): ?>
                                    <input readonly name="project_id" value= "<?= get_var('project_id',$row1[0]->id);?>" type="text"  class="form-control">
                                <?php else: ?>
                                    <input required name="project_id" value= "<?= get_var('project_id');?>" type="text" placeholder="Enter Project ID" class="form-control">
                                <?php endif; ?>
                                </div>
                            </div>
                            <div class="unit-d">
                                <div class="unit">
                                    <p>Task ID :</p>
                                </div>
                                <div class="e-id-d">
                                    <input readonly value="<?=get_var('task_id',$row[0]->task_id)?>" type="text" name="task_id">
                                </div>
                            </div>
                            <div class="unit-d">
                                <div class="unit">
                                    <p>Task Name :</p>
                                </div>
                                <div class="e-id-d">
                                    <input readonly value="<?=get_var('task_name',$row[0]->task->task_name)?>" type="text">
                                </div>
                            </div>
                            <div class="table_header">
                                <h3>Task details</h3>
                            </div>
                            <div class="table_section">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Sub Task ID</th>
                                            <th>Sub Task Name</th>
                                            <th>Duration in days</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php if ($row):?>
                                        <?php foreach ($row as $row):?>
                                        <tr>
                                            <td><?= $row->id?></td>
                                            <td><?= $row->sub_task_name?></td>
                                            <td><?= $row->duration_in_days?></td>
                                            <td>
                                                <!-- <a onclick="link(this)" value="<?=ROOT?>/pmtask"><i class="fa-solid fa-eye"></i></a> -->
                                                <a href="<?=ROOT?>/Pmtask/taskDetails/<?= $row->id?>/" ><i class="fa-solid fa-eye" style=" color:#E5863D"></i></a>
                                            </td>
                                        </tr>
                                        <?php endforeach; ?>
                                    <?php else: ?>
                                        <h3>No tasks were found at this time</h3>
                                    <?php endif; ?> 
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="table_header" style="align-items: center;">
                            <a href="<?=ROOT?>/pmtask">
                            <input class ="in_a_c" style="border:1px solid #E5863D; color:#E5863D" type="button" value="Cancel">
                            </a>
                            <input class ="in_a_c" style="border:none; background-color:#E5863D; color:white" type="submit" value="Add">
                        </div>
                    </form>
                    </div> 
                
        </div>
    </div>
 <?php endif; ?>
 <script>
    function link(link){
        location.href = link.value;
    }
</script>
<?php $this->view('includes/footer'); ?>