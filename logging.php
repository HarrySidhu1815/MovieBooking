<?php
    require_once 'connection.php';
    if(isset($_POST['userEmail']) && $_POST['userEmail'] != "" && isset($_POST['userPass']) && $_POST['userPass'] != "")
    {
        $user_email = $_POST['userEmail'];
        $password = $_POST['userPass'];

        $sql_query = "SELECT name,user_email FROM movie_users WHERE user_email ='$user_email' and password ='$password'";
        $query_run = mysqli_query($con, $sql_query);
        $num_rows = mysqli_num_rows($query_run);
        if($num_rows == 0)
        {
            header('location:index.php');
        }
        else 
        {
            $record =mysqli_fetch_assoc($query_run);
            for($i =0; $i < $num_rows; $i++)
            {
            $name = $record['name'];
            $email = $record['user_email'];
            }
            session_start();
            $_SESSION['name'] = $name;
            $_SESSION['email'] = $email;
            $_SESSION['isloggedin'] = 1;
            header('location:movie.php');
        }  
    }
?>

