<?php require("includes/functions.php") ;  ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" href="images/logo.jpg" type="image/ico" />

    <title>Chapel Attendance</title>

    <!-- Bootstrap -->
    <link
      href="../vendors/bootstrap/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <!-- Font Awesome -->
    <link
      href="../vendors/font-awesome/css/font-awesome.min.css"
      rel="stylesheet"
    />
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet" />
    <!-- Animate.css -->
    <link href="../vendors/animate.css/animate.min.css" rel="stylesheet" />

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet" />
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form method="POST">
              <h1>Admin Login</h1>
              <div>
                <input
                  type="text"
                  class="form-control"
                  placeholder="Username"
                  required=""
                  name="staff_ID"
                />
              </div>
              <div>
                <input
                  type="password"
                  class="form-control"
                  placeholder="Password"
                  required=""
                  name="password"
                />
              </div>
              <div>
              <div>
                <button class="to_register" type="submit" name="login" >
                Register
                </button>
              </div>

              <div class="clearfix"></div>
              <div class="separator">
                <p class="change_link">
                  New Admin?
                  <a href="#signup" class="to_register"> Register </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1>
                    <i class="fa fa-building"></i> Veritas University Abuja
                  </h1>
                  <p>
                    ©2020 All Rights Reserved. Veritas University Abuja
                  </p>
                </div>
              </div>
            </form>
          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">
            <form method="POST">
              <h1>Admin SignUp</h1>
              <div>
                <input
                  type="text"
                  class="form-control"
                  placeholder="staff_ID"
                  required=""
                  name="staff_ID"
                />
              </div>
              <div>
                <input
                  type="email"
                  class="form-control"
                  placeholder="Email"
                  required=""
                  name="email"
                />
              </div>
              <div>
                <input
                  type="password"
                  class="form-control"
                  placeholder="pass"
                  required=""
                  name="pass"
                />
              </div>
              <div>
                <input
                  type="password"
                  class="form-control"
                  placeholder="pass2"
                  required=""
                  name="pass2"
                />
              </div>
              <div>
                <button class="to_register" type="submit" name="register" >
                Register
                </button>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">
                  Already an admin?
                  <a href="#signin" class="to_register"> Log in </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1>
                    <i class="fa fa-building"></i> Veritas University Abuja
                  </h1>
                  <p>©2020 All Rights Reserved. Veritas University Abuja</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
