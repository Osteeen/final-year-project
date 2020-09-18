<?php
require("includes/functions.php");
$staffID = $_SESSION['admin_ID'];
$connection = new mysqli("localhost", "root", "", "chapel_attendance");
$account = mysqli_query($connection,  "SELECT * FROM staffs WHERE staff_ID = '$staffID'");
$row = mysqli_fetch_array($account);

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

    <title>Register Staff</title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet" />

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
                        <button type="submit" name="lock" data-toggle="tooltip" data-placement="top" title="Logout" href="index.php">
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
                                    <a class="dropdown-item" href="home.php"><i class="fa fa-home pull-right"></i> Home</a>
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
                        <div class="col-md-12 col-sm-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Register New User</h2>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <br />
                                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="POST" enctype="multipart/form-data">
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Staff ID <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6">
                                                <input type="text" id="first-name" required="required" class="form-control" name="staff_ID" />
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">First Name <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6">
                                                <input type="text" id="first-name" required="required" class="form-control" name="fName" />
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Last Name <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6">
                                                <input type="text" id="last-name" name="lName" required="required" class="form-control" />
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Middle Name <span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input id="middle-name" class="form-control" type="text" name="mName" required="required" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-3 col-sm-3 label-align">Designation <span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <select class="form-control" name="designation" required>
                                                    <option value>Choose option</option>
                                                    <option value="Academic">Academic</option>
                                                    <option value="Management">Management</option>
                                                    <option value="Non-Academic">Non-Academic</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-3 col-sm-3 label-align">Department <span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <select class="form-control" name="department" required>
                                                    <option value>Choose Department</option>
                                                    <option value="ee">B.A. Ed. Education English</option>
                                                    <option value="els">B.A. English and Literary Studies</option>
                                                    <option value="hir">B.A. History and International Relations</option>
                                                    <option value="phy">B.A. Philosophy</option>
                                                    <option value="rs">B.A. Religious Studies</option>
                                                    <option value="em">B.Ed. Educational Management</option>
                                                    <option value="gc">B.Ed. Guidance and Counseling</option>
                                                    <option value="ss">B.Ed. Social Studies</option>
                                                    <option value="bio">B.Sc. Ed. Biology</option>
                                                    <option value="acc">B.Sc. Accounting</option>
                                                    <option value="am">B.Sc. Applied Microbiology</option>
                                                    <option value="lis">Library and Information Science, BLIS</option>
                                                    <option value="bf">B.Sc. Banking and Finance</option>
                                                    <option value="bch">B.Sc. Biochemistry</option>
                                                    <option value="ba">B.Sc. Business Administration</option>
                                                    <option value="cs">B.Sc. Computer Science</option>
                                                    <option value="e">B.Sc. Economics</option>
                                                    <option value="be">B.Sc. Ed. Business Education</option>
                                                    <option value="ec">B.Sc. Ed. Education Chemistry</option>
                                                    <option value="ee">B.Sc. Ed. Education Economics</option>
                                                    <option value="ep">B.Sc. Ed. Education Physics</option>
                                                    <option value="e">B.Sc. Entrepreneurship</option>
                                                    <option value="ic">B.Sc. Industrial Chemistry</option>
                                                    <option value="ma">B.Sc. Marketing and Advertising</option>
                                                    <option value="mc">B.Sc. Mass Communication</option>
                                                    <option value="pe">B.Sc. Physics with Electronics</option>
                                                    <option value="psd">B.Sc. Political Science and Diplomacy</option>
                                                    <option value="pa">B.Sc. Public Administration</option>
                                                    <option value="boo">B.Sc. Botany</option>
                                                    <option value="zoo">B.Sc. Zoology</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Position <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6">
                                                <input type="text" id="first-name" required="required" class="form-control" name="position" />
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label for="phone" class="col-form-label col-md-3 col-sm-3 label-align">Phone Number <span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input id="phone" class="form-control" type="number" name="phone" required="required" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-3 col-sm-3 label-align">Gender <span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <select class="form-control" name="gender" required>
                                                    <option value>Choose option</option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                </select>
                                            </div>
                                        </div>

                                        <!-- Button trigger modal -->
                                         <div class="file-field item form-group row">
                                            <label class="control-label col-md-3 col-sm-3 label-align">Submit
                                                <span>*</span></label>
                                                <div class="file-field item form-group row">
                                            <button type="submit" name="register_staff" class="btn btn-primary btn-sm col-md-12 col-sm-12 form-group row">
                                                Submit
                                            </button>                                            
                                        </div>
                                    </div>     
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
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
    <!-- jQuery Smart Wizard -->
    <script src="../vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
</body>

</html>