<?php if(Auth::getRole()== 'Project Manager'): ?>
<?php $this->view('includes/header')?>
<style>
body{
    overflow: hidden;
    .pro-id{
               background-color: white;
               display: flex;
               padding: 0 0 20px 0;
               border-radius: 20px;
               width: 90%;
               max-width: 700px;
               height: auto;
               box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .15);
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



.form-control{
    width: 150px;
    height:40px;
    text-align: center;
    border-radius: 10px;
    border-color: #E5863D;
    margin-right: 5%;
}

.in_a_c:hover{
    box-shadow: 0px 5px 20px rgba(0, 0, 0, 0.4);
}
.in_a_c:active{
    box-shadow: 0px 5px 20px rgba(0, 0, 0, 0.2);
}
}
</style>
<!-- <form action="" method="POST"> -->
<div style="display:flex; flex-direction: row; justify-content: center; padding: 0 0 40px 0; ">
          <div class="pro-id" style="padding: 0 0 20px 0; ">
            <?php $project_id = ""; ?>
            <?php $level = ""; ?> 
                    <div class="pro-id-details">
                    <form action="" method="GET">
                        <div class="title-id" style="display:flex; justify-content:center; padding-top:5px;">
                            <div class="p-title">
                                <h3>Material Reaquests</h3>
                            </div>
                        </div>
                        <?php
                            if(isset($_GET['project_id']) || isset($_GET['level'])){
                                $project_id = isset($_GET['project_id']) ? $_GET['project_id'] : null;
                                $level = isset($_GET['level']) ? $_GET['level'] : null;
                            }
                        ?>

                        <?php
                        if(isset($_GET['project_id'])){
                        ?>
                        <div class="unit-d">
                            <div class="unit">
                                <p>Project ID :</p>
                            </div>
                            <div class="e-id-d">
                                
                                <select style="height:35px; width:100px; margin-left: 10px;" name="project_id" class="form-control" type="text">
                                <option  value="" <?= get_select2('project_id','');?>>--Select ID--</option >
                                <?php if($rows): ?>
                                    <?php foreach($rows as $row): ?>
                                        <option <?= get_select2('project_id', $row->id); ?> value="<?= $row->id; ?>" <?php if ($project_id == $row->id) {echo "selected"; } ?>>
                                            <?= $row->id; ?>
                                    <?php endforeach; ?>
                                <?php else: ?>
                                    <option <?= get_select2('project_id','');?> value="">No Project Found</option>
                                <?php endif; ?>
                                </select>
                            </div>
                            <!-- <button style="background-color:#E5863D; color:white; margin-left: 20px;" class="" type="submit">Add</button> -->
                        </div>
                        <?php
                        }
                        else{
                        ?>
                        <div class="unit-d">
                            <div class="unit">
                                <p>Project ID :</p>
                            </div>
                            <div class="e-id-d">
                                <select style="height:35px; width:100px; margin-left: 10px;" name="project_id" class="form-control" type="text">
                                <option  value="<?=$project_id?>" <?= get_select2('project_id','');?>>--Select ID--</option >
                                <?php if($rows): ?>
                                    <?php foreach($rows as $row): ?>
                                        <option <?= get_select2('project_id', $row->id); ?> value="<?= $row->id; ?>" <?php if ($project_id == $row->id) {echo "selected"; } ?>>
                                            <?= $row->id; ?>
                                        </option>
                                    <?php endforeach; ?>
                                <?php else: ?>
                                    <option <?= get_select2('project_id','');?> value="">No Project Found</option>
                                <?php endif; ?>
                                </select>
                            </div>
                            <button style="background-color:#E5863D; color:white; margin-left: 20px;" class="" type="submit">Add</button>
                        </div>
                        <?php
                        }
                        ?>
                    </form>
                        <?php if($rows1): ?>
                            <div class="unit-d">
                                <div class="unit">
                                    <p>Model ID :</p>
                                </div>
                                <div class="e-id-d">
                                    <input readonly style="height:35px; width:100px; border-color:#E5863D; text-align:center" value="<?=$rows1[0]->model_id?>" type="text" name="model_id">
                                </div>
                            </div>
                            <div class="unit-d">
                                <div class="unit">
                                    <p>Model Name :</p>
                                </div>
                                <div class="e-id-d">
                                    <input readonly style="height:35px; width:300px; border-color:#E5863D; text-align:center" value="<?=$rows1[0]->model->name?>" type="text" name="model_name">
                                </div>
                            </div>
                            <?php
                            if(isset($_GET['level'])){
                            ?>
                            <div class="unit-d">
                                <div class="unit">
                                    <p>Level :</p>
                                </div>
                                <div class="e-id-d">
                                    
                                    <select style="height:35px; width:100px; margin-left: 10px;" name="level" class="form-control" type="text">
                                    <option  value="" <?= get_select2('level','');?>>--Select ID--</option >
                                    <?php if($rows2): ?>
                                        <?php foreach($rows2 as $row): ?>
                                            <option <?= get_select2('level', $row->id); ?> value="<?= $row->id; ?>" <?php if ($level == $row->id) {echo "selected"; } ?>>
                                                <?= $row->id; ?>
                                        <?php endforeach; ?>
                                    <?php else: ?>
                                        <option <?= get_select2('level','');?> value="">No Project Found</option>
                                    <?php endif; ?>
                                    </select>
                                </div>
                                <button style="background-color:#E5863D; color:white; margin-left: 20px;" class="" type="submit">Add</button>
                            </div>
                            <?php
                            }
                            else{
                            ?>
                            <div class="unit-d">
                                <div class="unit">
                                    <p>Level :</p>
                                </div>
                                <div class="e-id-d">
                                    <select style="height:35px; width:100px; margin-left: 10px;" name="level" class="form-control" type="text">
                                    <option  value="<?=$level?>" <?= get_select2('level','');?>>--Select ID--</option >
                                    <?php if($rows2): ?>
                                        <?php foreach($rows2 as $row): ?>
                                            <option <?= get_select2('level', $row->id); ?> value="<?= $row->id; ?>" <?php if ($level == $row->id) {echo "selected"; } ?>>
                                                <?= $row->id; ?>
                                            </option>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                    </select>
                                </div>
                                <button style="background-color:#E5863D; color:white; margin-left: 20px;" class="" type="submit">Add</button>
                            </div>
                            <?php
                            }
                            ?>
                        <?php endif; ?>
                        <br>
                        <br>
                        <div class="table_header" style="align-items: center; background-color:white">
                        <a href="<?=ROOT?>/pmmember_search">
                        <input class ="in_a_c" style="border:none; color:#E5863D" type="button" value="Cancel">
                        </a>
                        <input class ="in_a_c" style="border:none; background-color:#E5863D; color:white" type="submit" value="Add">
                        </div>

                    </div> 
                
        </div>
    </div>
<!-- </form> -->
<?php $this->view('includes/footer'); ?>
<?php else: ?>
    <?php $this->view('404'); ?>
<?php endif; ?>


