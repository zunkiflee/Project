<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Admin - Tables</title>

  <!-- Custom fonts for this template -->
  <link href="admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="dmin/vendor/font_Nunito/css?family=Nunito&display=swap" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="admin/css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="admin/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="admin.php">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-child"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Admin</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="admin.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

  
      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Addons
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span>Pages</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Login Screens:</h6>
            <a class="collapse-item" href="login.php">Login</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item active">
        <a class="nav-link" href="tables.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Tables</span></a>
      </li>

 <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        DETAIL
      </div>
      
      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>โครงการ</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">ปริญญานิพนธ์:</h6>
            <a class="collapse-item" href="detail.php">รายละเอียด</a>
            <a class="collapse-item" href="detail_2.php">อุปกรณ์</a>
            <a class="collapse-item" href="detail_3.php">ผู้จัดทำปริญญานิพนธ์</a>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
            </li>

               
            <div class="topbar-divider d-none d-sm-block"></div>

                       <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">


              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <?php if (isset($_SESSION['id'])) {  ?>

                <span class="mr-2 d-none d-lg-inline text-gray-600 small">  <?php echo $_SESSION['name']; ?> </span>
                <img class="img-profile rounded-circle" src="img/img1.png">
              </a>
              <?php }else { ?>
                <?php } ?>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
              
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="logout.php" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
             </li>
          </ul>
      </nav>
        <!-- End of Topbar -->

        <div class="container">
          <div class="jumbotron">
            <h3>ปริญญานิพนธ์ เครื่องระบบออกบัตรคิว กรณีศึกษาโรงพยาบาลสะเดา </h3><br>      
             <p class="text-justify">&nbsp;&nbsp;ปริญญานิพนธ์ฉบับนี้เป็นการออกแบบ และจัดทำเครื่องระบบออกบัตรคิว กรณีศึกษาโรงพยาบาลสะเดา ผู้จัดทำได้สำรวจโรงพยาบาลสะเดามีระบบบัตรคิวแบบคูปองมีข้อจำกัดตัวเลขในบัตรคิวและไม่มีระบบจัดเก็บข้อมูล จึงพัฒนาระบบบัตรคิวให้ทันสมัยมากขึ้น เช่น ระบบสามารถออกบัตรคิวให้ผู้ป่วยพร้อมจำแนกผู้ป่วยได้โดยอัตโนมัติ 
             สามารถแสดงผลคิวทางหน้าจอรวมถึงมีการจัดเก็บข้อมูลเพื่อให้เจ้าหน้าที่สามารถตรวจสอบยอดผู้ป่วยรายวันได้ </p>

            <p class="text-justify">&nbsp;&nbsp;เครื่องระบบออกบัตรคิว กรณีศึกษาโรงพยาบาลสะเดา การทำงานแบ่งเป็น 3 ส่วน คือ เครื่องออกบัตรคิว เครื่องเรียกบริการ เว็บเซิร์ฟเวอร์ ใช้ระบบเครือข่ายไร้สายในการติดต่อสื่อสารรับส่งข้อมูลใช้บอร์ดโหนดเอ็มซียู เวอร์ชัน 2 โดยส่งค่าแผนกไปยังบอร์ดราสเบอร์รี่พายที่ทำหน้าที่เป็นเว็บเซิร์ฟเวอร์เพื่อทำการตรวจสอบค่าที่ได้รับและส่งค่ากลับเพื่อออกบัตรคิว การแสดงผลผ่านหน้าจอบัตรคิวโดยดึงข้อมูลจากเว็บเซิร์ฟเวอร์ รวมถึงนำค่าแผนกและลำดับคิวบันทึกข้อมูล อีกทั้งมีเว็บไซต์สำหรับผู้ดูและระบบสามารถตรวจสอบและลบข้อมูลได้</p>

            <p class="text-justify">&nbsp;&nbsp;ผลการทดสอบเครื่องระบบออกบัตรคิว กรณีศึกษาโรงพยาบาลสะเดาทำการทดสอบ คือ การทดสอบในส่วนของออกบัตรคิวแผนก การทดสอบการกดปุ่มเรียกบริการรวมถึงส่วนของจอแสดงผล และการทดสอบความถูกต้องของการบันทึกข้อมูลบนเว็บเซิร์ฟเวอร์ มีการทดสอบระบบการทำงานเป็นเวลา 8 ชั่วโมง สามารถทำงานได้อย่างถูกต้อง โดยทดสอบกับผู้ทดลองใช้จำนวน 30 คน มีระดับความพึงพอใจคิดเป็น 90 เปอร์เซ็นต์ และสามารถทำงานได้ตามขอบเขตที่กำหนดไว้</p>

            <h5>ภาพรวมระบบการทำงานเครื่องระบบออกบัตรคิว</h5><br>
              <img src="admin/img/img_1.jpg" class="mx-auto d-block" style="width:50%">  
          </div>
        </div>

      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="admin/vendor/jquery/jquery.min.js"></script>
  <script src="admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="admin/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="admin/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="admin/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="admin/vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="admin/js/demo/datatables-demo.js"></script>

</body>
</html>
