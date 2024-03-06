<?php if(Auth::getRole()== 'Storekeeper'): ?>
<?php $this->view('includes/header')?>
<div class="table">

<div class="project-details">
        <!-- <div class="table_header">
            <h3>Projects</h3>
        </div> -->
        <div class="project">
            <a href="<?=ROOT?>/request"
            style="text-decoration:none">
            <div class="pro" style="height: 50%;">
                <div class="pro-body" style="background-image: url('<?=ROOT?>/img/on_pro.png') ; heigth:30px;"  >
                    <h1>Total Requests 5</h1>
                </div>
                <div class="pro-bottom">
                    More<i class="fa-solid fa-arrow-right"></i>
                </div>
            </div>
            <div class="table_section" style="height: 250px;">
            <table>
                <thead>
                    <tr>
                        <th>Material Name</th>
                        <th>Quantity</th>
                    </tr>
                </thead>
                <tbody>
                <?php if(isset($rows)): ?>
                
                <?php foreach ($rows as $row):?>
                     <tr>
                    <td><?=$row->material_or_item_name?></td>
                    <td><?=$row->quantity?></td>
                    </tr>

                <?php endforeach;?>

        <?php else: ?>
            <!-- <h3>No Complaints Yet</h3> -->

        <?php endif; ?>
>
                    
                   
                </tbody>
            </table>
        </div>
            </a>
            <a href="<?=ROOT?>/maintain">
            <div class="pro">
                <div class="pro-body" style="background-image: url('<?=ROOT?>/img/cm_pro.png'); ">
                    <h1>Material Status</h1>
                </div>
                
            </div>
            </a>
            <!-- <a href="<?=ROOT?>/Pmongoingproject"> -->
            
            </a>
        </div>
    </div>
        <!-- <div class="table_header">
            <p>Supervisors</p>
            <div>
                <button class="add___">Add members</button>
            </div>
        </div> -->
        <div class="table_section" style="height: 250px;">
            <table>
                <thead>
                    <tr>
                        <th>Material Name</th>
                        <th>Status</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                <?php if(isset($rows)): ?>
                
                <?php foreach ($rows as $row):?>
                     <tr>
                     <td><?=$row->material_name?></td>
                    <td><?=$row->remain_quantity?></td>
                    <td><a href="<?=ROOT?>/request/update/<?=$row->id?>"><button  id="button1" onclick="disableButton()">Low</button></td>
                    </tr>

                <?php endforeach;?>

        <?php else: ?>
            <!-- <h3>No Complaints Yet</h3> -->

        <?php endif; ?>
>
                </tbody>
            </table>
        </div>


        <style>
main {
}
body{
    overflow: hidden;
}
</style>
    
    </div>
     
<?php $this->view('includes/footer'); ?>
<?php else: ?>
    <?php $this->view('404'); ?>
<?php endif; ?>