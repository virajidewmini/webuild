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
               width: 100%;
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
               margin-top: 30px;
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
                        <?php if ($row||$row1):?>
                        <div class="title-id" style="display:flex; justify-content:center;flex-direction:column; padding-top:5px;">
                        <?php print_r($row)?>
                        <?php print_r($row1)?>
                            <h2 style="margin-top: 20px;margin-bottom: 20px">MODIFICATION</h2>
                        </div>
                        <div class="m-part" id="kitchen">
                            <div class="m-part-top">
                                <h3 style="margin-left:20px;margin-top:20px">Kitchen</h3>
                            </div>
                            <div class="unit-d">
                                
                                <div >
                                    <h4 style="text-align:center;">Default</h4>
                                    <div class="unit">
                                        <p>Tile :</p>
                                    </div>
                                    <div class="e-id-d">
                                        <input readonly value="" type="text"  name="supervisor_id">
                                    </div>
                                    <div class="unit">
                                        <p>Price per square foot :</p>
                                    </div>
                                    <div class="e-id-d" style="display:flex;align-items: center;">
                                        <p style="margin-left: 20px">Rs.</p>
                                        <input style="width:150px;"  readonly value="2" type="text" id="dtprice">
                                    </div>
                                    <div class="unit"> 
                                        <p>Color :</p>
                                    </div>
                                    <div class="e-id-d">
                                        <input readonly value="" type="text" name="supervisor_id">
                                    </div>
                                    <div class="unit">
                                        <p>Price per square foot :</p>
                                    </div>
                                    <div class="e-id-d" style="display:flex;align-items: center;">
                                        <p style="margin-left: 20px">Rs.</p>
                                        <input readonly style="width:150px;" value="6" type="text" id="dpprice">
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
                                        <p>Prise per square foot :</p>
                                    </div>
                                    <div class="e-id-d" style="display:flex;align-items: center;">
                                        <p style="margin-left: 20px">Rs.</p>
                                        <input readonly style="width:150px;" value="3" type="text" id="mtprice">
                                    </div>
                                    <div class="unit">
                                        <p>Color :</p>
                                    </div>
                                    <div class="e-id-d">
                                        <input readonly value="" type="text" name="supervisor_id">
                                    </div>
                                    <div class="unit">
                                        <p>Prise per square foot :</p>
                                    </div>
                                    <div class="e-id-d" style="display:flex;align-items: center;">
                                        <p style="margin-left: 20px">Rs.</p>
                                        <input readonly style="width:150px;" value="7" type="text" id="mpprice">
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
                                        <input value="" type="text" key="kitchen" onkeyup="dtilefunc(this)" name="supervisor_id">
                                    </div>
                                    <div class="unit">
                                        <p>Painting :</p>
                                    </div>
                                    <div class="e-id-d">
                                        <input value="" type="text" key="kitchen" onkeyup="dpaintfunc(this)" name="supervisor_id">
                                    </div>
                                </div>
                            </div>
                            <div class="unit-d" style="margin-top:30px; " >
                                
                                <div >
                                    <h4 style="text-align:center;">Default price</h4>
                                    <div class="unit">
                                        <p>For Tiling :</p>
                                    </div>
                                    <div class="e-id-d" style="display:flex;align-items: center;">
                                        <p style="margin-left: 20px">Rs.</p>
                                        <input readonly style="width:150px;" type="text" id="dtOutput" class="dktileprice">
                                    </div>
                                    <div class="unit">
                                        <p>For Painting :</p>
                                    </div>
                                    <div class="e-id-d" style="display:flex;align-items: center;">
                                        <p style="margin-left: 20px">Rs.</p>
                                        <input readonly style="width:150px;" type="text" id="dpOutput" class="dkpaintprice">
                                    </div>
                                </div>
                                <div >
                                    <h4 style="text-align:center;">New price</h4>
                                    <div class="unit">
                                        <p>For Tiling :</p>
                                    </div>
                                    <div class="e-id-d" style="display:flex;align-items: center;">
                                        <p style="margin-left: 20px">Rs.</p>
                                        <input readonly style="width:150px;" type="text" id="ntOutput" class="mktileprice">
                                    </div>
                                    <div class="unit">
                                        <p>For Painting :</p>
                                    </div>
                                    <div class="e-id-d" style="display:flex;align-items: center;">
                                        <p style="margin-left: 20px">Rs.</p>
                                        <input  readonly style="width:150px;" type="text" id="npOutput" class="mkpaintprice">
                                    </div>
                                </div>
                            </div>
                            <hr style="margin-top:40px">
                        </div>
                        <div class="m-part" id="bathroom">
                            <div class="m-part-top">
                                <h3 style="margin-left:20px;margin-top:30px">Bathroom</h3>
                            </div>
                            <div class="unit-d">
                                
                                <div >
                                    <h4 style="text-align:center;">Default</h4>
                                    <div class="unit">
                                        <p>Tile :</p>
                                    </div>
                                    <div class="e-id-d">
                                        <input readonly value="" type="text"  name="supervisor_id">
                                    </div>
                                    <div class="unit">
                                        <p>Price per square foot :</p>
                                    </div>
                                    <div class="e-id-d" style="display:flex;align-items: center;">
                                        <p style="margin-left: 20px">Rs.</p>
                                        <input style="width:150px;"  readonly value="2" type="text" id="dtprice">
                                    </div>
                                    <div class="unit">
                                        <p>Color :</p>
                                    </div>
                                    <div class="e-id-d">
                                        <input readonly value="" type="text" name="supervisor_id">
                                    </div>
                                    <div class="unit">
                                        <p>Price per square foot :</p>
                                    </div>
                                    <div class="e-id-d" style="display:flex;align-items: center;">
                                        <p style="margin-left: 20px">Rs.</p>
                                        <input readonly style="width:150px;" value="6" type="text" id="dpprice">
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
                                        <p>Prise per square foot :</p>
                                    </div>
                                    <div class="e-id-d" style="display:flex;align-items: center;">
                                        <p style="margin-left: 20px">Rs.</p>
                                        <input readonly style="width:150px;" value="3" type="text" id="mtprice">
                                    </div>
                                    <div class="unit">
                                        <p>Color :</p>
                                    </div>
                                    <div class="e-id-d">
                                        <input readonly value="" type="text" name="supervisor_id">
                                    </div>
                                    <div class="unit">
                                        <p>Prise per square foot :</p>
                                    </div>
                                    <div class="e-id-d" style="display:flex;align-items: center;">
                                        <p style="margin-left: 20px">Rs.</p>
                                        <input readonly style="width:150px;" value="7" type="text" id="mpprice">
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
                                        <input value="" type="text" key="bathroom" onkeyup="dtilefunc(this)" name="supervisor_id">
                                    </div>
                                    <div class="unit">
                                        <p>Painting :</p>
                                    </div>
                                    <div class="e-id-d">
                                        <input value="" type="text" key="bathroom" onkeyup="dpaintfunc(this)" name="supervisor_id">
                                    </div>
                                </div>
                            </div>
                            <div class="unit-d" style="margin-top:30px; " >
                                
                                <div >
                                    <h4 style="text-align:center;">Default price</h4>
                                    <div class="unit">
                                        <p>For Tiling :</p>
                                    </div>
                                    <div class="e-id-d" style="display:flex;align-items: center;">
                                        <p style="margin-left: 20px">Rs.</p>
                                        <input readonly style="width:150px;" type="text" id="dtOutput" class="dbtileprice">
                                    </div>
                                    <div class="unit">
                                        <p>For Painting :</p>
                                    </div>
                                    <div class="e-id-d" style="display:flex;align-items: center;">
                                        <p style="margin-left: 20px">Rs.</p>
                                        <input readonly style="width:150px;" type="text" id="dpOutput" class="dbpaintprice">
                                    </div>
                                </div>
                                <div >
                                    <h4 style="text-align:center;">New price</h4>
                                    <div class="unit">
                                        <p>For Tiling :</p>
                                    </div>
                                    <div class="e-id-d" style="display:flex;align-items: center;">
                                        <p style="margin-left: 20px">Rs.</p>
                                        <input readonly style="width:150px;" type="text" id="ntOutput" class="mbtileprice">
                                    </div>
                                    <div class="unit">
                                        <p>For Painting :</p>
                                    </div>
                                    <div class="e-id-d" style="display:flex;align-items: center;">
                                        <p style="margin-left: 20px">Rs.</p>
                                        <input readonly style="width:150px;" type="text" id="npOutput" class="mbpaintprice">
                                    </div>
                                </div>
                            </div>
                            <hr style="margin-top:40px">
                        </div>
                        <div class="m-part" id="dinien">
                            <div class="m-part-top">
                                <h3 style="margin-left:20px;margin-top:30px">Dinien</h3>
                            </div>
                            <div class="unit-d">
                                
                                <div >
                                    <h4 style="text-align:center;">Default</h4>
                                    <div class="unit">
                                        <p>Tile :</p>
                                    </div>
                                    <div class="e-id-d">
                                        <input readonly value="" type="text"  name="supervisor_id">
                                    </div>
                                    <div class="unit">
                                        <p>Price per square foot :</p>
                                    </div>
                                    <div class="e-id-d" style="display:flex;align-items: center;">
                                        <p style="margin-left: 20px">Rs.</p>
                                        <input style="width:150px;"  readonly value="2" type="text" id="dtprice">
                                    </div>
                                    <div class="unit">
                                        <p>Color :</p>
                                    </div>
                                    <div class="e-id-d">
                                        <input readonly value="" type="text" name="supervisor_id">
                                    </div>
                                    <div class="unit">
                                        <p>Price per square foot :</p>
                                    </div>
                                    <div class="e-id-d" style="display:flex;align-items: center;">
                                        <p style="margin-left: 20px">Rs.</p>
                                        <input readonly style="width:150px;" value="6" type="text" id="dpprice">
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
                                        <p>Prise per square foot :</p>
                                    </div>
                                    <div class="e-id-d" style="display:flex;align-items: center;">
                                        <p style="margin-left: 20px">Rs.</p>
                                        <input readonly style="width:150px;" value="3" type="text" id="mtprice">
                                    </div>
                                    <div class="unit">
                                        <p>Color :</p>
                                    </div>
                                    <div class="e-id-d">
                                        <input readonly value="" type="text" name="supervisor_id">
                                    </div>
                                    <div class="unit">
                                        <p>Prise per square foot :</p>
                                    </div>
                                    <div class="e-id-d" style="display:flex;align-items: center;">
                                        <p style="margin-left: 20px">Rs.</p>
                                        <input readonly style="width:150px;" value="7" type="text" id="mpprice">
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
                                        <input value="" type="text" key="dinien" onkeyup="dtilefunc(this)" name="supervisor_id">
                                    </div>
                                    <div class="unit">
                                        <p>Painting :</p>
                                    </div>
                                    <div class="e-id-d">
                                        <input value="" type="text" key="dinien" onkeyup="dpaintfunc(this)" name="supervisor_id">
                                    </div>
                                </div>
                            </div>
                            <div class="unit-d" style="margin-top:30px; " >
                                
                                <div >
                                    <h4 style="text-align:center;">Default price</h4>
                                    <div class="unit">
                                        <p>For Tiling :</p>
                                    </div>
                                    <div class="e-id-d" style="display:flex;align-items: center;">
                                        <p style="margin-left: 20px">Rs.</p>
                                        <input readonly style="width:150px;" type="text" id="dtOutput" class="ddtileprice">
                                    </div>
                                    <div class="unit">
                                        <p>For Painting :</p>
                                    </div>
                                    <div class="e-id-d" style="display:flex;align-items: center;">
                                        <p style="margin-left: 20px">Rs.</p>
                                        <input readonly style="width:150px;" type="text" id="dpOutput" class="ddpaintprice">
                                    </div>
                                </div>
                                <div >
                                    <h4 style="text-align:center;">New price</h4>
                                    <div class="unit">
                                        <p>For Tiling :</p>
                                    </div>
                                    <div class="e-id-d" style="display:flex;align-items: center;">
                                        <p style="margin-left: 20px">Rs.</p>
                                        <input readonly style="width:150px;" type="text" id="ntOutput" class="mdtileprice">
                                    </div>
                                    <div class="unit">
                                        <p>For Painting :</p>
                                    </div>
                                    <div class="e-id-d" style="display:flex;align-items: center;">
                                        <p style="margin-left: 20px">Rs.</p>
                                        <input readonly style="width:150px;" type="text" id="npOutput" class="mdpaintprice">
                                    </div>
                                </div>
                            </div>
                            <hr style="margin-top:40px">
                        </div>
                        <div class="m-part" id="living_room">
                            <div class="m-part-top">
                                <h3 style="margin-left:20px;margin-top:30px">Living Room</h3>
                            </div>
                            <div class="unit-d">
                                
                                <div >
                                    <h4 style="text-align:center;">Default</h4>
                                    <div class="unit">
                                        <p>Tile :</p>
                                    </div>
                                    <div class="e-id-d">
                                        <input readonly value="" type="text"  name="supervisor_id">
                                    </div>
                                    <div class="unit">
                                        <p>Price per square foot :</p>
                                    </div>
                                    <div class="e-id-d" style="display:flex;align-items: center;">
                                        <p style="margin-left: 20px">Rs.</p>
                                        <input style="width:150px;"  readonly value="2" type="text" id="dtprice">
                                    </div>
                                    <div class="unit">
                                        <p>Color :</p>
                                    </div>
                                    <div class="e-id-d">
                                        <input readonly value="" type="text" name="supervisor_id">
                                    </div>
                                    <div class="unit">
                                        <p>Price per square foot :</p>
                                    </div>
                                    <div class="e-id-d" style="display:flex;align-items: center;">
                                        <p style="margin-left: 20px">Rs.</p>
                                        <input readonly style="width:150px;" value="6" type="text" id="dpprice">
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
                                        <p>Prise per square foot :</p>
                                    </div>
                                    <div class="e-id-d" style="display:flex;align-items: center;">
                                        <p style="margin-left: 20px">Rs.</p>
                                        <input readonly style="width:150px;" value="3" type="text" id="mtprice">
                                    </div>
                                    <div class="unit">
                                        <p>Color :</p>
                                    </div>
                                    <div class="e-id-d">
                                        <input readonly value="" type="text" name="supervisor_id">
                                    </div>
                                    <div class="unit">
                                        <p>Prise per square foot :</p>
                                    </div>
                                    <div class="e-id-d" style="display:flex;align-items: center;">
                                        <p style="margin-left: 20px">Rs.</p>
                                        <input readonly style="width:150px;" value="7" type="text" id="mpprice">
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
                                        <input value="" type="text" key="living_room" onkeyup="dtilefunc(this)" name="supervisor_id">
                                    </div>
                                    <div class="unit">
                                        <p>Painting :</p>
                                    </div>
                                    <div class="e-id-d">
                                        <input value="" type="text" key="living_room" onkeyup="dpaintfunc(this)" name="supervisor_id">
                                    </div>
                                </div>
                            </div>
                            <div class="unit-d" style="margin-top:30px; " >
                                
                                <div >
                                    <h4 style="text-align:center;">Default price</h4>
                                    <div class="unit">
                                        <p>For Tiling :</p>
                                    </div>
                                    <div class="e-id-d" style="display:flex;align-items: center;">
                                        <p style="margin-left: 20px">Rs.</p>
                                        <input readonly style="width:150px;" type="text" id="dtOutput" class="dlrtileprice">
                                    </div>
                                    <div class="unit">
                                        <p>For Painting :</p>
                                    </div>
                                    <div class="e-id-d" style="display:flex;align-items: center;">
                                        <p style="margin-left: 20px">Rs.</p>
                                        <input  readonly style="width:150px;" type="text" id="dpOutput" class="dlrpaintprice">
                                    </div>
                                </div>
                                <div >
                                    <h4 style="text-align:center;">New price</h4>
                                    <div class="unit">
                                        <p>For Tiling :</p>
                                    </div>
                                    <div class="e-id-d" style="display:flex;align-items: center;">
                                        <p style="margin-left: 20px">Rs.</p>
                                        <input readonly style="width:150px;" type="text" id="ntOutput" class="mlrtileprice">
                                    </div>
                                    <div class="unit">
                                        <p>For Painting :</p>
                                    </div>
                                    <div class="e-id-d" style="display:flex;align-items: center;">
                                        <p style="margin-left: 20px">Rs.</p>
                                        <input readonly style="width:150px;" type="text" id="npOutput" class="mlrpaintprice">
                                    </div>
                                </div>
                            </div>
                            <hr style="margin-top:40px">
                        </div>
                        <div class="m-part" id="living_area">
                            <div class="m-part-top">
                                <h3 style="margin-left:20px;margin-top:30px">Living Area</h3>
                            </div>
                            <div class="unit-d">
                                
                                <div >
                                    <h4 style="text-align:center;">Default</h4>
                                    <div class="unit">
                                        <p>Tile :</p>
                                    </div>
                                    <div class="e-id-d">
                                        <input readonly value="" type="text"  name="supervisor_id">
                                    </div>
                                    <div class="unit">
                                        <p>Price per square foot :</p>
                                    </div>
                                    <div class="e-id-d" style="display:flex;align-items: center;">
                                        <p style="margin-left: 20px">Rs.</p>
                                        <input style="width:150px;"  readonly value="2" type="text" id="dtprice">
                                    </div>
                                    <div class="unit">
                                        <p>Color :</p>
                                    </div>
                                    <div class="e-id-d">
                                        <input readonly value="" type="text" name="supervisor_id">
                                    </div>
                                    <div class="unit">
                                        <p>Price per square foot :</p>
                                    </div>
                                    <div class="e-id-d" style="display:flex;align-items: center;">
                                        <p style="margin-left: 20px">Rs.</p>
                                        <input readonly style="width:150px;" value="6" type="text" id="dpprice">
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
                                        <p>Prise per square foot :</p>
                                    </div>
                                    <div class="e-id-d" style="display:flex;align-items: center;">
                                        <p style="margin-left: 20px">Rs.</p>
                                        <input readonly style="width:150px;" value="3" type="text" id="mtprice">
                                    </div>
                                    <div class="unit">
                                        <p>Color :</p>
                                    </div>
                                    <div class="e-id-d">
                                        <input readonly value="" type="text" name="supervisor_id">
                                    </div>
                                    <div class="unit">
                                        <p>Prise per square foot :</p>
                                    </div>
                                    <div class="e-id-d" style="display:flex;align-items: center;">
                                        <p style="margin-left: 20px">Rs.</p>
                                        <input readonly style="width:150px;" value="7" type="text" id="mpprice">
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
                                        <input value="" type="text" key="living_area" onkeyup="dtilefunc(this)" name="supervisor_id">
                                    </div>
                                    <div class="unit">
                                        <p>Painting :</p>
                                    </div>
                                    <div class="e-id-d">
                                        <input value="" type="text" key="living_area" onkeyup="dpaintfunc(this)" name="supervisor_id">
                                    </div>
                                </div>
                            </div>
                            <div class="unit-d" style="margin-top:30px; " >
                                
                                <div >
                                    <h4 style="text-align:center;">Default price</h4>
                                    <div class="unit">
                                        <p>For Tiling :</p>
                                    </div>
                                    <div class="e-id-d" style="display:flex;align-items: center;">
                                        <p style="margin-left: 20px">Rs.</p>
                                        <input readonly style="width:150px;" type="text" id="dtOutput" class="dlatileprice">
                                    </div>
                                    <div class="unit">
                                        <p>For Painting :</p>
                                    </div>
                                    <div class="e-id-d" style="display:flex;align-items: center;">
                                        <p style="margin-left: 20px">Rs.</p>
                                        <input readonly style="width:150px;" type="text" id="dpOutput" class="dlapaintprice">
                                    </div>
                                </div>
                                <div >
                                    <h4 style="text-align:center;">New price</h4>
                                    <div class="unit">
                                        <p>For Tiling :</p>
                                    </div>
                                    <div class="e-id-d" style="display:flex;align-items: center;">
                                        <p style="margin-left: 20px">Rs.</p>
                                        <input readonly style="width:150px;" type="text" id="ntOutput" class="mlatileprice">
                                    </div>
                                    <div class="unit">
                                        <p>For Painting :</p>
                                    </div>
                                    <div class="e-id-d" style="display:flex;align-items: center;">
                                        <p style="margin-left: 20px">Rs.</p>
                                        <input readonly style="width:150px;" type="text" id="npOutput" class="mlapaintprice">
                                    </div>
                                </div>
                            </div>
                            <hr style="margin-top:40px">
                        </div>
                        <div class="m-part" id="exterior">
                            <div class="m-part-top">
                                <h3 style="margin-left:20px;margin-top:30px">Exterior</h3>
                            </div>
                            <div class="unit-d">
                                
                                <div >
                                    <h4 style="text-align:center;">Default</h4>
                                    <div class="unit">
                                        <p>Tile :</p>
                                    </div>
                                    <div class="e-id-d">
                                        <input readonly value="" type="text"  name="supervisor_id">
                                    </div>
                                    <div class="unit">
                                        <p>Price per square foot :</p>
                                    </div>
                                    <div class="e-id-d" style="display:flex;align-items: center;">
                                        <p style="margin-left: 20px">Rs.</p>
                                        <input style="width:150px;"  readonly value="2" type="text" id="dtprice">
                                    </div>
                                    <div class="unit">
                                        <p>Color :</p>
                                    </div>
                                    <div class="e-id-d">
                                        <input readonly value="" type="text" name="supervisor_id">
                                    </div>
                                    <div class="unit">
                                        <p>Price per square foot :</p>
                                    </div>
                                    <div class="e-id-d" style="display:flex;align-items: center;">
                                        <p style="margin-left: 20px">Rs.</p>
                                        <input readonly style="width:150px;" value="6" type="text" id="dpprice">
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
                                        <p>Price per square foot :</p>
                                    </div>
                                    <div class="e-id-d" style="display:flex;align-items: center;">
                                        <p style="margin-left: 20px">Rs.</p>
                                        <input readonly style="width:150px;" value="3" type="text" id="mtprice">
                                    </div>
                                    <div class="unit">
                                        <p>Color :</p>
                                    </div>
                                    <div class="e-id-d">
                                        <input readonly value="" type="text" name="supervisor_id">
                                    </div>
                                    <div class="unit">
                                        <p>Prise per square foot :</p>
                                    </div>
                                    <div class="e-id-d" style="display:flex;align-items: center;">
                                        <p style="margin-left: 20px">Rs.</p>
                                        <input readonly style="width:150px;" value="7" type="text" id="mpprice">
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
                                        <input value="" type="text" key="exterior" onkeyup="dtilefunc(this)" name="supervisor_id">
                                    </div>
                                    <div class="unit">
                                        <p>Painting :</p>
                                    </div>
                                    <div class="e-id-d">
                                        <input value="" type="text" key="exterior" onkeyup="dpaintfunc(this)" name="supervisor_id">
                                    </div>
                                </div>
                            </div>
                            <div class="unit-d" style="margin-top:30px; " >
                                
                                <div >
                                    <h4 style="text-align:center;">Default price</h4>
                                    <div class="unit">
                                        <p>For Tiling :</p>
                                    </div>
                                    <div class="e-id-d" style="display:flex;align-items: center;">
                                        <p style="margin-left: 20px">Rs.</p>
                                        <input readonly style="width:150px;" value ="" type="text" id="dtOutput" class="detileprice" >
                                    </div>
                                    <div class="unit">
                                        <p>For Painting :</p>
                                    </div>
                                    <div class="e-id-d" style="display:flex;align-items: center;">
                                        <p style="margin-left: 20px">Rs.</p>
                                        <input readonly style="width:150px;" type="text" id="dpOutput" class="depaintprice">
                                    </div>
                                </div>
                                <div >
                                    <h4 style="text-align:center;">New price</h4>
                                    <div class="unit">
                                        <p>For Tiling :</p>
                                    </div>
                                    <div class="e-id-d" style="display:flex;align-items: center;">
                                        <p style="margin-left: 20px">Rs.</p>
                                        <input readonly style="width:150px;" type="text" id="ntOutput" class="metileprice">
                                    </div>
                                    <div class="unit">
                                        <p>For Painting :</p>
                                    </div>
                                    <div class="e-id-d" style="display:flex;align-items: center;">
                                        <p style="margin-left: 20px">Rs.</p>
                                        <input readonly style="width:150px;" type="text" id="npOutput" class="mepaintprice">
                                    </div>
                                </div>
                            </div>
                            <hr style="margin-top:40px">
                        </div>
                        <div class="title-id" style="display:flex; justify-content:center;flex-direction:column; padding-top:5px;">
                            <h2 style="margin-top: 20px">Price Details</h2>
                        </div>
                        <div class="m-part">
                            <div class="unit-d">
                                
                                <div >
                                    <div class="unit">
                                        <h4>Different in price :</h4>
                                    </div>
                                    <div class="e-id-d" style="display:flex;align-items: center;">
                                        <p style="margin-left: 20px">Rs.</p>
                                        <input readonly style="width:150px;" type="text" class="differentprice">
                                    </div>
                                    <div class="unit">
                                        <h4>Old price :</h4>
                                    </div>
                                    <div class="e-id-d" style="display:flex;align-items: center;">
                                        <p style="margin-left: 20px">Rs.</p>
                                        <input readonly style="width:150px;" value="100000" type="text" class="oldprice">
                                    </div>
                                    <div class="unit">
                                        <h4>New price :</h4>
                                    </div>
                                    <div class="e-id-d" style="display:flex;align-items: center;">
                                        <p style="margin-left: 20px">Rs.</p>
                                        <input readonly style="width:150px;" type="text" class="newprice">
                                    </div>
                                </div>
                            </div>

                        </div>
                        
                        
                        <div class="table_header" style="align-items: center; background-color:white;">
                        <a href="<?=ROOT?>/pmmember_search">
                        <input class ="in_a_c" style="border:none; color:#E5863D" type="button" value="Cancel">
                        </a>
                        <input class ="in_a_c" style="border:none; background-color:#E5863D; color:white" type="submit" value="Add">
                        </div>
                        <?php else: ?>
                            <h3>No Modifications were found at this time</h3>
                        <?php endif; ?>
                    </form>
                    </div> 
                
        </div>
    </div>

<script>
    var total = document.getElementById("total");
    // var tilingPrice = document.getElementsByClassName("dtileprice");
    // function dtilefunc(x,q){
    //     var price = q.parentElement.children[1].value;
    //     console.log(x*q)
    // }
    var dtileprice = 0;

    function Price(){
        var dktileprice = document.getElementsByClassName('dktileprice');
        var dbtileprice = document.getElementsByClassName('dbtileprice');
        var ddtileprice = document.getElementsByClassName('ddtileprice');
        var dlrtileprice = document.getElementsByClassName('dlrtileprice');
        var dlatileprice = document.getElementsByClassName('dlatileprice');
        var detileprice = document.getElementsByClassName('detileprice');
        var dtileprice = (parseFloat(dktileprice[0].value)||0)+(parseFloat(dbtileprice[0].value)||0)+(parseFloat(ddtileprice[0].value)||0)+(parseFloat(dlrtileprice[0].value)||0)+(parseFloat(dlatileprice[0].value)||0)+(parseFloat(detileprice[0].value)||0);

        var dkpaintprice = document.getElementsByClassName('dkpaintprice');
        var dbpaintprice = document.getElementsByClassName('dbpaintprice');
        var ddpaintprice = document.getElementsByClassName('ddpaintprice');
        var dlrpaintprice = document.getElementsByClassName('dlrpaintprice');
        var dlapaintprice = document.getElementsByClassName('dlapaintprice');
        var depaintprice = document.getElementsByClassName('depaintprice');
        var dpaintprice = (parseFloat(dkpaintprice[0].value)||0)+(parseFloat(dbpaintprice[0].value)||0)+(parseFloat(ddpaintprice[0].value)||0)+(parseFloat(dlrpaintprice[0].value)||0)+(parseFloat(dlapaintprice[0].value)||0)+(parseFloat(depaintprice[0].value)||0);

        var mktileprice = document.getElementsByClassName('mktileprice');
        var mbtileprice = document.getElementsByClassName('mbtileprice');
        var mdtileprice = document.getElementsByClassName('mdtileprice');
        var mlrtileprice = document.getElementsByClassName('mlrtileprice');
        var mlatileprice = document.getElementsByClassName('mlatileprice');
        var metileprice = document.getElementsByClassName('metileprice');
        var mtileprice = (parseFloat(mktileprice[0].value)||0)+(parseFloat(mbtileprice[0].value)||0)+(parseFloat(mdtileprice[0].value)||0)+(parseFloat(mlrtileprice[0].value)||0)+(parseFloat(mlatileprice[0].value)||0)+(parseFloat(metileprice[0].value)||0);

        var mkpaintprice = document.getElementsByClassName('mkpaintprice');
        var mbpaintprice = document.getElementsByClassName('mbpaintprice');
        var mdpaintprice = document.getElementsByClassName('mdpaintprice');
        var mlrpaintprice = document.getElementsByClassName('mlrpaintprice');
        var mlapaintprice = document.getElementsByClassName('mlapaintprice');
        var mepaintprice = document.getElementsByClassName('mepaintprice');
        var mpaintprice = (parseFloat(mkpaintprice[0].value)||0)+(parseFloat(mbpaintprice[0].value)||0)+(parseFloat(mdpaintprice[0].value)||0)+(parseFloat(mlrpaintprice[0].value)||0)+(parseFloat(mlapaintprice[0].value)||0)+(parseFloat(mepaintprice[0].value)||0);

        document.querySelector(".differentprice").value = (mtileprice+mpaintprice)-(dtileprice+dpaintprice);

        var differentprice = document.getElementsByClassName('differentprice');
        var oldprice = document.getElementsByClassName('oldprice');

        document.querySelector(".newprice").value = (parseFloat(differentprice[0].value)||0)+(parseFloat(oldprice[0].value)||0);
    }

    function dtilefunc(p){
        // var dprice = p.parentElement.parentElement.parentElement.parentElement.children[1].children[0].children[4].children[1].value;
        // // p.parentElement.parentElement.parentElement.parentElement.children[3].children[0].children[2].children[1].innerHTML = p.value*dprice;
        // var inputBox = document.getElementById("dtOutput"); // Get the input element by ID
        // inputBox.value = p.value*dprice;
        // //console.log()
        var form = document.getElementById(p.getAttribute('key'))
        var dprice = form.querySelector("#dtprice").value;
        // console.log(form.querySelector("#mInput"))
        form.querySelector("#dtOutput").value = p.value*dprice;
  
        
        var mprice = form.querySelector("#mtprice").value;
        // console.log(form.querySelector("#mInput"))
        form.querySelector("#ntOutput").value = p.value*mprice;


        Price()
        // var cal = 0;
        // for(let i = 0; i<tilingPrice.lenth; i++){
        //     // cal +=parseInt(tilingPrice[i].innerText);
        //     console.log(tilingPrice)
        // }
        
    }

    function dpaintfunc(p1){
        // var dprice = p1.parentElement.parentElement.parentElement.parentElement.children[1].children[0].children[8].children[1].value;
        // console.log(p1.getAttribute('key'))
        
        var form = document.getElementById(p1.getAttribute('key'))
        var dprice = form.querySelector("#dpprice").value;
        // console.log(form.querySelector("#mInput"))
        form.querySelector("#dpOutput").value = p1.value*dprice;

        var mprice = form.querySelector("#mpprice").value;
        // console.log(form.querySelector("#mInput"))
        form.querySelector("#npOutput").value = p1.value*mprice;
        
        Price()
        

        // var inputBox = document.getElementById("mInput"); // Get the input element by ID
        // var inputBox =p1.parentElement.parentElement.parentElement.parentElement.children[3].children[0].children[4].children[1].value;
        // inputBox.value = p1.value*dprice;
        // console.log(p1.parentElement.parentElement.parentElement.parentElement.children[3].children[0].children[4].children[1].value)
  
    }
</script>

 <?php endif; ?>
<?php endif; ?>
<?php $this->view('includes/footer') ?>