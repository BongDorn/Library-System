<!-- partial:partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item nav-profile border-bottom">
      <a href="#" class="nav-link flex-column">
        <div class="nav-profile-image">
          <!-- Profile -->
          <?php echo '<img src="" style="circle: 50%; width: 50px; height: 50px; margin-left: 20px; margin-top: 20px; " alt="profile" />'; ?>
          <!-- <span class="login-status online"></span> -->

    

        </div>
        <div class="nav-profile-text d-flex ml-0 mb-3 flex-column">
          <span class="font-weight-semibold mb-1 mt-2 text-center">
            <!-- echo $this->session->userdata('user_name') -->
            <h3><?php echo $_SESSION['username']; ?></h3>

          </span>
          <span class="text-secondary icon-sm text-center">
            <!-- echo $this->session->userdata('user_name') -->
          </span>
        </div>
      </a>
    </li>

    <li class="pt-2 pb-1">
      <h4 class="nav-item-head"><?php echo $_SESSION['role']; ?></h4>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="index.php">
        <i class="mdi mdi-compass-outline menu-icon"></i>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="mng-users.php">        
        <i class="mdi mdi-crosshairs-gps menu-icon"></i>
        <span class="menu-title">Mng Users</span>
     </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
        <i class="mdi mdi-crosshairs-gps menu-icon"></i>
        <span class="menu-title">Mng Add</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="ui-basic">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link" href="#addbook.php">Add....</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Add ....</a>
          </li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="index.php">
      <i class="mdi mdi-crosshairs-gps menu-icon"></i>
        <span class="">Mng ....</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="../logout.php">
        <i class="mdi mdi-crosshairs-gps menu-icon"></i>
        <span class="">logout</span>
      </a>
    </li>

  </ul>
</nav>