<html>
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8">
        <title>Update a movie</title>
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
            echo "<h1>Update your movie ".$_SESSION['name']."</h1><br>";
        }
         else 
        {
           header('location:index.php'); 
        }
    ?>
        <form action="" method="post">
            <div class="headingsContainer">
                <h3>Update your movie tickets here:</h3>
                <p style="color: white">Movie Date and Time</p>
            </div>
            <div class="mainContainer">
            <label for="id1">Please enter the booking ID</label><br>
            <input type="text" name="id" id="id1"/>
            <br><br>
            <label for="movie1">Please choose the movie</label><br>
            <select name="movie" id="movie1">
                <option value="Spiderman">
                    Spiderman
                </option>
                <option value="End Games">
                    End Games
                </option>
                <option value="Fast and Furoius 9">
                    Fast and Furoius 9
                </option>
                <option value="Jumanji">
                    Jumanji
                </option>
                <option value="Black Adam">
                    Black Adam
                </option>
                <option value="Shadow in the Cloud">
                    Shadow in the Cloud
                </option>
                <option value="Accident Man">
                    Accident Man
                </option>
                <option value="Bullet Train">
                    Bullet Train
                </option>
            </select><br><br>
            <label for="date1">Please choose the movie date </label><br>
            <input type="date" name="date" id="date1"/>
            <br><br>
           <label>
               Please choose the movie timing</label><br>
                <input type="radio" name="time" value="9am"/>9:00 am - 11:30 am<br>
                <input type="radio" name="time" value="12pm"/>12:00 am - 2:30 pm<br><!-- comment -->
                <input type="radio" name="time" value="3pm" checked/>3:00 am - 5:30 pm<br>
                <input type="radio" name="time" value="8am"/>6:00 pm - 8:30 pm<br>
                <br>
                <label>Please select the number of seats</label><br><!-- comment -->
                <input type="number" name="num" /><br><br>
                <label> Choose seats<br></label>
                <input type="radio" name="seat" value="VIP"/>VIP<br>
                <input type="radio" name="seat" value="Back Seats"/>Back Seats<br><!-- comment -->
                <input type="radio" name="seat" value="Middle Seats" checked/>Middle Seats<br>
                <input type="radio" name="seat" value="Front seats"/>Front seats<br>
                <br>
            <button type="submit">Make Changes</button>
                <p class="register">Don't know Booking ID?  <a href="booking.php">See here!</a></p>
            </div>
        </form>
        <?php
            require_once 'connection.php';
             if(isset($_POST['id']) && $_POST['id'] != "" && isset($_POST['movie']) && $_POST['movie'] != "" && isset($_POST['date']) && $_POST['date'] != "" && isset($_POST['time']) && $_POST['time'] != "" && isset($_POST['seat']) && $_POST['seat'] != "")
             {
                 $id = $_POST['id'];
                 $movie = $_POST['movie'];
                 $date = $_POST['date'];
                 $time = $_POST['time'];
                 $seats = $_POST['seat'];
                 $nums = $_POST['num'];
                 
                 $uquery = "UPDATE movie_book set movie_name = '$movie', movie_date = '$date', movie_time = '$time', movie_seats = '$seats', seats = '$nums'  WHERE booking_num = '$id'";
                 $sql_run = mysqli_query($con, $uquery);
                 header('location:booking.php');
             }
        ?>
        
    </body>
</html>

