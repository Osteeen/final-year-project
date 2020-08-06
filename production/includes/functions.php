<?php 
require("config.php") ;  

    //register user
    if (isset($_POST['register_std'])) 
    {


        $sess = "SELECT * FROM session WHERE status = 'Active' Limit 1";
        $result = mysqli_query($connection, $sess);
        $id = mysqli_fetch_assoc($result);
        $admission_session = $id['id'];
        $active_session = $id['id'];
        

        //register
        $query ="INSERT INTO students (Student_ID, First_name, Last_name, Gender, DOB, Email, Phone, College, 
                                    Department, Program, Ative_session, admission_session, address, image)
                        VALUES('$userID', '$firstname', '$lastname', '$gender', '$DOB', '$email', '$phone', '$college',
                        '$department', '$program', '$active_session', '$admission_session', '$address', '$file')";
        mysqli_query($connection, $query);
        echo '<script>alert("Course already exist")</script>';
    }
    //login
    if (isset($_POST['register']))
    {
        $staff_ID = mysqli_real_escape_string($connection, $_POST['staff_ID']);
        $email = mysqli_real_escape_string($connection, $_POST['email']);
        $password1 = mysqli_real_escape_string($connection, $_POST['pass']);
        $password2 = mysqli_real_escape_string($connection, $_POST['pass2']);

        //form validation

        if ($password1 != $password2){ echo '<script>alert("password  do not match")</script>';}

        //check if user already exist
        $user_check_query = "SELECT * FROM admins WHERE staff_ID = '$staff_ID' OR email = '$email' LIMIT 1";
        $result = mysqli_query($connection, $user_check_query);
        $user = mysqli_fetch_assoc($result);


        if ($user['staff_ID']=== $staff_ID)
        {
            echo '<script>alert("User ID already exist")</script>';
        }
        elseif ($user['email']=== $email)
        {
            echo '<script>alert("Email already exist")</script>';
        }
        else
        {
            $password = md5($password1);

            $query ="INSERT INTO admins (id, email, staff_ID, password)
                    VALUES('', '$email', '$staff_ID','$password')";
            mysqli_query($connection, $query);
            
            $_SESSION['userID'] = $userID;
            $_SESSION['success'] = "You are logged in";
            header('location: index.php');
        }
    }


    //login
    if (isset($_POST['login']))
    {
        $sID = mysqli_real_escape_string($connection, $_POST['ID']);
        $password1 = mysqli_real_escape_string($connection, $_POST['password']);

        $password = md5($password1);
        
        $query = "SELECT * FROM admins WHERE D = '$staff_ID' AND password = '$password'";
        $result = mysqli_query($connection, $query);
        
        if(mysqli_num_rows($result) == 1)
        {
            $_SESSION['ID'];
            header('location: index.php');
        }
        else
        {
            echo '<script>alert("Wrong user ID or Password")</script>';
        }

    }

?>
