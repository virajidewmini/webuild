<?php if(Auth::getRole()== 'Project Manager'): ?>
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
<h2 style="margin-bottom: 20px">MODIFICATION</h2>
<?php if(true): ?>
    
     <div style="display:flex; flex-direction: row; justify-content: center; padding: 0 0 40px 0; ">
          <div class="pro-id" style="padding: 0 0 40px 0; ">
                
                    <div class="pro-id-details">
                    <form method="post">
                        
                        <div class="title-id" style="display:flex; justify-content:center;flex-direction:column; padding-top:5px;">
                            
                            <div class="p-title">
                            <h3 style="text-align:center;">Kitchen</h3>
                            </div>
                        </div>
                        <div class="unit-d">
                            <div >
                                <div class="unit">
                                    <p>Tile :</p>
                                </div>
                                <div class="e-id-d">
                                    <input readonly value="" type="text" name="supervisor_id">
                                </div>
                                <div class="unit">
                                    <p>Color :</p>
                                </div>
                                <div class="e-id-d">
                                    <input readonly value="" type="text" name="supervisor_id">
                                </div>
                            </div>
                        </div>
                        <div class="title-id" style="display:flex; justify-content:center;flex-direction:column; padding-top:5px;">
                            
                            <div class="p-title">
                            <h3 style="text-align:center;">Bathroom</h3>
                            </div>
                        </div>
                        <div class="unit-d">
                            <div >
                                <div class="unit">
                                    <p>Tile :</p>
                                </div>
                                <div class="e-id-d">
                                    <input readonly value="" type="text" name="supervisor_id">
                                </div>
                                <div class="unit">
                                    <p>Color :</p>
                                </div>
                                <div class="e-id-d">
                                    <input readonly value="" type="text" name="supervisor_id">
                                </div>
                            </div>
                        </div>
                        <div class="title-id" style="display:flex; justify-content:center;flex-direction:column; padding-top:5px;">
                            
                            <div class="p-title">
                            <h3 style="text-align:center;">Dinien</h3>
                            </div>
                        </div>
                        <div class="unit-d">
                            <div >
                                <div class="unit">
                                    <p>Tile :</p>
                                </div>
                                <div class="e-id-d">
                                    <input readonly value="" type="text" name="supervisor_id">
                                </div>
                                <div class="unit">
                                    <p>Color :</p>
                                </div>
                                <div class="e-id-d">
                                    <input readonly value="" type="text" name="supervisor_id">
                                </div>
                            </div>
                        </div>
                        <div class="title-id" style="display:flex; justify-content:center;flex-direction:column; padding-top:5px;">
                            
                            <div class="p-title">
                            <h3 style="text-align:center;">Living Room</h3>
                            </div>
                        </div>
                        <div class="unit-d">
                            <div >
                                <div class="unit">
                                    <p>Tile :</p>
                                </div>
                                <div class="e-id-d">
                                    <input readonly value="" type="text" name="supervisor_id">
                                </div>
                                <div class="unit">
                                    <p>Color :</p>
                                </div>
                                <div class="e-id-d">
                                    <input readonly value="" type="text" name="supervisor_id">
                                </div>
                            </div>
                        </div>
                        <div class="title-id" style="display:flex; justify-content:center;flex-direction:column; padding-top:5px;">
                            
                            <div class="p-title">
                            <h3 style="text-align:center;">Living Area</h3>
                            </div>
                        </div>
                        <div class="unit-d">
                            <div >
                                <div class="unit">
                                    <p>Tile :</p>
                                </div>
                                <div class="e-id-d">
                                    <input readonly value="" type="text" name="supervisor_id">
                                </div>
                                <div class="unit">
                                    <p>Color :</p>
                                </div>
                                <div class="e-id-d">
                                    <input readonly value="" type="text" name="supervisor_id">
                                </div>
                            </div>
                        </div>
                        <div class="title-id" style="display:flex; justify-content:center;flex-direction:column; padding-top:5px;">
                            
                            <div class="p-title">
                            <h3 style="text-align:center;">Exterior</h3>
                            </div>
                        </div>
                        <div class="unit-d">
                            <div >
                                <div class="unit">
                                    <p>Tile :</p>
                                </div>
                                <div class="e-id-d">
                                    <input readonly value="" type="text" name="supervisor_id">
                                </div>
                                <div class="unit">
                                    <p>Color :</p>
                                </div>
                                <div class="e-id-d">
                                    <input readonly value="" type="text" name="supervisor_id">
                                </div>
                            </div>
                        </div>
                        
                        <div class="table_header" style="align-items: center; background-color:white">
                        <a href="<?=ROOT?>/pmmember_search">
                        <input class ="in_a_c" style="border:none; color:#E5863D" type="button" value="Cancel">
                        </a>
                        <input class ="in_a_c" style="border:none; background-color:#E5863D; color:white" type="submit" value="Add">
                        </div>
                    </form>
                    </div> 
                
        </div>
    </div>
 <?php endif; ?>
<?php endif; ?>
<?php $this->view('includes/footer') ?>