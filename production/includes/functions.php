<?php 
require("config.php") ;  

    //sign UP
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
        $staff_ID = mysqli_real_escape_string($connection, $_POST['staff_ID']);
        $password1 = mysqli_real_escape_string($connection, $_POST['password']);

        $password = md5($password1);
        
        $query = "SELECT * FROM admins WHERE staff_ID = '$staff_ID' AND password = '$password'";
        $result = mysqli_query($connection, $query);
        
        if(mysqli_num_rows($result) == 1)
        {
            $_SESSION['staff_ID'];
            header('location: index.php');
        }
        else
        {
            echo '<script>alert("Wrong user ID or Password")</script>';
        }

    }

?>
