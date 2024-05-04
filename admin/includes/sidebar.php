<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 " id="sidenav-main" style="background: #ffd0c9;">
<?php $page = substr($_SERVER['SCRIPT_NAME'],strrpos($_SERVER['SERVER_NAME'],"/")+1); ?>    
<div class="sidenav-header">
            <a class="navbar-brand " href="index.php">
            <img src="assets/img/logo.png" class="imgdaslogo" style="width: 150px; height:120px;" id="imgdaslogo" >
             <h4 style="color: black; font-weight:bold;">FunOlympic 2024</h4>
          </a>
    </div>
    
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link <?= $page == 'index.php' ? 'active':''?> active" href="index.php">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
             <i class="fa fa-home text-white text-lg"></i>
            </div>
            <span class="nav-link-text ms-1" style="color: black; font-weight:bold;">Dashboard </span>
          </a>
        </li>
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6" style="color: black; font-weight:bold;">Contact Us Inquiry</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= $page == 'enq.php' ? 'active':''?> active  " href="enq.php">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa fa-globe bth785 text-white text-lg" ></i>
            </div>
            <span class="nav-link-text ms-1" style="color: black; font-weight:bold;">Inquiries</span>
          </a>
        </li>

        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6" style="color: black; font-weight:bold;">Manage Services</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= $page == 'service.php' ? 'active':''?> active " href="service.php">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa fa-bullhorn  bth785 text-white text-lg" ></i>
            </div>
            <span class="nav-link-text sms-1" style="color: black; font-weight:bold;">Services</span>
          </a>
        </li>

        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6" style="color: black; font-weight:bold;">Site Management</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link active  " href="http://localhost/projectdev/admin/user.php">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa fa-user-plus text-white  bth785 text-lg" ></i>
            </div>
            <span class="nav-link-text active ms-1" style="color: black; font-weight:bold;">Users</span>
          </a>
        </li>
      </ul>
    <div class="btnn1">  <a class="btnn" href="http://localhost/projectdev/index.html">Logout</a></div>
    </div>

  </aside>