<?php
    require("includes/functions.php");
    $connection = new mysqli("localhost", "root", "", "chapel_attendance");
    $id = $_GET['id'];
    $getEvent = mysqli_query($connection,  "SELECT * FROM events WHERE id = '$id'");
    $event = mysqli_fetch_array($getEvent);
    
    function userInfo($connection)
	{
        $output = '';
        $output .= '
                    <div class="info">
                        <div class="">Name : Austin</div>
                        <hr />
                        <div class="">Matric Number : VUG/CSC/17/2383</div>
                        <hr />
                        <div class="">Department : Computer Science</div>
                        <hr />
                        <div class="">Level : 400</div>
                    </div>
                    ';
		return $output;
    }
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
    <title>Take Fingerprint</title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet" />

    <!-- Custom Theme Style -->
    <link rel="stylesheet" href="./css/verifyfingerprint.css" />
</head>

<body>
    <div class="wrapper d-flex align-items-stretch">
        <!-- Page Content  -->
        <div id="content" class="p-3 p-md-3 pt-3">
            <div class="container-fluid row" >
                <div class="col-lg-6 col-sm-6">
                    <div class="">
                        <div class="card hovercard">
                            <div class="info">
                                <img src="./images/man.jpeg" class="img-thumbnail" alt="..." />
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-sm-6">
                    <div class="">
                        <div class="card hovercard">
                            <div class="info">
                                <img src="./images/fingerprint.png" class="img-thumbnail" alt="..." />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6">
                    <div class="">
                        <div class="card hovercard" id="details">
                            <?php	
                                echo userInfo($connection);
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6">
                    <div class="">
                        <div class="card hovercard">
                            <div class="info">
                                <div class="">Event</div>
                                <hr />
                                <div class="">Name : <?php echo $event['name']; ?></div>
                                <hr />
                                <div class="">Date : <?php echo $event['date']; ?></div>
                                <hr />
                                <div class="">Time :<?php echo $event['start_time']; ?></div>
                                <hr />
                                <div class="">Time :<?php echo $event['late_at']; ?></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-sm-6">
                    <div class="">
                        <div class="card hovercard">
                            <div class="item form-group">
                                <label for="middle-name" class="col-form-label col-md-6 col-sm-6 label-align">Enter Matric Number
                                </label>
                                <div class="col-md-12 col-sm-12">
                                    <input id="mat_no" class="form-control" type="text" name="reg" required="required" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6">
                    <div class="">
                        <div class="card hovercard">
                            <div class="file-field item form-group row">
                                <div class="btn col-md-12 col-sm-12" type="button" data-toggle="modal" data-target="#exampleModalCenter">
                                    <h1>SIGN</h1>
                                </div>
                                <br />
                                <br />
                                <br />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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

    <script src="js/home.js"></script>
</body>

</html>
<script>
     $(document).on('blur', '#mat_no', function()
     {  
        var matNo = $(this).text();  
        alert(matNo) 
           $.ajax({  
                url:"info.php",  
                method:"POST",  
                data:{matNo:matNo}, 
			    dataType:"text",  
                success:function(data){  
                     $('#details').html(data);
                     alert(matNo)
                } 
           });  
    });
</script>