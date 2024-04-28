<?php $this->view('includes/header')?>
<style>
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

.in_a_c:hover{
    box-shadow: 0px 5px 20px rgba(0, 0, 0, 0.4);
}
.in_a_c:active{
    box-shadow: 0px 5px 20px rgba(0, 0, 0, 0.2);
}
</style>
<?php if($row): ?>
     <div style="display:flex; flex-direction: row; justify-content: center; padding: 0 0 40px 0; ">
          <div class="pro-id" style="padding: 0 0 40px 0; position: absolute; top: 50%;  left: 50%; transform: translate(-50%, -50%); ">
                
                    <div class="pro-id-details">
                        <div class="title-id" style="display:flex; justify-content:center; padding-top:5px;">
                            <div class="p-title" style="width:auto;">
                                <h2>Supervisor Details</h2>
                            </div>
                        </div>
                        <div class="unit-d">
                            <div class="unit">
                                <p>ID :</p>
                            </div>
                            <div class="e-id-d">
                                <input style="font-family:arial; font-size:15px" readonly value="<?=get_var('id',$row[0]->id)?>" type="text" name="supervisor_id">
                            </div>
                        </div>
                        <div class="unit-d">
                            <div class="unit">
                                <p>Name :</p>
                            </div>
                            <div class="e-id-d">
                                <input style="font-family:arial; font-size:15px" readonly value="<?=get_var('id',$row[0]->firstname)?> <?=get_var('id',$row[0]->lastname)?>" type="text" name="supervisor_name">
                            </div>
                        </div>
                        <div class="unit-d">
                            <div class="unit">
                                <p>Email :</p>
                            </div>
                            <div class="e-id-d">
                                <input style="font-family:arial; font-size:15px" readonly value="<?=get_var('id',$row[0]->email)?>" type="email" name="email">
                            </div>
                        </div>
                        <div class="unit-d">
                            <div class="unit">
                                <p>District :</p>
                            </div>
                            <div class="e-id-d">
                                <input style="font-family:arial; font-size:15px" readonly value="<?=get_var('id',$row[0]->district)?>" type="text" name="district">
                            </div>
                        </div>
                        <div class="unit-d">
                            <div class="unit">
                                <p>Qualification :</p>
                            </div>
                            <div class="e-id-d">
                                <textarea style="font-family:arial; font-size:15px" readonly class="task_d" style="color:black" values="<?=get_var('id',$row[0]->qualification)?>" type="text" name="qualification" placeholder="Qualification"><?=get_var('task_id',$row[0]->qualification)?></textarea>
                            </div>
                        </div>
                        <div class="unit-d">
                            <div class="unit">
                                <p>Experience:</p>
                            </div>
                            <div class="e-id-d">
                                <textarea style="font-family:arial; font-size:15px" readonly class="task_d" style="color:black" values="" type="text" name="experience" placeholder="Experience"><?=get_var('task_id',$row[0]->experience)?></textarea>
                            </div>
                        </div>

                    </div> 
                
        </div>
    </div>
 <?php endif; ?>
 <script>console.log(window.location.href)
console.log("")
</script>
<?php $this->view('includes/footer'); ?>