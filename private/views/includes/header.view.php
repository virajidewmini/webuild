<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Webuild</title>

    <!--font awesome-->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    />

    <!--css files-->
    <link rel="stylesheet" href="<?=ROOT?>/css/header.css" />
    <link rel="stylesheet" href="<?=ROOT?>/css/style.css" />
    
  </head>
  <body>
    <section class="sidebar">
          <a href="#" class="logo">
            <i class="fas fa-university"></i>
            <span class="text">Webuild</span>
          </a>
          <?php if(Auth::logged_in()): ?>
            <main>
            <?php if(Auth::getRole()== 'Project Coordinator'): ?>
              <ul class="side-menu top">

                <li data-url="<?=ROOT?>/coordinatordashboard" >
                  <a href="<?=ROOT?>/coordinatordashboard" class="nav-link" class="nav-link">
                  
                    <i class="fas fa-border-all"></i>
                    <span class="text">Dashboard</span>
                  </a>
                </li>
                <li data-url="<?=ROOT?>/coordinatorrequests">
                  <a href="<?=ROOT?>/coordinatorrequests">
                    <i class="fa-brands fa-r-project"></i>
                    <span class="text">Project Requests</span>
                  </a>
                </li>
                
                <li data-url="<?=ROOT?>/coordinatorprojects">
                  <a href="<?=ROOT?>/coordinatorprojects">
                    <i class="fa-solid fa-list-check"></i>
                    <span class="text">On Going Projects</span>
                  </a>
                </li>
                 
                <li data-url="<?=ROOT?>/coordinatorviewcomplaints">
                  <a href="<?=ROOT?>/coordinatorviewcomplaints" >
                    <i class="fas fa-comments"></i>
                    <span class="text" id="main_link">Complaints</span>
                    
                  </a>
                  <span id="sub_link"></span>
                </li>
                <li data-url="<?=ROOT?>/coordinatorviewmanagers">
                  <a href="<?=ROOT?>/coordinatorviewmanagers">
                    <i class="fa-solid fa-users"></i>
                    <span class="text">Project Managers</span>
                  </a>
                </li>
                <li data-url="<?=ROOT?>/coordinatormaterialrequests">
                  <a href="<?=ROOT?>/coordinatormaterialrequests">
                    <i class="fa-solid fa-m"></i>
                    <span class="text">Material Requests</span>
                  </a>
                </li>
                <li data-url="<?=ROOT?>/coordinatorviewsuppliers">
                  <a href="<?=ROOT?>/coordinatorviewsuppliers">
                    <i class="fa-brands fa-supple"></i>  
                    <span class="text">Suppliers</span>
                  </a>
                </li>
                <li data-url="<?=ROOT?>/coordinatorrequests/rejectedrequests">
                  <a href="<?=ROOT?>/coordinatorrequests/rejectedrequests" class="nav-link">
                    <i class="fa-solid fa-thumbs-down"></i>
                    <span class="text">Rejected Project Projects</span>
                  </a>
                </li> 
                
                <!-- settings and logout -->

                <ul class="side-menu">
                  <!-- <li>
                    <a href="#">
                      <i class="fas fa-cog"></i>
                      <span class="text">Settings</span>
                    </a>
                  </li> -->
                  <li>
                    <a href="<?=ROOT?>/logout" class="logout">
                      <i class="fas fa-right-from-bracket"></i>
                      <span class="text" >Logout</span>
                    </a>
                  </li>
                </ul>
              </section>

              <section class="content">
                <nav>
                  <i class="fas fa-bars menu-btn"></i>
                  <form action="#">
                    <div class="form-input">
                      <!-- <input type="search" placeholder="search..." />
                      <button class="search-btn">
                        <i class="fas fa-search search-icon"></i>
                      </button> -->
        </div>
      </form>
      <?php
        $staff = new Staffs();
        $_SESSION['notifications'] = $staff->getNotifications(Auth::getid());
        $_SESSION['notification_count'] = $staff->getNotificationCount(Auth::getid())[0]->total;
      ?>
      <a href="#" class="notification" id="notificationBell">
        <i class="fas fa-bell"></i>
        <span class="num"><?= ($_SESSION['notification_count']); ?></span>
      </a>
      <div class="notification-dropdown" id="notificationDropdown" style="display: none;
                          position: absolute;
                          top: calc(100% + 10px);
                          right: 0;
                          z-index: 1000;
                          background: #fff;
                          box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
                          border-radius: 8px;
                          padding: 8px 0;
                          min-width: 200px;
                          max-height: 200px; /* Set max height for scroll */
                          overflow-y: auto; /* Enable vertical scroll if content exceeds max height */">
        <ul class="notification-list" style="padding: 0;
                                  margin: 0;
                                  list-style-type: none;">
      
                        <?php if($_SESSION['notifications']):?>
                          <?php foreach ($_SESSION['notifications'] as $row) :?>
                            
                            <li style="position: relative; padding: 8px 16px;">


                            <?php if ($row->type == 'complaint'):?>
                              <a href="<?=ROOT?>/coordinatorviewcomplaints/seemore/<?=$row->msg_id?>"><?=$row->message?></a>
                            <?php elseif ($row->type == 'project request'):?>
                              <a href="<?=ROOT?>/coordinatorrequests/seemore/<?=$row->msg_id?>"><?=$row->message?></a>
                            <?php elseif ($row->type == 'quotation_pm_to_co'):?>
                              <a href="<?=ROOT?>/coordinatorviewquotation/<?=$row->msg_id?>"><?=$row->message?></a>
                            <?php endif;?>

                              <hr style="margin: 4px 0; border: none; border-top: 1px solid #ccc;">
                            </li>
                          <?php endforeach;?>
                        <?php else:?>
                            <li>No notifications</li>
                            <hr>
                        <?php endif;?> 
                      </ul>
                  </div>

                  <script>


                      document.addEventListener('DOMContentLoaded', function() {
                          const bellIcon = document.getElementById('notificationBell');
                          const dropdown = document.getElementById('notificationDropdown');

                          bellIcon.addEventListener('click', function(event) {
                              event.preventDefault();
                              dropdown.style.display = dropdown.style.display === 'block' ? 'none' : 'block';
                          });

                          // Close dropdown if clicked outside
                          document.addEventListener('click', function(event) {
                              if (!bellIcon.contains(event.target) && !dropdown.contains(event.target)) {
                                  dropdown.style.display = 'none';
                              }
                          });
                      });
                  </script>

                  <a href="<?=ROOT?>/Staffprofile" class="profile">
                    <img src="<?=ROOT?>/img/profile.png" alt="" />
                    <!-- USER -->
                    <?=Auth::getFirstname()?>
                  </a>
                </nav>
              
              <!-- second role -->
              <main>


              <?php elseif(Auth::getRole()== 'Storekeeper'): ?>
              <ul class="side-menu top">
                <li class="active">
                  <a href="#" class="nav-link" class="nav-link">
                    <i class="fas fa-border-all"></i>
                    <span class="text">Dashboard</span>
                  </a>
                </li>
                <li>
                  <a href="<?=ROOT?>/request">
                    <i class="fa-solid fa-users"></i>
                    <span class="text">Requests</span>
                  </a>
                </li>
                <li>
                  <a href="<?=ROOT?>/maintain">
                    <i class="fa-solid fa-list-check"></i>
                    <span class="text">Store Materials</span>
                  </a>
                </li>
               
                
                <!-- settings and logout -->

                <ul class="side-menu">
                  <li>
                    <a href="#">
                      <i class="fas fa-cog"></i>
                      <span class="text">Settings</span>
                    </a>
                  </li>
                  <li>
                    <a href="<?=ROOT?>/logout" class="logout">
                      <i class="fas fa-right-from-bracket"></i>
                      <span class="text" >Logout</span>
                    </a>
                  </li>
                </ul>
              </section>

              <section class="content">
                <nav>
                  <i class="fas fa-bars menu-btn"></i>
                  <form action="#">
                    <div class="form-input">
                      <!-- <input type="search" placeholder="search..." />
                      <button class="search-btn">
                        <i class="fas fa-search search-icon"></i>
                      </button> -->
                    </div>
                  </form>
                

                  <a href="#" class="notification">
                    <i class="fas fa-bell"></i>
                    <span class="num">28</span>
                  </a>

                  <a href="<?=ROOT?>/Staffprofile" class="profile">
                    <img src="<?=ROOT?>/img/profile.png" alt="" />
                    <!-- USER -->
                    <?=Auth::getFirstname()?>
                  </a>
                </nav>
              <main>





                <!-- third role -->
              <main>
              <?php elseif (Auth::getRole() == 'Admin') : ?>
                <ul class="side-menu top">
                  <li class="active">
                    <a href="<?= ROOT ?>/admindashboard" class="nav-link">
                      <i class="fas fa-border-all"></i>
                      <span class="text">Dashboard</span>
                    </a>
                  </li>
                  <li>
                    <a href="<?= ROOT ?>/user" class="nav-link">
                      <i class="fa-solid fa-users"></i>
                      <span class="text">Users</span>
                    </a>
                  </li>

                  <li>
                    <a href="<?= ROOT ?>/staff" class="nav-link">
                      <i class="fa-solid fa-users-between-lines"></i>
                      <span class="text">Staff</span>
                    </a>
                  </li>




                  <!-- settings and logout -->

                  <ul class="side-menu">
                    <li>
                      <a href="#">
                        <i class="fas fa-cog"></i>
                        <span class="text">Settings</span>
                      </a>
                    </li>
                    <li>
                      <a href="<?= ROOT ?>/logout" class="logout">
                        <i class="fas fa-right-from-bracket"></i>
                        <span class="text">Logout</span>
                      </a>
                    </li>
                  </ul>
            </section>

            <section class="content">
              <nav>
                <i class="fas fa-bars menu-btn"></i>
                <form action="#">
                  <div class="form-input">
                    <!-- <input type="search" placeholder="search..." />
                                <button class="search-btn">
                                  <i class="fas fa-search search-icon"></i>
                                </button> -->
                  </div>
                </form>

                <?php

                  $staff = new Staffs();
                  $_SESSION['notifications'] = $staff->getNotifications(Auth::getid());
                  $_SESSION['notification_count'] = $staff->getNotificationCount(Auth::getid())[0]->total;
                ?>
                <a href="#" class="notification" id="notificationBell">
                  <i class="fas fa-bell"></i>
                  <span class="num"><?= ($_SESSION['notification_count']); ?></span>
                </a>
                <div class="notification-dropdown" id="notificationDropdown" style="display: none;
                                    position: absolute;
                                    top: calc(100% + 10px);
                                    right: 0;
                                    z-index: 1000;
                                    background: #fff;
                                    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
                                    border-radius: 8px;
                                    padding: 8px 0;
                                    min-width: 200px;
                                    max-height: 200px; /* Set max height for scroll */
                                    overflow-y: auto; /* Enable vertical scroll if content exceeds max height */">
                  <ul class="notification-list" style="padding: 0;
                                            margin: 0;
                                            list-style-type: none;">

                    <?php if ($_SESSION['notifications']) : ?>
                      <?php foreach ($_SESSION['notifications'] as $row) : ?>

                        <li style="position: relative; padding: 8px 16px;">
                          <span style="padding-right: 10px;"><?= $row->message ?></span>
                          <button>
                            <i class="fa-solid fa-eye"></i>
                          </button>
                          <hr style="margin: 4px 0; border: none; border-top: 1px solid #ccc;">
                        </li>
                      <?php endforeach; ?>
                    <?php else : ?>
                      <li>No notifications</li>
                      <hr>
                    <?php endif; ?>
                  </ul>
                </div>

                <script>
                  document.addEventListener('DOMContentLoaded', function() {
                    const bellIcon = document.getElementById('notificationBell');
                    const dropdown = document.getElementById('notificationDropdown');

                    bellIcon.addEventListener('click', function(event) {
                      event.preventDefault();
                      dropdown.style.display = dropdown.style.display === 'block' ? 'none' : 'block';
                    });

                    // Close dropdown if clicked outside
                    document.addEventListener('click', function(event) {
                      if (!bellIcon.contains(event.target) && !dropdown.contains(event.target)) {
                        dropdown.style.display = 'none';
                      }
                    });
                  });
                </script>

                <a href="<?= ROOT ?>/Staffprofile" class="profile">
                  <img src="<?= ROOT ?>/img/profile.png" alt="" />
                  <!-- USER -->
                  <?= Auth::getFirstname() ?>
                </a>
              </nav>
              <main>









            <!-- fourt role -->
            <main>

            <?php elseif(Auth::getRole()== 'Project Manager'): ?>
              <ul class="side-menu top">
                <li  data-url="<?=ROOT?>/Pmdashboard">
                  <a href="<?=ROOT?>/Pmdashboard" class="nav-link" class="nav-link">
                    <i class="fas fa-border-all"></i>
                    <span class="text">Dashboard</span>
                  </a>
                </li>
                <li data-url="<?=ROOT?>/Pmmember">
                  <a href="<?=ROOT?>/Pmmember">
                    <i class="fa-solid fa-users"></i>
                    <span class="text">Members</span>
                  </a>
                </li>
                <li data-url="<?=ROOT?>/Pmtask">
                  <a href="<?=ROOT?>/Pmtask">
                    <i class="fa-solid fa-list-check"></i>
                    <span class="text">Tasks</span>
                  </a>
                </li>
                <li data-url="<?=ROOT?>/Pmmaterial">
                  <a href="<?=ROOT?>/Pmmaterial" class="nav-link">
                    <i class="fa-solid fa-cubes-stacked"></i>
                    <span class="text">Materials</span>
                  </a>
                </li>
                <li data-url="<?=ROOT?>/Pmdailyreports">
                  <a href="<?=ROOT?>/Pmdailyreports" class="nav-link">
                    <i class="fa-solid fa-chart-line"></i>
                    <span class="text">Daily Reports</span>
                  </a>
                </li>
                <li data-url="<?=ROOT?>/Pmcomplaint">
                  <a href="<?=ROOT?>/Pmcomplaint" class="nav-link">
                    <i class="fas fa-comments"></i>
                    <span class="text">Complaints</span>
                  </a>
                </li>
                <li data-url="<?=ROOT?>/Pmimage">
                  <a href="<?=ROOT?>/Pmimage" class="nav-link">
                    <i class="fa-solid fa-images"></i>
                    <span class="text">Images</span>
                  </a>
                </li>
                <!-- settings and logout -->

                <ul class="side-menu">
                  <li>
                    <a href="#">
                      <i class="fas fa-cog"></i>
                      <span class="text">Settings</span>
                    </a>
                  </li>
                  <li>
                    <a href="<?=ROOT?>/logout" class="logout">
                      <i class="fas fa-right-from-bracket"></i>
                      <span class="text" >Logout</span>
                    </a>
                  </li>
                </ul>
              </section>

              <section class="content">
                <nav>
                  <i class="fas fa-bars menu-btn"></i>
                  <form action="#">
                    <div class="form-input">
                      <!-- <input type="search" placeholder="search..." />
                      <button class="search-btn">
                        <i class="fas fa-search search-icon"></i>
                      </button> -->
                    </div>
                  </form>

                  

                  <!-- put notification here -->

                  <a href="#" class="notification">
                    <i class="fas fa-bell"></i>
                    <span class="num">28</span>
                  </a>

                  <script>
                  
                  let liList=document.querySelectorAll(".side-menu.top>li")
                  liList.forEach(li=>{
                    let value=li.dataset.url;
                    let url=document.URL
                    if (url.includes(value)) {
                      li.classList.add("active")
                    }else{
                      li.classList.remove("acive")
                    }
                  })


                      document.addEventListener('DOMContentLoaded', function() {
                          const bellIcon = document.getElementById('notificationBell');
                          const dropdown = document.getElementById('notificationDropdown');

                          bellIcon.addEventListener('click', function(event) {
                              event.preventDefault();
                              dropdown.style.display = dropdown.style.display === 'block' ? 'none' : 'block';
                          });

                          // Close dropdown if clicked outside
                          document.addEventListener('click', function(event) {
                              if (!bellIcon.contains(event.target) && !dropdown.contains(event.target)) {
                                  dropdown.style.display = 'none';
                              }
                          });
                      });
                  </script>

                  <a href="<?=ROOT?>/Staffprofile" class="profile">
                    <img src="<?=ROOT?>/img/profile.png" alt="" />
                    <!-- USER -->
                    <?=Auth::getFirstname()?>
                  </a>
                </nav>
              <main>
            <?php elseif(Auth::getRole()== 'Supervisor'): ?>
              <ul class="side-menu top">
                <li data-url="<?=ROOT?>/supmaindashboard/<?= Auth::getProjectId() ?>">
                  <a href="<?=ROOT?>/supmaindashboard/<?= Auth::getProjectId() ?>">
                    <i class="fas fa-border-all"></i>
                    <span class="text">Dashboard</span>
                  </a>
                </li>
                <li data-url="<?=ROOT?>/dailyprogressreport">
                  <a href="<?=ROOT?>/dailyprogressreport">
                    <i class="fas fa-file"></i>
                    <span class="text">Daily Progress Report</span>
                  </a>
                </li>
                <li data-url="<?=ROOT?>/task">
                  <a href="<?=ROOT?>/task" class="nav-link">
                    <i class="fas fa-chart-simple"></i>
                    <span class="text">Progress</span>
                  </a>
                </li>
                <li data-url="<?=ROOT?>/allcoworkers">
                  <a href="<?=ROOT?>/allcoworkers" class="nav-link">
                    <i class="fa-brands fa-paypal"></i>
                    <span class="text">Coworkers</span>
                  </a>
                </li>
                <li data-url="<?=ROOT?>/supcomplaint">
                  <a href="<?=ROOT?>/supcomplaint" class="nav-link">
                    <i class="fas fa-comments"></i>
                    <span class="text">Complaint</span>
                  </a>
                </li>
                <!-- settings and logout -->

                <ul class="side-menu">
                  <li>
                    <a href="<?=ROOT?>/supdashboard">
                    <i class="fa fa-refresh"></i>
                      <span class="text">Change Project</span>
                    </a>
                  </li>
                  <li>
                    <a href="<?=ROOT?>/logout" class="logout">
                      <i class="fas fa-right-from-bracket"></i>
                      <span class="text" >Logout</span>
                    </a>
                  </li>
                </ul>
              </section>

              <section class="content">
                <nav>
                  <i class="fas fa-bars menu-btn"></i>
                  <form action="#">
                    <div class="form-input">
                      <!-- <input type="search" placeholder="search..." />
                      <button class="search-btn">
                        <i class="fas fa-search search-icon"></i>
                      </button> -->
                    </div>
                  </form>

                  

                  <a href="<?=ROOT?>/Staffprofile" class="profile">
                    <img src="<?=ROOT?>/img/profile.png" alt="" />
                    <!-- USER -->
                    <?=Auth::getFirstname()?>
                  </a>
                </nav>
              
              
              <!--fourth role  -->
            <main>
                
              
            <?php elseif($_SESSION['role']=='Client'): ?>
              <?php 
                  $project=new Client();
                  $status=$project->getStatus(Auth::getProjectId());
              ?>

              <ul class="side-menu top">
                <?php if(Auth::getProjectId() !== NULL ):?>
                <?php if($status[0]->status!=='Pending'):?>
                <li data-url="<?=ROOT?>/clientmaindashboard/<?= Auth::getProjectId() ?>"> 
                  <a href="<?=ROOT?>/clientmaindashboard/<?= Auth::getProjectId() ?>">
                    <i class="fas fa-border-all"></i>
                    <span class="text">Dashboard </span>
                  </a>
                </li>
                <?php endif?>
                <?php endif?>

                
                <li data-url="<?=ROOT?>/quotation/<?= Auth::getProjectId() ?>">
                  <a href="<?=ROOT?>/quotation/<?= Auth::getProjectId() ?>" class="nav-link">
                    <i class="fas fa-file"></i>
                    <span class="text">Quotation</span>
                  </a>
                </li>
             

                <?php if($status[0]->status!=='Pending'):?>
                <li data-url="<?=ROOT?>/installment">
                  <a href="<?=ROOT?>/installment" class="nav-link">
                    <i class="fas fa-chart-simple"></i>
                    <span class="text">Installment</span>
                  </a>
                </li>
                <?php endif?>

                <?php if($status[0]->status!=='Pending'):?>
                <li data-url="<?=ROOT?>/clienttask">
                  <a href="<?=ROOT?>/clienttask" class="nav-link">
                    <i class="fa-brands fa-paypal"></i>
                    <span class="text">Progress</span>
                  </a>
                </li>
                <?php endif?>

                <?php if($status[0]->status!=='Pending'):?>
                <li data-url="<?=ROOT?>/clientcomplaint">
                  <a href="<?=ROOT?>/clientcomplaint" class="nav-link">
                    <i class="fas fa-comments"></i>
                    <span class="text">Complaint</span>
                  </a>
                </li>
                <?php endif?>

                <?php if($status[0]->status!=='Pending'):?>
                <li  data-url="<?=ROOT?>/rate">
                  <a href="<?=ROOT?>/rate" class="nav-link">
                    <i class="fas fa-comments"></i>
                    <span class="text">Rate & Review</span>
                  </a>
                </li>
                <?php endif?>
                <!-- settings and logout -->

                <ul class="side-menu">
                  <li>
                    <a href="<?=ROOT?>/clientdashboard">
                    <i class="fa fa-refresh"></i>
                      <span class="text">Change Project</span>
                    </a>
                  </li>
                  <li>
                    <a href="<?=ROOT?>/logout" class="logout">
                      <i class="fas fa-right-from-bracket"></i>
                      <span class="text" >Logout</span>
                    </a>
                  </li>
                </ul>
              </section>

              <section class="content">
                <nav>
                  <i class="fas fa-bars menu-btn"></i>
                  <form action="#">
                    <div class="form-input">
                      <!-- <input type="search" placeholder="search..." /> 
                      <button class="search-btn">
                        <i class="fas fa-search search-icon"></i>
                      </button>  -->
        </div>
      </form>



      <a href="<?= ROOT ?>/Staffprofile" class="profile">
        <img src="<?= ROOT ?>/img/profile.png" alt="" />
        <!-- USER -->
        <?= Auth::getFirstname() ?>
      </a>
    </nav>
    









  
    <?php else : ?>
      <ul class="side-menu top">
        <li class="active">
          <a href="#" class="nav-link">
            <i class="fas fa-border-all"></i>
            <span class="text">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="#" class="nav-link">
            <i class="fas fa-file"></i>
            <span class="text">Report</span>
          </a>
        </li>
        <li>
          <a href="#" class="nav-link">
            <i class="fas fa-chart-simple"></i>
            <span class="text">Progress</span>
          </a>
        </li>
        <li>
          <a href="#" class="nav-link">
            <i class="fa-brands fa-paypal"></i>
            <span class="text">Payment</span>
          </a>
        </li>
        <li>
          <a href="#" class="nav-link">
            <i class="fas fa-comments"></i>
            <span class="text">Complaint</span>
          </a>
        </li>
        <!-- settings and logout -->

        <ul class="side-menu">
          <li>
            <a href="#">
              <i class="fas fa-cog"></i>
              <span class="text">Settings</span>
            </a>
          </li>
          <li>
            <a href="<?= ROOT ?>/logout" class="logout">
              <i class="fas fa-right-from-bracket"></i>
              <span class="text">Logout</span>
            </a>
          </li>
        </ul>
  </section>

  <section class="content">
    <nav>
      <i class="fas fa-bars menu-btn"></i>
      <form action="#">
        <div class="form-input">
          <!-- <input type="search" placeholder="search..." />
                      <button class="search-btn">
                        <i class="fas fa-search search-icon"></i>
                      </button> -->
                    </div>
                  </form>

                  <a href="#" class="notification">
                    <i class="fas fa-bell"></i>
                    <span class="num">28</span>
                  </a>

                  <a href="<?=ROOT?>/Userprofile" class="profile">
                    <img src="<?=ROOT?>/img/profile.jpg" alt="" />
                    <!-- USER -->
                    <?=Auth::getFirstname()?>
                  </a>
                </nav>
              <main>
                

            <?php endif; ?>
          <?php endif; ?>





         <script>
            let liList=document.querySelectorAll(".side-menu.top>li")
                  liList.forEach(li=>{
                    let value=li.dataset.url;
                    let url=document.URL
                    if (url.includes(value)) {
                      li.classList.add("active")
                    }else{
                      li.classList.remove("acive")
                    }
                  })
          </script>
