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
               justify-content: space-around;
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
          .square-f{
            display: flex;
               justify-content: center;
               align-items: center;
               margin-left: 5%;
               margin-bottom: 10px;
               margin-top: 30
               px;
          }

.in_a_c:hover{
    box-shadow: 0px 5px 20px rgba(0, 0, 0, 0.4);
}
.in_a_c:active{
    box-shadow: 0px 5px 20px rgba(0, 0, 0, 0.2);
}
</style>
<?php if(true): ?>
    
     <div style="display:flex; flex-direction: row; justify-content: center; padding: 0 0 40px 0; ">
     
          <div class="pro-id" style="padding: 0 0 40px 0; ">
          
                    <div class="pro-id-details">
                    <form method="post">
                        
                        <div class="title-id" style="display:flex; justify-content:center;flex-direction:column; padding-top:5px;">
                            <h2 style="margin-bottom: 20px">MODIFICATION</h2>
                        </div>
                        <div class="m-part">
                            <div class="m-part-top">
                                <h3 style="margin-left:20px;">Kitchen</h3>
                            </div>
                            <div class="unit-d">
                                
                                <div >
                                    <h4 style="text-align:center;">Default</h4>
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
                                <div >
                                    <h4 style="text-align:center;">Modification</h4>
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
                            <div class="square-f">
                                <div style="margin-right:5%"><h4>No. Square foot for</h4></div>
                                <div>
                                    <div class="unit">
                                        <p>Tiling :</p>
                                    </div>
                                    <div class="e-id-d">
                                        <input value="" type="text" name="supervisor_id">
                                    </div>
                                    <div class="unit">
                                        <p>Painting :</p>
                                    </div>
                                    <div class="e-id-d">
                                        <input value="" type="text" name="supervisor_id">
                                    </div>
                                </div>
                            </div>
                            <div class="unit-d" style="margin-top:30px; " >
                                
                                <div >
                                    <h4 style="text-align:center;">Default price</h4>
                                    <div class="unit">
                                        <p>For Tiling :</p>
                                    </div>
                                    <div class="e-id-d">
                                        <input readonly value="" type="text" name="supervisor_id">
                                    </div>
                                    <div class="unit">
                                        <p>For Painting :</p>
                                    </div>
                                    <div class="e-id-d">
                                        <input readonly value="" type="text" name="supervisor_id">
                                    </div>
                                </div>
                                <div >
                                    <h4 style="text-align:center;">New price</h4>
                                    <div class="unit">
                                        <p>For Tiling :</p>
                                    </div>
                                    <div class="e-id-d">
                                        <input readonly value="" type="text" name="supervisor_id">
                                    </div>
                                    <div class="unit">
                                        <p>For Painting :</p>
                                    </div>
                                    <div class="e-id-d">
                                        <input readonly value="" type="text" name="supervisor_id">
                                    </div>
                                </div>
                            </div>
                            <hr style="margin-top:40px">
                        </div>
                        <div class="m-part">
                            <div class="m-part-top">
                                <h3 style="margin-left:20px;margin-top:30px">Kitchen</h3>
                            </div>
                            <div class="unit-d">
                                
                                <div >
                                    <h4 style="text-align:center;">Default</h4>
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
                                <div >
                                    <h4 style="text-align:center;">Modification</h4>
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
                            <div class="square-f">
                                <div style="margin-right:5%"><h4>No. Square foot for</h4></div>
                                <div>
                                    <div class="unit">
                                        <p>Tiling :</p>
                                    </div>
                                    <div class="e-id-d">
                                        <input value="" type="text" name="supervisor_id">
                                    </div>
                                    <div class="unit">
                                        <p>Painting :</p>
                                    </div>
                                    <div class="e-id-d">
                                        <input value="" type="text" name="supervisor_id">
                                    </div>
                                </div>
                            </div>
                            <div class="unit-d" style="margin-top:30px; " >
                                
                                <div >
                                    <h4 style="text-align:center;">Default price</h4>
                                    <div class="unit">
                                        <p>For Tiling :</p>
                                    </div>
                                    <div class="e-id-d">
                                        <input readonly value="" type="text" name="supervisor_id">
                                    </div>
                                    <div class="unit">
                                        <p>For Painting :</p>
                                    </div>
                                    <div class="e-id-d">
                                        <input readonly value="" type="text" name="supervisor_id">
                                    </div>
                                </div>
                                <div >
                                    <h4 style="text-align:center;">New price</h4>
                                    <div class="unit">
                                        <p>For Tiling :</p>
                                    </div>
                                    <div class="e-id-d">
                                        <input readonly value="" type="text" name="supervisor_id">
                                    </div>
                                    <div class="unit">
                                        <p>For Painting :</p>
                                    </div>
                                    <div class="e-id-d">
                                        <input readonly value="" type="text" name="supervisor_id">
                                    </div>
                                </div>
                            </div>
                            <hr style="margin-top:40px">
                        </div>
                        <div class="m-part">
                            <div class="m-part-top">
                                <h3 style="margin-left:20px;margin-top:30px">Kitchen</h3>
                            </div>
                            <div class="unit-d">
                                
                                <div >
                                    <h4 style="text-align:center;">Default</h4>
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
                                <div >
                                    <h4 style="text-align:center;">Modification</h4>
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
                            <div class="square-f">
                                <div style="margin-right:5%"><h4>No. Square foot for</h4></div>
                                <div>
                                    <div class="unit">
                                        <p>Tiling :</p>
                                    </div>
                                    <div class="e-id-d">
                                        <input value="" type="text" name="supervisor_id">
                                    </div>
                                    <div class="unit">
                                        <p>Painting :</p>
                                    </div>
                                    <div class="e-id-d">
                                        <input value="" type="text" name="supervisor_id">
                                    </div>
                                </div>
                            </div>
                            <div class="unit-d" style="margin-top:30px; " >
                                
                                <div >
                                    <h4 style="text-align:center;">Default price</h4>
                                    <div class="unit">
                                        <p>For Tiling :</p>
                                    </div>
                                    <div class="e-id-d">
                                        <input readonly value="" type="text" name="supervisor_id">
                                    </div>
                                    <div class="unit">
                                        <p>For Painting :</p>
                                    </div>
                                    <div class="e-id-d">
                                        <input readonly value="" type="text" name="supervisor_id">
                                    </div>
                                </div>
                                <div >
                                    <h4 style="text-align:center;">New price</h4>
                                    <div class="unit">
                                        <p>For Tiling :</p>
                                    </div>
                                    <div class="e-id-d">
                                        <input readonly value="" type="text" name="supervisor_id">
                                    </div>
                                    <div class="unit">
                                        <p>For Painting :</p>
                                    </div>
                                    <div class="e-id-d">
                                        <input readonly value="" type="text" name="supervisor_id">
                                    </div>
                                </div>
                            </div>
                            <hr style="margin-top:40px">
                        </div>
                        <div class="m-part">
                            <div class="m-part-top">
                                <h3 style="margin-left:20px;margin-top:30px">Kitchen</h3>
                            </div>
                            <div class="unit-d">
                                
                                <div >
                                    <h4 style="text-align:center;">Default</h4>
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
                                <div >
                                    <h4 style="text-align:center;">Modification</h4>
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
                            <div class="square-f">
                                <div style="margin-right:5%"><h4>No. Square foot for</h4></div>
                                <div>
                                    <div class="unit">
                                        <p>Tiling :</p>
                                    </div>
                                    <div class="e-id-d">
                                        <input value="" type="text" name="supervisor_id">
                                    </div>
                                    <div class="unit">
                                        <p>Painting :</p>
                                    </div>
                                    <div class="e-id-d">
                                        <input value="" type="text" name="supervisor_id">
                                    </div>
                                </div>
                            </div>
                            <div class="unit-d" style="margin-top:30px; " >
                                
                                <div >
                                    <h4 style="text-align:center;">Default price</h4>
                                    <div class="unit">
                                        <p>For Tiling :</p>
                                    </div>
                                    <div class="e-id-d">
                                        <input readonly value="" type="text" name="supervisor_id">
                                    </div>
                                    <div class="unit">
                                        <p>For Painting :</p>
                                    </div>
                                    <div class="e-id-d">
                                        <input readonly value="" type="text" name="supervisor_id">
                                    </div>
                                </div>
                                <div >
                                    <h4 style="text-align:center;">New price</h4>
                                    <div class="unit">
                                        <p>For Tiling :</p>
                                    </div>
                                    <div class="e-id-d">
                                        <input readonly value="" type="text" name="supervisor_id">
                                    </div>
                                    <div class="unit">
                                        <p>For Painting :</p>
                                    </div>
                                    <div class="e-id-d">
                                        <input readonly value="" type="text" name="supervisor_id">
                                    </div>
                                </div>
                            </div>
                            <hr style="margin-top:40px">
                        </div>
                        <div class="m-part">
                            <div class="m-part-top">
                                <h3 style="margin-left:20px;margin-top:30px">Kitchen</h3>
                            </div>
                            <div class="unit-d">
                                
                                <div >
                                    <h4 style="text-align:center;">Default</h4>
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
                                <div >
                                    <h4 style="text-align:center;">Modification</h4>
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
                            <div class="square-f">
                                <div style="margin-right:5%"><h4>No. Square foot for</h4></div>
                                <div>
                                    <div class="unit">
                                        <p>Tiling :</p>
                                    </div>
                                    <div class="e-id-d">
                                        <input value="" type="text" name="supervisor_id">
                                    </div>
                                    <div class="unit">
                                        <p>Painting :</p>
                                    </div>
                                    <div class="e-id-d">
                                        <input value="" type="text" name="supervisor_id">
                                    </div>
                                </div>
                            </div>
                            <div class="unit-d" style="margin-top:30px; " >
                                
                                <div >
                                    <h4 style="text-align:center;">Default price</h4>
                                    <div class="unit">
                                        <p>For Tiling :</p>
                                    </div>
                                    <div class="e-id-d">
                                        <input readonly value="" type="text" name="supervisor_id">
                                    </div>
                                    <div class="unit">
                                        <p>For Painting :</p>
                                    </div>
                                    <div class="e-id-d">
                                        <input readonly value="" type="text" name="supervisor_id">
                                    </div>
                                </div>
                                <div >
                                    <h4 style="text-align:center;">New price</h4>
                                    <div class="unit">
                                        <p>For Tiling :</p>
                                    </div>
                                    <div class="e-id-d">
                                        <input readonly value="" type="text" name="supervisor_id">
                                    </div>
                                    <div class="unit">
                                        <p>For Painting :</p>
                                    </div>
                                    <div class="e-id-d">
                                        <input readonly value="" type="text" name="supervisor_id">
                                    </div>
                                </div>
                            </div>
                            <hr style="margin-top:40px">
                        </div>
                        <div class="m-part">
                            <div class="m-part-top">
                                <h3 style="margin-left:20px;margin-top:30px">Kitchen</h3>
                            </div>
                            <div class="unit-d">
                                
                                <div >
                                    <h4 style="text-align:center;">Default</h4>
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
                                <div >
                                    <h4 style="text-align:center;">Modification</h4>
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
                            <div class="square-f">
                                <div style="margin-right:5%"><h4>No. Square foot for</h4></div>
                                <div>
                                    <div class="unit">
                                        <p>Tiling :</p>
                                    </div>
                                    <div class="e-id-d">
                                        <input value="" type="text" name="supervisor_id">
                                    </div>
                                    <div class="unit">
                                        <p>Painting :</p>
                                    </div>
                                    <div class="e-id-d">
                                        <input value="" type="text" name="supervisor_id">
                                    </div>
                                </div>
                            </div>
                            <div class="unit-d" style="margin-top:30px; " >
                                
                                <div >
                                    <h4 style="text-align:center;">Default price</h4>
                                    <div class="unit">
                                        <p>For Tiling :</p>
                                    </div>
                                    <div class="e-id-d">
                                        <input readonly value="" type="text" name="supervisor_id">
                                    </div>
                                    <div class="unit">
                                        <p>For Painting :</p>
                                    </div>
                                    <div class="e-id-d">
                                        <input readonly value="" type="text" name="supervisor_id">
                                    </div>
                                </div>
                                <div >
                                    <h4 style="text-align:center;">New price</h4>
                                    <div class="unit">
                                        <p>For Tiling :</p>
                                    </div>
                                    <div class="e-id-d">
                                        <input readonly value="" type="text" name="supervisor_id">
                                    </div>
                                    <div class="unit">
                                        <p>For Painting :</p>
                                    </div>
                                    <div class="e-id-d">
                                        <input readonly value="" type="text" name="supervisor_id">
                                    </div>
                                </div>
                            </div>
                            <hr style="margin-top:40px">
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