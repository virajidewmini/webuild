<?php if(Auth::getRole()== 'Supervisor'): ?>
<?php $this->view('includes/header')?>

<link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.2/css/lightgallery.min.css">

<style>
    
    #gallery img {
        max-width: 500px; 
        max-height: 500px; 
    }
    .thumbnail1 {
            width: 200px; 
            height: 100px; 
            max-width: 200px;
            max-height: 100px;
            
    }
    td img{
        border-radius: 0%;
    }
    table{
        width: 500px;
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
<div class="table_header">
    <div>
    <?php if(isset($id)):?>
        <a href="<?=ROOT?>/progress/addPhoto/<?=$id?>"><button class="add___">Add New</button></a>  
    <?php endif;?> 
    </div>
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
<br><br><br>

<div class="table_section" style="height: 1000px;">
            <table>
                <thead>
                    <tr>
                       
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php if($photo): ?>
                
                    <?php foreach ($photo as $row):?>
                         <tr>
                        
                        
                        <td><img class="thumbnail1" src="<?=ROOT?>/uploads/<?=$row->file_name?>" alt="Image "></td>
                        
                        
                        <td>
                           
                         <a href="<?=ROOT?>/progress/delete/<?=$row->id?>"><button ><i class="fas fa-trash-alt"></i></button></a> 

                        </td>
                        
                    </tr>

                    <?php endforeach;?>

            <?php else: ?>
                <h3>No Complaints Yet</h3>

            <?php endif; ?>

                </tbody>
            </table>
        </div>
    
    


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

<?php else : ?>
    <?php $this->view('404'); ?>
<?php endif; ?>