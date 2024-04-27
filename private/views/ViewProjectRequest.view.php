
<link rel="stylesheet" href="<?=ROOT?>/css/style.css" />


<div  class="table_header" >
        <h1 style="margin-left: 40%;"> Project Request : <?=$id?></h1>
</div>
    <div class="form_container">
        <form method="post" enctype="multipart/form-data">

            <fieldset class="FormFieldset" >
            <legend class="Formlegend"> Model Details</legend>
            <div class="form-group">
                
                <div class="column">
                    <label for="model">Model Name</label>
                    <input type="text" id="model" name="model" value="<?=$model[0]->name?>" readonly>
                </div>
                
            </div>
            </fieldset>

            <br><br>

            <fieldset class="FormFieldset" >
            <legend class="Formlegend"> Personal Details</legend>
            <div class="form-group">
                
                <div class="column">
                    <label for="occupation">Occupation</label>
                    <input type="text" id="occupation" name="occupation" value="<?=$userData[0]->occupation?>" readonly>
                </div>
                <div class="column">
                    <label for="lastName">Monthly Salary(LKR)</label>
                    <input type="text" id="salary" name="salary" value="<?=$userData[0]->salary?>" readonly>

                </div>

                <div class="column">
                    <label for="proof">Salary Proofing Document</label>
                    <p>Monthly salary sheet or any kind of your monthly income proof docuxment</p>
                    
                    <div class="report-section-content" style="height: 20px;">
                        <p style="margin: 0px;"> <a href="<?=ROOT?>/uploads/<?=$salary[0]->file_name?>"  target="_blank" style="color: blue;"><?=$salary[0]->file_name?></a></p>
                    </div>
                </div>

            </div>
            </fieldset>

        <br><br>

            <fieldset class="FormFieldset" >
            <legend class="Formlegend"> Land Details</legend>
            <div class="form-group">
                
                
            

                <div class="column">
                    <label for="district">District</label>
                    <input type="text" id="district" name="district" value="<?= $land[0]->ul_district?>" readonly>
                </div>

                <div class="column">
                    <label for="town">Town</label>
                    <input type="text" id="town" name="town" value="<?= $land[0]->ul_town?>" readonly>
                </div>
                
                <div class="column">
                    <label for="Street">Street</label>
                    <input type="text" id="street" name="street" value="<?= $land[0]->ul_street?>" readonly>
                </div>

                <div class="column">
                    <label for="area">Land Area(Perch)</label>
                    <input type="test" id="area" name="area" value="<?= $land[0]->ul_area?>" readonly>
                </div>

                <div class="column">
                    <label for="plan">Land Photograph</label>
                    <div class="report-section-content" style="height: 20px;">
                        <p style="margin: 0px;"> <a href="<?=ROOT?>/uploads/<?=$photo[0]->file_name?>"  target="_blank" style="color: blue;"><?=$photo[0]->file_name?></a></p>
                    </div>
                </div>
                <div class="column">
                    <label for="plan">Block Plan of the Land</label>
                    <div class="report-section-content" style="height: 20px;">
                        <p style="margin: 0px;"> <a href="<?=ROOT?>/uploads/<?=$block[0]->file_name?>"  target="_blank" style="color: blue;"><?=$block[0]->file_name?></a></p>
                    </div>
                </div>
            </div>
            </fieldset>
            
           


        <br><br>

       
            <fieldset class="FormFieldset" >
            <legend class="Formlegend">Modification</legend>

            <div class="table_section" >
            <table style="min-width: 0px;">
                <thead>
                    <tr>
                       
                        <th>Modification Area</th>
                        <th>Paint</th>
                        <th>Type</th>
                    </tr>
                </thead>
                <tbody>
                
                    <tr>
                        <td>Living Area</td>
                        <?php if($living):?>
                            <td style="padding: 5px 120px;">

                                <?php if(is_null($living[0]->paint_id)):?>
                                        <div class="input-container">
                                            
                                            <div class="radio-tile" style="background-color: white;">
                                                <label for="default">White</label>
                                            </div>
                                        </div>
                                <?php else:?>
                                        <div class="input-container">
                                        
                                            <div class="radio-tile" style="background-color: <?=$livingPaints[0]->color?>">
                                                <label for="default"><?=$livingPaints[0]->name?></label>
                                            </div>
                                        </div>
                                <?php endif?>
                                        
                                        
                                    </td>
                                    <td style="padding: 5px 120px;">
                                    <?php if(is_null($living[0]->tile_id)):?>
                                        <div class="input-container">
                                            
                                            <div class="radio-tile" style="background-image: url(<?=ROOT?>/tiles/Interior_tile_1.jpeg);">
                                        </div>
                                    <?php else:?>
                                        <div class="input-container">
                                            
                                            <div class="radio-tile" style="background-image: url(<?=ROOT?>/tiles/<?=$living[0]->tile_id?>.jpeg);">  
                                        </div>
                                </div>
                                    <?php endif?>
                            </td>
                            <?php else:?>
                            <td style="padding: 5px 120px;">
                                <div class="input-container">        
                                    <div class="radio-tile" style="background-color: white;">
                                        <label for="default">White</label>
                                    </div>
                                </div>
                            </td>
                            <td style="padding: 5px 120px;">
                                <div class="input-container">
                                    <div class="radio-tile" style="background-image: url(<?=ROOT?>/tiles/Interior_tile_1.jpeg);">
                                </div>
                            </td>
                        <?php endif?>
                        </td>        
                        
                        
                    </tr>
                    <tr>
                        <td>Dining Room</td>

                        
                        <?php if($dining):?>
                            <td style="padding: 5px 120px;">
                            <?php if(is_null($dining[0]->paint_id)): var_dump($dining[0]->paint_id)?>
                                    <div class="input-container">
                                        
                                        <div class="radio-tile" style="background-color: white;">
                                            <label for="default">White</label>
                                        </div>
                                    </div>
                            <?php else:?>
                                    <div class="input-container">
                                    
                                        <div class="radio-tile" style="background-color: <?=$diningPaints[0]->color?>">
                                            <label for="default"><?=$diningPaints[0]->name?></label>
                                        </div>
                                    </div>
                            <?php endif?>
                                    
                                    
                            </td>
                                <td style="padding: 5px 120px;">
                                <?php if(is_null($dining[0]->tile_id)):?>
                                    <div class="input-container">
                                        
                                        <div class="radio-tile" style="background-image: url(<?=ROOT?>/tiles/Interior_tile_1.jpeg);">
                                    </div>
                                <?php else:?>
                                    <div class="input-container">
                                        
                                        <div class="radio-tile" style="background-image: url(<?=ROOT?>/tiles/<?=$dining[0]->tile_id?>.jpeg);">  
                                    </div>
                            </div>
                                <?php endif?>
                        <?php else:?>
                            <td style="padding: 5px 120px;">
                                <div class="input-container">        
                                    <div class="radio-tile" style="background-color: white;">
                                        <label for="default">White</label>
                                    </div>
                                </div>
                            </td>
                            <td style="padding: 5px 120px;">
                                <div class="input-container">
                                    <div class="radio-tile" style="background-image: url(<?=ROOT?>/tiles/Interior_tile_1.jpeg);">
                                </div>
                            </td>
                        <?php endif?>
                        </td>
                    </tr>
                    <tr>
                        <td>Kitchen</td>

                        <?php if($kitchen):?>
                            <td style="padding: 5px 120px;">

                                <?php if(is_null($kitchen[0]->paint_id)):?>
                                        <div class="input-container">
                                            
                                            <div class="radio-tile" style="background-color: white;">
                                                <label for="default">White</label>
                                            </div>
                                        </div>
                                <?php else:?>
                                        <div class="input-container">
                                        
                                            <div class="radio-tile" style="background-color: <?=$kitchenPaints[0]->color?>">
                                                <label for="default"><?=$kitchenPaints[0]->name?></label>
                                            </div>
                                        </div>
                                <?php endif?>
                                        
                                        
                                    </td>
                                    <td style="padding: 5px 120px;">
                                    <?php if(is_null($kitchen[0]->tile_id)):?>
                                        <div class="input-container">
                                            
                                            <div class="radio-tile" style="background-image: url(<?=ROOT?>/tiles/Kitchen_tile_1.jpeg);">
                                        </div>
                                    <?php else:?>
                                        <div class="input-container">
                                            
                                            <div class="radio-tile" style="background-image: url(<?=ROOT?>/tiles/<?=$kitchen[0]->tile_id?>.jpeg);">  
                                        </div>
                                </div>
                                    <?php endif?>
                            </td>
                            <?php else:?>
                            <td style="padding: 5px 120px;">
                                <div class="input-container">        
                                    <div class="radio-tile" style="background-color: white;">
                                        <label for="default">White</label>
                                    </div>
                                </div>
                            </td>
                            <td style="padding: 5px 120px;">
                                <div class="input-container">
                                    <div class="radio-tile" style="background-image: url(<?=ROOT?>/tiles/Kitchen_tile_1.jpeg);">
                                </div>
                            </td>
                        <?php endif?>
                        </td>        
                        
                    </tr>
                    <tr>
                        <td>Bathroom</td>
                        <?php if($bathroom):?>
                            <td style="padding: 5px 120px;">

                                <?php if(is_null($bathroom[0]->paint_id)):?>
                                        <div class="input-container">
                                            
                                            <div class="radio-tile" style="background-color: white;">
                                                <label for="default">White</label>
                                            </div>
                                        </div>
                                <?php else:?>
                                        <div class="input-container">
                                        
                                            <div class="radio-tile" style="background-color: <?=$bathroomPaints[0]->color?>">
                                                <label for="default"><?=$bathroomPaints[0]->name?></label>
                                            </div>
                                        </div>
                                <?php endif?>
                                        
                                        
                                    </td>
                                    <td style="padding: 5px 120px;">
                                    <?php if(is_null($bathroom[0]->tile_id)):?>
                                        <div class="input-container">
                                            
                                            <div class="radio-tile" style="background-image: url(<?=ROOT?>/tiles/Bathroom_tile_1.jpeg);">
                                        </div>
                                    <?php else:?>
                                        <div class="input-container">
                                            
                                            <div class="radio-tile" style="background-image: url(<?=ROOT?>/tiles/<?=$bathroom[0]->tile_id?>.jpeg);">  
                                        </div>
                                </div>
                                    <?php endif?>
                            </td>
                            <?php else:?>
                            <td style="padding: 5px 120px;">
                                <div class="input-container">        
                                    <div class="radio-tile" style="background-color: white;">
                                        <label for="default">White</label>
                                    </div>
                                </div>
                            </td>
                            <td style="padding: 5px 120px;">
                                <div class="input-container">
                                    <div class="radio-tile" style="background-image: url(<?=ROOT?>/tiles/Bathroom_tile_1.jpeg);">
                                </div>
                            </td>
                        <?php endif?>
                        </td>        
                        
                    </tr>
                    <tr>
                        <td>Bedroom</td>
                        <?php if($bedroom):?>
                            <td style="padding: 5px 120px;">

                                <?php if(is_null($bedroom[0]->paint_id)):?>
                                        <div class="input-container">
                                            
                                            <div class="radio-tile" style="background-color: white;">
                                                <label for="default">White</label>
                                            </div>
                                        </div>
                                <?php else:?>
                                        <div class="input-container">
                                        
                                            <div class="radio-tile" style="background-color: <?=$bedroomPaints[0]->color?>">
                                                <label for="default"><?=$bedroomPaints[0]->name?></label>
                                            </div>
                                        </div>
                                <?php endif?>
                                        
                                        
                                    </td>
                                    <td style="padding: 5px 120px;">
                                    <?php if(is_null($bedroom[0]->tile_id)):?>
                                        <div class="input-container">
                                            
                                            <div class="radio-tile" style="background-image: url(<?=ROOT?>/tiles/Interior_tile_1.jpeg);">
                                        </div>
                                    <?php else:?>
                                        <div class="input-container">
                                            
                                            <div class="radio-tile" style="background-image: url(<?=ROOT?>/tiles/<?=$bedroom[0]->tile_id?>.jpeg);">  
                                        </div>
                                </div>
                                    <?php endif?>
                            </td>
                            <?php else:?>
                            <td style="padding: 5px 120px;">
                                <div class="input-container">        
                                    <div class="radio-tile" style="background-color: white;">
                                        <label for="default">White</label>
                                    </div>
                                </div>
                            </td>
                            <td style="padding: 5px 120px;">
                                <div class="input-container">
                                    <div class="radio-tile" style="background-image: url(<?=ROOT?>/tiles/Interior_tile_1.jpeg);">
                                </div>
                            </td>
                        <?php endif?>
                        </td>        
                    </tr>
                    <tr>
                        <td>Exterior</td>
                        <?php if($exterior):?>
                            <td style="padding: 5px 120px;">

                                <?php if(is_null($exterior[0]->paint_id)):?>
                                        <div class="input-container">
                                            
                                            <div class="radio-tile" style="background-color: white;">
                                                <label for="default">White</label>
                                            </div>
                                        </div>
                                <?php else:?>
                                        <div class="input-container">
                                        
                                            <div class="radio-tile" style="background-color: <?=$exteriorPaints[0]->color?>">
                                                <label for="default"><?=$exteriorPaints[0]->name?></label>
                                            </div>
                                        </div>
                                <?php endif?>
                                        
                                        
                                    </td>
                                    <td style="padding: 5px 120px;">
                                    <?php if(is_null($exterior[0]->tile_id)):?>
                                        <div class="input-container">
                                            
                                            <div class="radio-tile" style="background-image: url(<?=ROOT?>/tiles/Exterior_tile_1.jpeg);">
                                        </div>
                                    <?php else:?>
                                        <div class="input-container">
                                            
                                            <div class="radio-tile" style="background-image: url(<?=ROOT?>/tiles/<?=$exterior[0]->tile_id?>.jpeg);">  
                                        </div>
                                </div>
                                    <?php endif?>
                            </td>
                            <?php else:?>
                            <td style="padding: 5px 120px;">
                                <div class="input-container">        
                                    <div class="radio-tile" style="background-color: white;">
                                        <label for="default">White</label>
                                    </div>
                                </div>
                            </td>
                            <td style="padding: 5px 120px;">
                                <div class="input-container">
                                    <div class="radio-tile" style="background-image: url(<?=ROOT?>/tiles/Exterior_tile_1.jpeg);">
                                </div>
                            </td>
                        <?php endif?>
                        </td>        
                        
                    </tr>
                   

            

                </tbody>
            </table>
        </div>
    
            
            

           
            </fieldset>

            
      

        <br><br>

        <fieldset class="FormFieldset" >
            <legend class="Formlegend">Payment Plan</legend>
            <div class="form-group">

                
                <div class="column">
                    <label for="landCondition">Payment Plan</label>
                    <input type="text" id="type" name="type" value="<?= $pack[0]->name?>" readonly>
                </div>
                
                
                
            </div>
            </fieldset>  

            <a href="<?=ROOT?>/allclientrequest"> <button class="v_submit_button" type="button" style="margin-left: 750px; margin-top: 10px;">Ok</button></a>
        
        
        

    </div>
    

    <?php $this->view('includes/footer'); ?>

   

    