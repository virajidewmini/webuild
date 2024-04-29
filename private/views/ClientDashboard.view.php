<?php if ($_SESSION['role'] == 'Client') : ?>
  <head>

  <link rel="stylesheet" href="<?=ROOT?>/css/header.css" />
    <link rel="stylesheet" href="<?=ROOT?>/css/style.css" />
  <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    />
  </head>
<style>
   .container {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  min-height: 100vh;
  font-family: sans-serif;
  background-color: #f0f0f0;
}

h1 {
  font-size: 3rem;
  margin-bottom: 1rem;
}

p {
  font-size: 1.2rem;
  color: #888;
  margin-bottom: 2rem;
}

.role-container {
  display: flex;
  margin: 0 auto;
  justify-content: center;
  width: 70%;
  margin-bottom: 20px;
}
.role-parent-container {
  display: flex;
  justify-content: center;
}
.role {
  display: flex;
  flex-direction: column;
  padding-left: 20px;
  text-align: center;
  margin-bottom: 20px;
  align-items: center; 
   
}

.role-border {
  border: 2px solid #ccc;
  padding: 20px;
  border-radius: 10px;
  display: flex; 
  flex-direction: column; 
  align-items: center; 
}

.role img {
  max-width: 100%;
  height: auto;
  margin-bottom: 10px;
}

.role-btn {
  padding: 1rem 2rem;
  border: none;
  border-radius: 5px;
  font-size: 1rem;
  cursor: pointer;
  background-color: #4CAF50;
  color: white;
}

.role-btn:hover {
  background-color: #3e8e41;
  color: #f0f0f0;
}

.logoutClass{
  margin-left: 90%;
  margin-top: 5%;
}




</style>



<div class="container">
<div class="logoutClass">

<a href="<?=ROOT?>/logout" class="logout">
    <i class="fas fa-right-from-bracket" style="color: red;"></i>
        <span class="text" style="color: red;" >Logout</span>
</a>
</div>

        <h1>Select Your Project</h1>

        
        
            <div class="role-container">
            <?php if(isset($rows) && !empty($rows)):?>
                <?php foreach ($rows as $row): ?>
                    <div class="role">
                        <div class="role-border">
                        <?php 
                            $project=new Client();
                            $status=$project->getStatus($row->id);
                        ?>
                            <h2>Project ID: <?=$row->id?></h2>
                            <img src="<?=ROOT?>/img/project.png" alt="Designer Image">

                            <?php if($status[0]->status=='Pending'):?>
                              <a href="<?= ROOT ?>/quotation/<?=$row->id?>"><button class="role-btn">Get Start</button></a>
                            <?php else: ?>
                              <a href="<?= ROOT ?>/clientmaindashboard/<?=$row->id?>"><button class="role-btn">Get Start</button></a>
                            <?php endif; ?> 
                        </div>
                    </div>
                <?php endforeach;?>
            <?php else: ?>
              <div style="display: flex; flex-direction: column; align-items: center;">
                <img src="<?= ROOT ?>/img/noProject.png" alt="" style="width: 300px; height: 300px;">
                <h3>No Ongoing or Complete Project Yet</h3>
                <p>Go Back <a href="<?=ROOT?>/home">Home</a></p>
              </div>
            <?php endif; ?> 

            

            </div>
            <div>
                <a href="<?= ROOT ?>/allclientrequest"><button class="role-btn" style="background-color: #E5863D;">View Project Request</button></a>
            </div>

    </div>

    <?php $this->view('includes/footer'); ?>
    <?php else : ?>
    <?php $this->view('404'); ?>
    <?php endif; ?>