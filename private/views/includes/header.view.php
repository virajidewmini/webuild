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
          <a href="<?=ROOT?>/clientcomplaint" class="nav-link">
            <i class="fas fa-comments"></i>
            <span class="text">Complaint</span>
          </a>
        </li>

        <!-- projectcoordinator navbar -->
        <li>
          <a href="<?=ROOT?>/quotation" class="nav-link">
            <i class="fas fa-credit-card-alt"></i>
            <span class="text">Quotation</span>
          </a>
        </li>




        <!-- admin navbar -->

        <li>
          <a href="<?=ROOT?>/user" class="nav-link">
            <i class="fa-solid fa-user"></i>
            <span class="text">Users</span>
          </a>
        </li>

        <li>
          <a href="<?=ROOT?>/staff" class="nav-link">
            <i class="fa-solid fa-users"></i>
            <span class="text">Staff</span>
          </a>
        </li>
      



      <!-- admin navbar end -->


      <!-- common for all users -->
        <li>
          <a href="<?=ROOT?>/userprofile" class="nav-link">
            <i class="fa-solid fa-user"></i>
            <span class="text">View Profile</span>
          </a>
        </li>

      </ul>


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
            <input type="search" placeholder="search..." />
            <button class="search-btn">
              <i class="fas fa-search search-icon"></i>
            </button>
          </div>
        </form>

        <a href="#" class="notification">
          <i class="fas fa-bell"></i>
          <span class="num">28</span>
        </a>

        <a href="#" class="profile">
          <img src="<?=ROOT?>/img/profile.png" alt="" />
          <!-- USER -->
          <?=Auth::user()?>
        </a>
      </nav>

     <main>
        
      
