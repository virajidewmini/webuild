
<?php $this->view('includes/header')?>

<link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.2/css/lightgallery.min.css">

<style>
    
    #gallery img {
        max-width: 500px; 
        max-height: 500px; 
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
        <img src="<?=ROOT?>/uploads/<?=$row->file_name?>" alt="Image 1">
    </a>
    <?php endforeach;?>
        <?php else: ?>
            <p>No Photograph evidence</p> 
<?php endif; ?>
    
    
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