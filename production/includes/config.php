<?PHP
    session_start();
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "chapel_attendance";
    $connection = new mysqli($servername, $username, $password, $dbname);

    if ($connection->connect_error)
    {
        die("connection failed: " . $connection->connect_error);
    }

    
?>