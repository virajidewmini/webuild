<?php $this->view('includes/header')?>

<style>
    .main-skills{
        display: flex;
        margin-top: 20px;
    }
    .main-skills .card{
        width: 25%;
        margin: 10px;
        background: #fff;
        text-align: center;
        border-radius: 20px;
        padding: 10px;
        box-shadow: 0 20px 35px rgba(0, 0, 0, 0.1);
        
    }
    .main-skills .card h3{
        margin: 10px;
        text-transform: capitalize;
    }
    .main-skills .card p{
        font-size: 12px;
    }
    .main-skills .card button{
        background: orangered;
        color: #fff;
        padding: 7px 15px;
        border-radius: 10px;
        margin-top: 15px;
        cursor: pointer;
    }
    .main-skills .card button:hover{
        background: rgba(223, 70, 15, 0.856);
    }
    .main-skills .card i{
        font-size: 22px;
        padding: 10px;
    }

</style>

<div class="main-skills">
<?php if(isset($rows) && !empty($rows)):?>
    <?php foreach ($rows as $row):  ?>
            <div class="card" style="background-image: url('<?=ROOT?>/img/project.jpg'); background-position: center; background-size: cover;">
            <h3>Project ID : <?=$row->id?></h3>
              <p>Ongoing Project</p>

              <a href="<?= ROOT ?>/clienttask/<?=$row->id?>"><button>Get Started</button></a>
            </div>
    <?php endforeach;?>

    <?php else: ?>
        <h3>No Ongoing Project Yet</h3>

    <?php endif; ?>
 
              
</div>
    