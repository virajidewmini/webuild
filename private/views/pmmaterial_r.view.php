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
               width: 100%;
               max-width: 1200px;
               height: auto;
               box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .15);
          }
          .pro-id-details{
            width: 100%;
          }

          .pro-id{
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

          .btnnext{
            display: flex;
            justify-content: center;
            align-content: center;
            align-items: center;
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

<div class="pro-id1" style="display:flex;  justify-content: center; padding: 0 0 40px 0;">
    
          <div class="pro-id" style="padding: 0 0 20px 0;">
          
            <?php $project_id = ""; ?>
            <?php $level = ""; ?> 
            <?php $model = ""; ?> 
                    <div class="pro-id-details">
                    <form action="" method="GET" id="form">
                        <div class="title-id" style="display:flex; justify-content:center; padding-top:5px;">
                            <div class="p-title">
                                <h3>Material Reaquests</h3>
                            </div>
                        </div>
                        <?php
                            if(isset($_GET['project_id']) || isset($_GET['model_id']) || isset($_GET['level'])){
                                $project_id = isset($_GET['project_id']) ? $_GET['project_id'] : null;
                                $level = isset($_GET['level']) ? $_GET['level'] : null;
                                $model = isset($_GET['model_id']) ? $_GET['model_id'] : null;
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
                        </div>
                        <?php
                            if(isset($_GET['model_id'])){
                            }
                            else{
                            ?>
                                <div class="btnnext">
                                    <button style="background-color:#E5863D; color:white; margin-left: 20px;" type="submit">Next</button>
                                </div>
                            <?php
                            }
                            ?>
                        <?php
                        }
                        ?>
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
                            <!-- <?php
                            if(isset($_GET['model_id'])){
                            }
                            else{
                            ?>
                                <div class="btnnext">
                                    <button style="background-color:#E5863D; color:white; margin-left: 20px;" type="submit">Next</button>
                                </div>
                            <?php
                            }
                            ?> -->
                            <?php
                            if(isset($_GET['model_id'])){
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
                                            <option <?= get_select2('level', $row->level); ?> value="<?= $row->level; ?>" <?php if ($level == $row->level) {echo "selected"; } ?>>
                                                <?= $row->level; ?>
                                        <?php endforeach; ?>
                                    <?php else: ?>
                                        <option <?= get_select2('level','');?> value="">No Level Found</option>
                                    <?php endif; ?>
                                    </select>
                                </div>
                            </div>
                            <?php
                            }
                            ?>
                            <?php
                            if(isset($_GET['level'])){
                            }
                            else{
                            ?>
                                <div class="btnnext">
                                    <button style="background-color:#E5863D; color:white; margin-left: 20px;" type="submit">Next</button>
                                </div>
                            <?php
                            }
                            ?>
                            <?php
                            if(isset($_GET['level'])){
                            ?>
                                <div class="table">
                                    <div class="table_header">
                                        <h3>Materials</h3>
                                    </div>
                                    <div class="table_section">
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th>Material ID</th>
                                                    <th>Measure Unit</th>
                                                    <th>Quantity</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php if ($rows3):?>
                                                <?php foreach ($rows3 as $row):?>
                                                <tr>
                                                    <td><input readonly value="<?= $row->material_id?>" name="m_id[]"></td>
                                                    <td><input readonly value="<?= $row->measure_unit?>" name="m_uit[]"></td>
                                                    <td><input value="<?= $row->quantity?>" name="m_quantity[]"></td> 
                                                </tr>
                                                <?php endforeach; ?>
                                            <?php else: ?>
                                                <h3>No request were found at this time</h3>
                                            <?php endif; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="table">
                                    <div class="table_header">
                                        <h3>Equipments</h3>
                                    </div>
                                    <div class="table_section">
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th>Equipment ID</th>
                                                    <th>Quantity</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php if ($rows4):?>
                                                <?php foreach ($rows4 as $row):?>
                                                <tr>
                                                    <td><input readonly value="<?= $row->equipment_id?>" name="e_id[]"></td>
                                                    <td><input value="<?= $row->quantity?>" name="e_quantity[]"></td>
                                                </tr>
                                                <?php endforeach; ?>
                                            <?php else: ?>
                                                <h3>No request were found at this time</h3>
                                            <?php endif; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            <?php
                            }
                            ?>
                        <?php endif; ?>
                        <br>
                        <br>
                    </form>
                        <?php
                            if(isset($_GET['level'])){
                        ?>
                            <div class="table_header" style="align-items: center; background-color:white">
                            <a href="<?=ROOT?>/pmmember_search">
                            <input class ="in_a_c" style="border:none; color:#E5863D" type="button" value="Cancel">
                            </a>
                            <form action="" id="request-submit-form">
                            <input id="request-button" class ="in_a_c" style="border:none; background-color:#E5863D; color:white" type="submit" value="Request">
                            </form>
                            </div>
                        <?php
                            }   
                        ?>
                    
                    
                
        </div>
    </div>
<!-- <script>
    let form = document.getElementById('form');
    let requestButton = document.getElementById('request-button');
    requestButton.addEventListener('click', function(e){
        e.preventDefault();
        form.add
        form.submit();  
    });
</script> -->
<script>
    let form = document.getElementById('form');
    let submitForm = document.getElementById('request-submit-form');

    submitForm.addEventListener('click', function(e) {
  e.preventDefault();
  for (var i = 0; i < form.elements.length; i++) {
    var inputA = form.elements[i];
    var name = inputA.name;
    var value = inputA.value;
    var inputB = submitForm.elements[name];
    if (inputB) {
      inputB.value = value;
    }
    submitForm.submit();
  }
}); 

</script>

<?php $this->view('includes/footer'); ?>
<?php else: ?>
    <?php $this->view('404'); ?>
<?php endif; ?>


