<?php if(Auth::getRole()== 'Project Coordinator'): ?>
<?php $this->view('includes/header')?>
<style>
body{
    overflow: hidden;
}
</style>
    <?php if($rows["Qualiy_of_Photographs"]):?>
        <div class="table">
            <div class="table_header">
                <div style="display: flex;" >
                    <h3>  Complaints on Qualiy of Photographs </h3>
                </div>
                
            </div>
            <div class="table_section">
                <table>
                    <thead>
                        <tr>
                            <th>Complaint ID</th>
                            <th>Date</th>
                            <th>Status</th>
                            <th>See more</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($rows["Qualiy_of_Photographs"] as $row) :?>
                            <?php if($row->status=='Notified'):?>
                                <tr style="background-color: #e5863d;">                       
                                    <td style="color: white;"><?=$row->id?></td>
                                    <td style="color: white;"><?=$row->date?></td>
                                    <td style="color: white;"><?=$row->status?></td>  
                                    <td>
                                        <a href="<?=ROOT?>/coordinatorviewcomplaints/seemore/<?=$row->id?>">
                                            <button><i class="fa-solid fa-eye"></i></button>
                                        </a>
                                    </td> 
                                    
                                </tr>
                            <?php elseif($row->status=='Pending'):?>
                                <tr>                       
                                    <td><?=$row->id?></td>
                                    <td><?=$row->date?></td>
                                    <td><?=$row->status?></td>  
                                    <td>
                                        <a href="<?=ROOT?>/coordinatorviewcomplaints/seemore/<?=$row->id?>">
                                            <button><i class="fa-solid fa-eye"></i></button>
                                        </a>
                                    </td> 
                                    
                                </tr>
                            <?php endif;?>
                        <?php endforeach;?>
                    </tbody>
                </table>
            </div>    
        </div>
    <?php else:?>
        <h4>No Complaints on Photograph's Quality.</h4>
        <br><br>
    <?php endif;?> 
    <?php if($rows["being_delayed"]):?>
        <div class="table">
            <div class="table_header">
                <div style="display: flex;" >
                    <h3>  Complaints on Construction being delayed </h3>
                </div>
                
            </div>
            <div class="table_section">
                <table>
                    <thead>
                        <tr>
                            <th>Complaint ID</th>
                            <th>Date</th>
                            <th>Status</th>
                            <th>See more</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($rows["being_delayed"] as $row) :?>
                            <?php if($row->status=='Notified'):?>
                                <tr style="background-color: #e5863d;">                       
                                    <td style="color: white;"><?=$row->id?></td>
                                    <td style="color: white;"><?=$row->date?></td>
                                    <td style="color: white;"><?=$row->status?></td>  
                                    <td>
                                        <a href="<?=ROOT?>/coordinatorviewcomplaints/seemore/<?=$row->id?>">
                                            <button><i class="fa-solid fa-eye"></i></button>
                                        </a>
                                    </td> 
                                    
                                </tr>
                            <?php elseif($row->status=='Pending'):?>
                                <tr>                       
                                    <td><?=$row->id?></td>
                                    <td><?=$row->date?></td>
                                    <td><?=$row->status?></td>  
                                    <td>
                                        <a href="<?=ROOT?>/coordinatorviewcomplaints/seemore/<?=$row->id?>">
                                            <button><i class="fa-solid fa-eye"></i></button>
                                        </a>
                                    </td> 
                                    
                                </tr>
                            <?php endif;?>
                        <?php endforeach;?>
                    </tbody>
                </table>
            </div>    
        </div>
    <?php else:?>
        <h4>No Complaints on Construction being delayed.</h4>
        <br><br>
    <?php endif;?> 
    <?php if($rows["Workmanship_&_Materials"]):?>
        <div class="table">
            <div class="table_header">
                <div style="display: flex;" >
                    <h3>  Complaints on Qualiy of Workmanship & Materials </h3>
                </div>
                
            </div>
            <div class="table_section">
                <table>
                    <thead>
                        <tr>
                            <th>Complaint ID</th>
                            <th>Date</th>
                            <th>Status</th>
                            <th>See more</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($rows["Workmanship_&_Materials"] as $row) :?>
                            <?php if($row->status=='Notified'):?>
                                <tr style="background-color: #e5863d;">                       
                                    <td style="color: white;"><?=$row->id?></td>
                                    <td style="color: white;"><?=$row->date?></td>
                                    <td style="color: white;"><?=$row->status?></td>  
                                    <td>
                                        <a href="<?=ROOT?>/coordinatorviewcomplaints/seemore/<?=$row->id?>">
                                            <button><i class="fa-solid fa-eye"></i></button>
                                        </a>
                                    </td> 
                                    
                                </tr>
                            <?php elseif($row->status=='Pending'):?>
                                <tr>                       
                                    <td><?=$row->id?></td>
                                    <td><?=$row->date?></td>
                                    <td><?=$row->status?></td>  
                                    <td>
                                        <a href="<?=ROOT?>/coordinatorviewcomplaints/seemore/<?=$row->id?>">
                                            <button><i class="fa-solid fa-eye"></i></button>
                                        </a>
                                    </td> 
                                    
                                </tr>
                            <?php endif;?>
                        <?php endforeach;?>
                    </tbody>
                </table>
            </div>    
        </div>
    <?php else:?>
        <h4>No Complaints on Workmanship & Material Quality.</h4>
        <br><br>
    <?php endif;?> 



    <?php if($rows["Poor_Communication"]):?>
        <div class="table">
            <div class="table_header">
                <div style="display: flex;" >
                    <h3>  Complaints on Poor Communication </h3>
                </div>
                
            </div>
            <div class="table_section">
                <table>
                    <thead>
                        <tr>
                            <th>Complaint ID</th>
                            <th>Date</th>
                            <th>Status</th>
                            <th>See more</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($rows["Poor_Communication"] as $row) :?>
                            <?php if($row->status=='Notified'):?>
                                <tr style="background-color: #e5863d;">                       
                                    <td style="color: white;"><?=$row->id?></td>
                                    <td style="color: white;"><?=$row->date?></td>
                                    <td style="color: white;"><?=$row->status?></td>  
                                    <td>
                                        <a href="<?=ROOT?>/coordinatorviewcomplaints/seemore/<?=$row->id?>">
                                            <button><i class="fa-solid fa-eye"></i></button>
                                        </a>
                                    </td> 
                                    
                                </tr>
                            <?php elseif($row->status=='Pending'):?>
                                <tr>                       
                                    <td><?=$row->id?></td>
                                    <td><?=$row->date?></td>
                                    <td><?=$row->status?></td>  
                                    <td>
                                        <a href="<?=ROOT?>/coordinatorviewcomplaints/seemore/<?=$row->id?>">
                                            <button><i class="fa-solid fa-eye"></i></button>
                                        </a>
                                    </td> 
                                    
                                </tr>
                            <?php endif;?>
                        <?php endforeach;?>
                    </tbody>
                </table>
            </div>    
        </div>
    <?php else:?>
        <h4>No Complaints on Poor Communication.</h4>
        <br><br>
    <?php endif;?> 


    <?php if($rows["Other"]):?>
        <div class="table">
            <div class="table_header">
                <div style="display: flex;" >
                    <h3>  Complaints on Other </h3>
                    <br><br>
                </div>
                
            </div>
            <div class="table_section">
                <table>
                    <thead>
                        <tr>
                            <th>Complaint ID</th>
                            <th>Date</th>
                            <th>Status</th>
                            <th>See more</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($rows["Other"] as $row) :?>
                            <?php if($row->status=='Notified'):?>
                                <tr style="background-color: #e5863d;">                       
                                    <td style="color: white;"><?=$row->id?></td>
                                    <td style="color: white;"><?=$row->date?></td>
                                    <td style="color: white;"><?=$row->status?></td>  
                                    <td>
                                        <a href="<?=ROOT?>/coordinatorviewcomplaints/seemore/<?=$row->id?>">
                                            <button><i class="fa-solid fa-eye"></i></button>
                                        </a>
                                    </td> 
                                    
                                </tr>
                            <?php elseif($row->status=='Pending'):?>
                                <tr>                       
                                    <td><?=$row->id?></td>
                                    <td><?=$row->date?></td>
                                    <td><?=$row->status?></td>  
                                    <td>
                                        <a href="<?=ROOT?>/coordinatorviewcomplaints/seemore/<?=$row->id?>">
                                            <button><i class="fa-solid fa-eye"></i></button>
                                        </a>
                                    </td> 
                                    
                                </tr>
                            <?php endif;?>
                        <?php endforeach;?>
                    </tbody>
                </table>
            </div>    
        </div>
    <?php else:?>
        <h4>No Complaints on Other.</h4>
        <br><br>
    <?php endif;?> 
    
    

<?php $this->view('includes/footer'); ?>
<?php else: ?>
    <?php $this->view('404'); ?>
<?php endif; ?>
