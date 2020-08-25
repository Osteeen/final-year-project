<?php 
require("config.php") ;  

if (isset($_POST['lock'])) {
    header('location: index.php');
    session_destroy();
}
    //register Admin
    if (isset($_POST['register_admin']))
    {
        $staff_ID = mysqli_real_escape_string($connection, $_POST['staff_ID']);
        $admin_ID = mysqli_real_escape_string($connection, $_POST['admin_ID']);
        $email = mysqli_real_escape_string($connection, $_POST['email']);
        $password1 = mysqli_real_escape_string($connection, $_POST['pass']);
        $password2 = mysqli_real_escape_string($connection, $_POST['pass2']);

        //form validation

        if ($password1 != $password2){ echo '<script>alert("password  do not match")</script>';}

        //check if user already exist
        $admin_check_query = "SELECT * FROM admins WHERE staff_ID = '$admin_ID' LIMIT 1";
        $result = mysqli_query($connection, $admin_check_query);
        $user = mysqli_fetch_assoc($result);


        if ($user['staff_ID']=== $admin_ID)
        {
            //check if user already exist
            $staff_check_query = "SELECT * FROM staffs WHERE staff_ID = '$staff_ID' LIMIT 1";
            $result = mysqli_query($connection, $staff_check_query);
            $user = mysqli_fetch_assoc($result);

            if($user['staff_ID']==$staff_ID)
            {
                $password = md5($password1);

                $query ="INSERT INTO admins (id, email, staff_ID, password)
                        VALUES('', '$email', '$staff_ID','$password')";
                mysqli_query($connection, $query);
                echo '<script>alert("New Admin Added Successfully")</script>';
                header('location: index.php#signin');
            }
            else
            {
                echo '<script>alert("'.$staff_ID.' is not a staff")</script>';
            }
        }

        else
        {
            echo '<script>alert("already an Admin")</script>';
        }
    }


    //login Amin
    if (isset($_POST['login']))
    {
        $ID = mysqli_real_escape_string($connection, $_POST['ID']);
        $password1 = mysqli_real_escape_string($connection, $_POST['password']);

        $password = md5($password1);
        
        $query = "SELECT * FROM admins WHERE staff_ID = '$ID' AND password = '$password'";
        $results = mysqli_query($connection, $query);
        
        if(mysqli_num_rows($results) == 1)
        {   
            $_SESSION['admin_ID'] = $ID;
            header('location: home.php');
        }
        else
        {
            echo '<script>alert("Wrong user ID/Email or Password")</script>';
        }

    }


        //register staff
        if (isset($_POST['register_staff']))
        {
            $staff_ID = mysqli_real_escape_string($connection, $_POST['staff_ID']);
            $fname = mysqli_real_escape_string($connection, $_POST['fName']);
            $lname = mysqli_real_escape_string($connection, $_POST['lName']);
            $mName = mysqli_real_escape_string($connection, $_POST['mName']);
            $gender = mysqli_real_escape_string($connection, $_POST['gender']);
            $phone = mysqli_real_escape_string($connection, $_POST['phone']);
            $department = mysqli_real_escape_string($connection, $_POST['department']);
            $designation = mysqli_real_escape_string($connection, $_POST['designation']);
            $fingerprint = mysqli_real_escape_string($connection, $_POST['fName']);
            $position = mysqli_real_escape_string($connection, $_POST['fName']);
            $image = mysqli_real_escape_string($connection, $_POST['fName']);
    
            //check if user already exist
            $staff_check_query = "SELECT * FROM staffs WHERE staff_ID = '$staff_ID' LIMIT 1";
            $result = mysqli_query($connection, $staff_check_query);
            $staff = mysqli_fetch_array($result);
    
            if ($staff['staff_ID']== $staff_ID)
            {
                echo '<script>alert("Staff Already exist")</script>';
            }
            else
            {
                //register
                $query ="INSERT INTO  staffs (id, staff_ID, first_name, last_name, mName, gender, phone, department, designation, fingerprint, position, image)
                VALUES('', '$staff_ID', '$fname', '$lname', '$mName', '$gender', '$phone', '$department', '$designation', '$fingerprint', '$position', '$image')";
                mysqli_query($connection, $query);
                echo '<script>alert("Staff registered successfully")</script>';
            }
        }
        //register students
        if (isset($_POST['register_student']))
        {
            $s_ID = mysqli_real_escape_string($connection, $_POST['s_ID']);
            $fname = mysqli_real_escape_string($connection, $_POST['fName']);
            $lname = mysqli_real_escape_string($connection, $_POST['lName']);
            $mName = mysqli_real_escape_string($connection, $_POST['mName']);
            $gender = mysqli_real_escape_string($connection, $_POST['gender']);
            $phone = mysqli_real_escape_string($connection, $_POST['phone']);
            $department = mysqli_real_escape_string($connection, $_POST['dept']);
            $level = mysqli_real_escape_string($connection, $_POST['level']);
            $fingerprint = mysqli_real_escape_string($connection, $_POST['fName']);
            $program = mysqli_real_escape_string($connection, $_POST['program']);
            $image = mysqli_real_escape_string($connection, $_POST['fName']);
    
            //check if user already exist
            $student_check_query = "SELECT * FROM students WHERE mat_no = '$s_ID'";
            $result = mysqli_query($connection, $student_check_query);
    
            if (mysqli_num_rows($result) >= 1)
            {
                echo '<script>alert("Student Already exist")</script>';
            }
            else
            {
                //register
                $query ="INSERT INTO  students(id, mat_no, first_name, last_name, mName, gender, program, department, level, phone, fingerprint, image)
                VALUES('', '$s_ID', '$fname', '$lname', '$mName', '$gender', '$program', '$department', '$level', '$phone', '$fingerprint', '$image')";
                mysqli_query($connection, $query);
                echo '<script>alert("Student registered successfully")</script>';
            }
        }

        if (isset($_POST['addEvent']))
        {
            $event_name = mysqli_real_escape_string($connection, $_POST['event_name']);
            $date = mysqli_real_escape_string($connection, $_POST['date']);
            $time = mysqli_real_escape_string($connection, $_POST['time']);
            $late_at = mysqli_real_escape_string($connection, $_POST['late_at']);

            $result = mysqli_query($connection, "SELECT * FROM events WHERE name = '$event_name' AND date = '$date'");
            //register
            if (mysqli_num_rows($result) >= 1) {
                echo '<script>alert("Event with same time and date already Exist..")</script>';
            }
            else{      
                $query ="INSERT INTO  events(id, name, date, start_time, late_at)
                VALUES('', '$event_name', '$date', '$time', '$late_at')";
                 mysqli_query($connection, $query);
                 echo '<script>alert("New Event Added")</script>';
            }

        }


?>
