<?php
require("includes/functions.php");
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

    <title>Register Student</title>

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
                            <h2>Admin</h2>
                        </div>
                    </div>
                    <!-- /menu profile quick info -->

                    <br />

                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                        <div class="menu_section">
                            <ul class="nav side-menu">
                                <li>
                                    <a href="index.php"><i class="fa fa-home"></i> Home</a>
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
                    <div class="sidebar-footer hidden-small">
                        <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.php">
                            <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                        </a>
                    </div>
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
                                    <a class="dropdown-item" href="index.php"><i class="fa fa-home pull-right"></i> Home</a>
                                    <a class="dropdown-item" href="regiteruser.php"><i class="fa fa-user pull-right"></i> Register User</a>
                                    <a class="dropdown-item" href="createattendance.php"><i class="fa fa-plus pull-right"></i> Create
                                        Attendance</a>
                                    <a class="dropdown-item" href="recordattendance.php"><i class="fa fa-check pull-right"></i> Record
                                        Attendance</a>
                                    <a class="dropdown-item" href="viewattendance.php"><i class="fa fa-eye pull-right"></i> View Attendance</a>

                                    <a class="dropdown-item" href="login.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
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
                                        <div class="item form-group">
                                            <label for="matric-number" class="col-form-label col-md-3 col-sm-3 label-align">Matric Number <span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input id="matric-number" class="form-control" type="text" name="matricnumber" required="required" />
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label for="dept" class="col-form-label col-md-3 col-sm-3 label-align">Department <span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input id="dept" class="form-control" type="text" name="dept" required="required" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-3 col-sm-3 label-align">Level <span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <select class="form-control" name="level" required>
                                                    <option value>Choose option</option>
                                                    <option value="100">100</option>
                                                    <option value="200">200</option>
                                                    <option value="300">300</option>
                                                    <option value="400">400</option>
                                                    <option value="other">Other</option>

                                                </select>
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
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align">Date Of Birth <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6">
                                                <input id="birthday" class="date-picker form-control" placeholder="dd-mm-yyyy" type="text" required="required" type="text" onfocus="this.type='date'" onmouseover="this.type='date'" onclick="this.type='date'" onblur="this.type='text'" onmouseout="timeFunctionLong(this)" name="DOB" />
                                                <script>
                                                    function timeFunctionLong(input) {
                                                        setTimeout(function() {
                                                            input.type = "text";
                                                        }, 60000);
                                                    }
                                                </script>
                                            </div>
                                        </div>
                                        <div class="file-field item form-group row">
                                            <label class="control-label col-md-3 col-sm-3 label-align">Upload Photo<span class="required">*</span></label>
                                            <div class="btn btn-primary btn-sm col-md-6 col-sm-6">
                                                <span>Choose file</span>
                                                <input type="file" required="required" name="image" />
                                            </div>
                                        </div>

                                        <!-- Button trigger modal -->
                                        <div class="file-field item form-group row">
                                            <label class="control-label col-md-3 col-sm-3 label-align">Register Fingerprint
                                                <span class="required">*</span></label>
                                            <div class="btn btn-primary btn-sm col-md-6 col-sm-6" type="button" required="required" class="btn btn-primary form-group row btn-sm col-md-6 col-sm-6" data-toggle="modal" data-target="#exampleModalCenter">
                                                Register Fingerprint
                                            </div>
                                        </div>

                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLongTitle">
                                                            Register
                                                        </h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Register Fingerprint
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                                            Close
                                                        </button>
                                                        <button type="submit" class="btn btn-primary">
                                                            Submit
                                                        </button>
                                                    </div>
                                                </div>
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