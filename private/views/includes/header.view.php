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
            <?php if(Auth::getRole()== 'Project Coordinator'): ?>
              <ul class="side-menu top">
                <li class="active">
                  <a href="<?=ROOT?>/coordinatordashboard" class="nav-link" class="nav-link">
                    <i class="fas fa-border-all"></i>
                    <span class="text">Dashboard</span>
                  </a>
                </li>
                <li>
                  <a href="<?=ROOT?>/coordinatorrequests">
                    <i class="fa-solid fa-users"></i>
                    <span class="text">Requests</span>
                  </a>
                </li>
                <li>
                  <a href="<?=ROOT?>/co_allprojects">
                    <i class="fa-solid fa-list-check"></i>
                    <span class="text">Projects</span>
                  </a>
                </li>
                <li>
                  <a href="#" class="nav-link">
                    <i class="fas fa-comments"></i>
                    <span class="text">Complaints</span>
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

                  <a href="<?=ROOT?>/Staffprofile" class="profile">
                    <img src="<?=ROOT?>/img/profile.png" alt="" />
                    <!-- USER -->
                    <?=Auth::getFirstname()?>
                  </a>
                </nav>
              <main>
            <?php elseif(Auth::getRole()== 'Project Manager'): ?>
              <ul class="side-menu top">
                <li class="active">
                  <a href="<?=ROOT?>/Pmdashboard" class="nav-link" class="nav-link">
                    <i class="fas fa-border-all"></i>
                    <span class="text">Dashboard</span>
                  </a>
                </li>
                <li>
                  <a href="<?=ROOT?>/Pmmember">
                    <i class="fa-solid fa-users"></i>
                    <span class="text">Members</span>
                  </a>
                </li>
                <li>
                  <a href="<?=ROOT?>/Pmtask">
                    <i class="fa-solid fa-list-check"></i>
                    <span class="text">Tasks</span>
                  </a>
                </li>
                <li>
                  <a href="#" class="nav-link">
                    <i class="fa-solid fa-cubes-stacked"></i>
                    <span class="text">Materials</span>
                  </a>
                </li>
                <li>
                  <a href="#" class="nav-link">
                    <i class="fa-solid fa-chart-line"></i>
                    <span class="text">Daily Reports</span>
                  </a>
                </li>
                <li>
                  <a href="#" class="nav-link">
                    <i class="fas fa-comments"></i>
                    <span class="text">Complaints</span>
                  </a>
                </li>
                <li>
                  <a href="#" class="nav-link">
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

                  <a href="<?=ROOT?>/Staffprofile" class="profile">
                    <img src="<?=ROOT?>/img/profile.png" alt="" />
                    <!-- USER -->
                    <?=Auth::getFirstname()?>
                  </a>
                </nav>
              <main>
            <?php elseif(Auth::getRole()== 'Supervisor'): ?>
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

                  <a href="<?=ROOT?>/Staffprofile" class="profile">
                    <img src="<?=ROOT?>/img/profile.png" alt="" />
                    <!-- USER -->
                    <?=Auth::getFirstname()?>
                  </a>
                </nav>
              <main>

            <?php elseif(Auth::getRole()== 'Storekeeper'): ?>
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

                  <a href="<?=ROOT?>/Staffprofile" class="profile">
                    <img src="<?=ROOT?>/img/profile.png" alt="" />
                    <!-- USER -->
                    <?=Auth::getFirstname()?>
                  </a>
                </nav>
              <main>
            <?php elseif(Auth::getRole()== 'Admin'): ?>
              <ul class="side-menu top">
                <li class="active">
                  <a href="#" class="nav-link">
                    <i class="fas fa-border-all"></i>
                    <span class="text">Dashboard</span>
                  </a>
                </li>
                <li>
                  <a href="<?=ROOT?>/user" class="nav-link">
                    <i class="fa-solid fa-users"></i>
                    <span class="text">Users</span>
                  </a>
                </li>

                <li>
                  <a href="<?=ROOT?>/staff" class="nav-link">
                    <i class="fa-solid fa-users-between-lines"></i>
                    <span class="text">Staff</span>
                  </a>
                </li>
                

        <a href="#" class="profile">
          <img src="<?=ROOT?>/img/profile.jpg" alt="" />
          <!-- USER -->
          <?=Auth::user()?>
        </a>
      </nav>

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

                  <a href="<?=ROOT?>/Staffprofile" class="profile">
                    <img src="<?=ROOT?>/img/profile.png" alt="" />
                    <!-- USER -->
                    <?=Auth::getFirstname()?>
                  </a>
                </nav>
              <main>
            <?php else: ?>
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

                  <a href="<?=ROOT?>/Userprofile" class="profile">
                    <img src="<?=ROOT?>/img/profile.jpg" alt="" />
                    <!-- USER -->
                    <?=Auth::getFirstname()?>
                  </a>
                </nav>
              <main>
            <?php endif; ?>
          <?php endif; ?>