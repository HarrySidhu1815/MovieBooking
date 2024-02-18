<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Create an account</title>
        <link rel="stylesheet" href="index.css">
    </head>
    <body>
        <h1>Sign up with movies.com</h1>
        <form action="" method="POST">
            <div class="headingsContainer">
                <h3>Create a new account</h3>
            </div>
            <div class="mainContainer">
            <label for="name1">Name</label>
                <input type="text" name="name" placeholder="name" id="name1"/>
            <br><!-- comment -->
            <br>
            <label for="user_name1"> User Name</label>
                <input type="text" name="email" placeholder="password" id="user_name1"/>
            <br>
            <br>
            <label for="password1"> Password</label>
                <input type="password" name="pass" placeholder="password" id="password1"/>
            <button type="submit">Create an account</button>
            </div>
             <p class="register"> Already Registered? <a href="index.php">Go to Login Page</a></p>
        </form>
        <?php
        require_once 'connection.php';
        if(isset($_POST['name']) && $_POST['name'] != "" && isset($_POST['email']) && $_POST['email'] != "" && isset($_POST['pass']) && $_POST['pass'] != "")
        {
            $name = $_POST['name'];
            $userEmail = $_POST['email'];
            $password = $_POST['pass'];

            $sql_query = "INSERT into movie_users VALUES ('$name','$userEmail','$password')";
            $sql_run = mysqli_query($con, $sql_query);
        }
        ?>
    </body>
</html>

