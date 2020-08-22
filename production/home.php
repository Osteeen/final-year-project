<?php
require("includes/functions.php");
$staffID = $_SESSION['admin_ID'];
$connection = new mysqli("localhost", "root", "", "chapel_attendance");
$account = mysqli_query($connection,  "SELECT * FROM staffs WHERE staff_ID = '$staffID'");
$row = mysqli_fetch_array($account);
                      //get total users
                      $getstaffs = mysqli_query($connection,  "SELECT * FROM staffs");
                      $staffcount=mysqli_num_rows($getstaffs);
                      $getstudents = mysqli_query($connection,  "SELECT * FROM students");
                      $studentcount=mysqli_num_rows($getstudents);
                      $Total_staff_student = $staffcount+$studentcount;
                      //get total male in the system
                      $get_Student_male = mysqli_query($connection,  "SELECT * FROM students WHERE gender='Male'");
                      $student_male_count=mysqli_num_rows($get_Student_male);
                      $get_Staff_male = mysqli_query($connection,  "SELECT * FROM staffs WHERE Gender='Male'");
                      $staff_male_count=mysqli_num_rows($get_Staff_male);
                      $male_gender = $staff_male_count + $student_male_count;
                      //get total female in the system
                      $get_Student_female = mysqli_query($connection,  "SELECT * FROM students WHERE gender='Female'");
                      $student_female_count=mysqli_num_rows($get_Student_female);
                      $get_Staff_female = mysqli_query($connection,  "SELECT * FROM staffs WHERE Gender='Female'");
                      $staff_female_count=mysqli_num_rows($get_Staff_female);
                      $female_gender = $staff_female_count + $student_female_count;										
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="icon" href="images/logo.jpg" type="image/ico" />

  <title> Chapel Attendance</title>

  <!-- Bootstrap -->
  <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
  <!-- Font Awesome -->
  <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
  <!-- NProgress -->
  <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
  <!-- iCheck -->
  <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">

  <!-- Custom Theme Style -->
  <link href="../build/css/custom.min.css" rel="stylesheet" />
</head>

<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">


          <div class="clearfix"></div>

          <!-- menu profile quick info -->
          <div class="profile clearfix">
            <div class="profile_pic">
              <img src="images/logo.jpg" alt="..." class="img-circle profile_img" />
            </div>
            <div class="profile_info">
              <span>Welcome,</span>
              <h2><?php echo $row['first_name']; ?> <?php echo $row['last_name']; ?> <?php echo $row['mName']; ?></h2>
            </div>
          </div>
          <!-- /menu profile quick info -->

          <br />

          <!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
              <ul class="nav side-menu">
                <li>
                  <a href="home.php"><i class="fa fa-home"></i> Home</a>
                </li>


                <li><a><i class="fa fa-user"></i> Register User <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="registerstudent.php">Register Student</a></li>
                    <li><a href="registerstaff.php">Register Staff</a></li>

                  </ul>
                </li>
                <li>
                  <a href="createattendance.php"><i class="fa fa-plus"></i> Create Attendance</a>
                </li>
                <li>
                  <a href="recordattendance.php"><i class="fa fa-check"></i> Record Attendance</a>
                </li>
                <li>
                  <a href="viewattendance.php"><i class="fa fa-eye"></i> View Attendance</a>
                </li>
              </ul>
            </div>
          </div>
          <!-- /sidebar menu -->

          <!-- /menu footer buttons -->
          <form method="POST" class="sidebar-footer hidden-small">
            <button type="submit" name="lock" data-toggle="tooltip" data-placement="top" title="Logout">
              <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </button>
          </form>
          <!-- /menu footer buttons -->
        </div>
      </div>

      <!-- top navigation -->
      <div class="top_nav">
        <div class="nav_menu">
          <div class="nav toggle">
            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
          </div>
          <nav class="nav navbar-nav">
            <ul class="navbar-right">
              <li class="nav-item dropdown open" style="padding-left: 15px;">
                <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                  <img src="images/logo.jpg" alt="" />Admin
                </a>
                <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href=""><i class="fa fa-home pull-right"></i> Home</a>
                  <a class="dropdown-item" href="regiteruser.php"><i class="fa fa-user pull-right"></i> Register User</a>
                  <a class="dropdown-item" href="createattendance.php"><i class="fa fa-plus pull-right"></i> Create
                    Attendance</a>
                  <a class="dropdown-item" href="recordattendance.php"><i class="fa fa-check pull-right"></i> Record
                    Attendance</a>
                  <a class="dropdown-item" href="viewattendance.php"><i class="fa fa-eye pull-right"></i> View Attendance</a>

                </div>
              </li>
            </ul>
          </nav>
        </div>
      </div>
      <!-- /top navigation -->

      <!-- page content -->

      <div class="right_col" role="main">
        <div class="">
          <div class="clearfix"></div>

          <div class="row">
            <div class="col-md-12">
              <div class="">
                <div class="x_content">
                  <div class="row">
                    <div class="animated flipInY col-lg-4 col-md-4 col-sm-6">
                      <div class="tile-stats">
                        <div class="icon">
                          <i class="fa fa-users"></i>
                        </div>
                        <div class="count"><?php echo $Total_staff_student;	 ?></div>

                        <h3>Total Users</h3>
                      </div>
                    </div>               
                    <div class="animated flipInY col-lg-4 col-md-4 col-sm-6">
                      <div class="tile-stats">
                        <div class="icon">
                          <i class="fa fa-male"></i>
                        </div>
                        <div class="count"><?php echo $male_gender;	 ?></div>

                        <h3>Total Males</h3>
                      </div>
                    </div>
                    <div class="animated flipInY col-lg-4 col-md-4 col-sm-6">
                      <div class="tile-stats">
                        <div class="icon">
                          <i class="fa fa-female"></i>
                        </div>
                        <div class="count"><?php echo $female_gender;	 ?></div>

                        <h3>Total Females</h3>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 col-sm-6">
              <div class="x_panel fixed_height_120">
                <div class="text-center">
                  <h2>Register User</h2>
                  <hr>
                  </hr>

                  <div class="clearfix"></div>
                </div>

                <div class="x_content text-center">
                  <a href="regiteruser.php" class="btn btn-app"> <i class="fa fa-user"></i> Register </a>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-6">
              <div class="x_panel fixed_height_120">
                <div class="text-center">
                  <h2>Create Attendance</h2>
                  <hr>
                  </hr>

                  <div class="clearfix"></div>
                </div>
                <div class="x_content text-center">
                  <a href="createattendance.php" class="btn btn-app">
                    <i class="fa fa-plus"></i> Create
                  </a>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-6">
              <div class="x_panel fixed_height_120">
                <div class="text-center">
                  <h2>View Attendance</h2>
                  <hr>
                  </hr>

                  <div class="clearfix"></div>
                </div>

                <div class="x_content text-center">
                  <a href="viewattendance.php" class="btn btn-app"> <i class="fa fa-eye"></i> View </a>
                </div>
              </div>
            </div>

          </div>
          <!-- <div class="col-md-12 col-sm-12">
            <div class="x_panel">
              <div class="x_title">
                <h2>Attendance Chart <small>2020</small></h2>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                <div id="graph_bar" style="width:100%; height:280px;"></div>
              </div>
            </div>
          </div> -->
        </div>
      </div>
      <!-- /page content -->

      <!-- footer content -->
      <footer>
        <div class="pull-right">
          Veritas University Abuja -
          <i class="fa fa-copyright" aria-hidden="true"></i>
          2020
        </div>
        <div class="clearfix"></div>
      </footer>
      <!-- /footer content -->
    </div>
  </div>

  <!-- jQuery -->
  <script src="../vendors/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="../vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!-- FastClick -->
  <script src="../vendors/fastclick/lib/fastclick.js"></script>
  <!-- NProgress -->
  <script src="../vendors/nprogress/nprogress.js"></script>
  <!-- morris.js -->
  <script src="../vendors/raphael/raphael.min.js"></script>
  <script src="../vendors/morris.js/morris.min.js"></script>

  <!-- Custom Theme Scripts -->
  <script src="../build/js/custom.min.js"></script>
</body>

</html>