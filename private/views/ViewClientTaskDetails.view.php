<?php if ($_SESSION['role'] == 'Client') : ?>
<?php $this->view('includes/header')?>

<link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.2/css/lightgallery.min.css">

<style>
    #gallery img {
        max-width: 500px; 
        max-height: 500px; 
    }
    .Paracontainer {
            max-width: 800px;
            margin: 0 auto; 
            background-color: #fff; 
            padding: 20px; 
            border-radius: 10px; 
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); 
        }

        .paragraph {
            margin-bottom: 20px; 
            font-size: 16px; 
            line-height: 1.6; 
        }
</style>

                <div class="taskBody">
                    <div class="task-container">
                        <div class="task-header">
                            <?php if(isset($rows)):?>
                                <h1  style ="" class="task-name"><?=$rows[0]->task_name?></h1>
                            <?php endif;?>
                        </div>
                    </div>
                </div>

                <div  class="" >
                        <h1> Main Task Status </h1>
                        <?php

                        if($status[0]->status ==="Complete"){
                            echo '<button class="reject-button" style="background-color:#fbe400; cursor: not-allowed">'. $status[0]->status.'</button>';
                        }else if($status[0]->status ==="Pending"){
                            echo '<button class="reject-button" style="background-color:#ff8c00; cursor: not-allowed">'. $status[0]->status.'</button>';
                        }else if($status[0]->status ==="Suspend"){
                            echo '<button class="reject-button" style="background-color:#dc3545; cursor: not-allowed">'. $status[0]->status.'</button>';
                        }else if ($status[0]->status ==="Ongoing") {
                            echo '<button class="reject-button" style="background-color:#007bff; cursor: not-allowed">'. $status[0]->status.'</button>';
                        }else{
                            echo '<button class="reject-button" style="background-color:#fbe400; cursor: not-allowed">'. $status[0]->status.'</button>';
                        }

                        ?>


                </div>



                <div  class="table_header" >
                        <h1> Sub Tasks</h1>
                </div>



            <div class="v_table">

                <div class="v_table_section">
                    <table>
                        <thead class="v_thead">
                            <tr>
                                <th class="v_data"style="width:260px;">Task</th>
                                <th class="v_data" style="width:60%">Description</th>
                                <th class="v_data">Status</th>
                            
                            </tr>
                        </thead>
                        <tbody>
                        <?php if(isset($task)): ?>
                            <?php foreach ($task as $row): ?>
                                

                            <tr>
                                <td class="v_data"><?=$row->sub_task_name?></td>
                                <td class="v_data"><?=$row->sub_task_details?></td>
                                <td class="v_data"><?=$row->status?></td>
                                
                            </tr>
                            <?php endforeach;?>
                            <?php endif; ?>

                            
                        </tbody>
                    </table>
                </div>
            </div>

            <div  class="table_header" >
                    <h1> Photograph</h1>
            </div>

            <div id="gallery">
            <?php if($photo): ?>
                    <?php foreach ($photo as $row): ?>
                <a href="<?=ROOT?>/uploads/<?=$row->file_name?>">
                    <img src="<?=ROOT?>/uploads/<?=$row->file_name?>" alt="Image ">
                </a>
            
                <?php endforeach;?>
                    <?php else: ?>
                        <p>No Photograph evidence</p> 
            <?php endif; ?>
            </div>
<br><br>
            <div  class="table_header" >
                    <h1> Feedback</h1>
            </div>

            <?php if($feedback[0]->feedback==null) : ?>
                
                <div class="form_container">
                <form method="post"  class="v_form" enctype="multipart/form-data">
                    
                    <label for="description">Remark</label>
                    <input type="text" name="remark" id="remark" class="v_form-control" style="height: 150px;" required>
    
                    <a href=""> <button class="v_submit_button" type="submit">Submit</button></a>
                </form>
            </div>

            <?php else: ?>
                <div class="Paracontainer">
                    <div class="paragraph">
                        <p><?=$feedback[0]->feedback?></p>
                    </div>
                    
                </div>
    
            <?php endif; ?>

            
            <a href="<?=ROOT?>/clienttask/<?= Auth::getProjectId() ?>"> <button class="v_submit_button" type="button" style="margin-left: 830px; margin-top: 40px;">Ok</button></a>

            </div>
        </div>
    </body>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.2/lightgallery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/lg-thumbnail@1.10.0/dist/lg-thumbnail.min.js"></script>

        <script>
            document.addEventListener('DOMContentLoaded', function () {
                lightGallery(document.getElementById('gallery'), {
                    mode: 'lg-fade', 
                    download: false, 
                    thumbnail: true 
                });
            });
        </script>
</html>

<?php $this->view('includes/footer'); ?>

<?php else : ?>
    <?php $this->view('404'); ?>
<?php endif; ?>