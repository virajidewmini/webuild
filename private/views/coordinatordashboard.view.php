<?php if(Auth::getRole()== 'Project Coordinator'): ?>
<?php $this->view('includes/header')?>

 <div class="project-details">
        <div class="table_header">
            <h3>Projects</h3>
        </div>
        <div class="project">
            <a href="<?=ROOT?>/Pmongoingproject"
            style="text-decoration:none">
            <div class="pro">
                <div class="pro-body" style="background-image: url('<?=ROOT?>/img/on_pro.png');">
                    <h1>Ongoing</h1>
                </div>
                <div class="pro-bottom">
                    More<i class="fa-solid fa-arrow-right"></i>
                </div>
            </div>
            </a>
            <a href="<?=ROOT?>/Pmongoingproject">
            <div class="pro">
                <div class="pro-body" style="background-image: url('<?=ROOT?>/img/cm_pro.png');">
                    <h1>Completed</h1>
                </div>
                <div class="pro-bottom">
                    More<i class="fa-solid fa-arrow-right"></i>
                </div>
            </div>
            </a>
            <a href="<?=ROOT?>/Pmongoingproject">
            <div class="pro">
                <div class="pro-body" style="background-image: url('<?=ROOT?>/img/cn_pro.png');">
                    <h1>Canceled</h1>
                </div>
                <div class="pro-bottom">
                    More<i class="fa-solid fa-arrow-right" style="padding-left: 4px;"></i>
                </div>
            </div>
            </a>
        </div>
    </div>
    

<?php $this->view('includes/footer'); ?>
<?php else: ?>
    <?php $this->view('404'); ?>
<?php endif; ?>
