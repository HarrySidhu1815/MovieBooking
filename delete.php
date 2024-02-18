<html>
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8">
        <title>Delete a Movie</title>
        <link rel="stylesheet" href="index.css">
    </head>
    <body>
        <header><h1>MOVIE CENTER</h1></header>
    <nav>
        <a href="movie.php"> MOVIE HOME</a> &nbsp; &nbsp;
        <a href="delete.php"> DELETE A MOVIE</a> &nbsp; &nbsp;
        <a href="update.php">UPDATE A MOVIE</a> &nbsp; &nbsp;
        <a href="review.php">COMPLAINTS</a> &nbsp; &nbsp;
        <a href='index.php'>LOGOUT</a>
    </nav>
    <?php
        require_once 'connection.php';
        //starting the session to resdirect the user to index.php if not logged in.
        session_start();
        $name = $_SESSION['name'];
        $email = $_SESSION['email'];
        if(isset($_SESSION['isloggedin']) && $_SESSION['isloggedin'] ==1)
        {
            echo "<h1>Delete a movie ".$_SESSION['name']."</h1><br>";
        }
         else 
        {
           header('location:index.php'); 
        }
    ?>
        <form class="s" action="" method="POST">
            <div class="headingsContainer">
                <h3>Cancel your movie tickets here:</h3>
            </div>
            <div class="mainContainer">
            <label for="input1">Booking ID</label>
            <input type="text" name="id" id="input1"/><br>
                <button type="submit">Delete</button>
                <p class="register">Don't know Booking ID?  <a href="booking.php">See here!</a></p>
            </div>
        </form>
        <?php
        if(isset($_POST['id']) && $_POST['id'] != "")
        {
            $delete = $_POST['id'];
            $dquery = "DELETE FROM movie_book WHERE booking_num = '$delete' and email = '$email'";
            echo "<h1>Booking is cancelled by $name</h1>";
            echo "<br><h1>Your money would be tranferred back to your account</h1>";
            if(mysqli_query($con,$dquery) == FALSE) die ("Could not delete the movie reservation");
        }
        ?>
    </body>
</html>

