<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Confirm Show</title>
        <link rel="stylesheet" href="index.css">
    </head>
    <body>
        <header><h1>MOVIE CENTER</h1></header>
        <div class="wrap">
    <nav>
        <a href="movie.php"> MOVIE HOME</a> &nbsp; &nbsp;
        <a href="delete.php"> DELETE A MOVIE</a> &nbsp; &nbsp;
        <a href="update.php">UPDATE A MOVIE</a> &nbsp; &nbsp;
        <a href="review.php">COMPLAINTS</a> &nbsp; &nbsp;
        <a href='index.php'>LOGOUT</a>
    </nav>
        <a href="movie.php">GO Back</a>
    <?php
        //starting the session to resdirect the user to index.php if not logged in.
        session_start();
        $name = $_SESSION['name'];
        $email = $_SESSION['email'];
        if(isset($_SESSION['isloggedin']) && $_SESSION['isloggedin'] ==1)
        {
            echo "<h1>Confirm the Show, ".$_SESSION['name']."</h1><br>";
        }
         else 
        {
           header('location:index.php'); 
        }
        if(isset($_GET['i'])){
            $name_movie = $_GET['i'];
            if($name_movie == 'SPIDERMAN')
            {
                echo "<img align='center' width=100% height=auto src='spider.jpg' alt='Spiderman'/>";
            }
            else if($name_movie == 'END GAMES')
            {
                echo "<img align='center' width=100% height=auto src='end.jpeg' alt='End Games'/>";
            }
            else if($name_movie == 'FAST AND FURIOUS 9')
            {
              echo "<img align='center' width=100% height=auto src='f9.jpg' alt='F9'/>";  
            }
            else if($name_movie == 'JUMANJI')
            {
                echo "<img align='center' width=100% height=auto src='juman.avif' alt='Jumanji'/>";
            }
            else if($name_movie == 'ADAM BLACK')
            {
                echo "<img align='center' width=100% height=auto src='adam.jpg' alt='Adam Black'/>";
            }
            else if($name_movie == 'BULLET TRAIN')
            {
                echo "<img align='center' width=100% height=auto src='train.jpg' alt='Bullet Train'/>";
            }
            else if($name_movie == 'ACCIDENT MAN')
            {
              echo "<img align='center' width=100% height=auto src='acci.jpg.webp' alt='Accident Man'/>";  
            }
            else if($name_movie == 'SHADOW IN THE CLOUD')
            {
                echo "<img align='center' width=100% height=auto src='sitc.jpg' alt='Shadow in the Cloud'/>";
            }
            else
            {
                echo "Error";
            }
            echo "<h1>$name_movie</h1>";
        }
        $_SESSION['movie'] = $name_movie;
    ?>
        <form action="" method="post" class="color1">
            <div class="headingsContainer">
            <h2>Movie Date and Time</h2>
            </div>
            <div class="mainContainer">
                <label for="date1">Please choose the movie date</label><br>
            <input type="date" name="date" id="date1"/>
            <br><br>
            <label>Please choose the movie timing</label><br>
                <input type="radio" name="time" value="9am"/>9:00 am - 11:30 am<br>
                <input type="radio" name="time" value="12pm"/>12:00 am - 2:30 pm<br><!-- comment -->
                <input type="radio" name="time" value="3pm" checked/>3:00 am - 5:30 pm<br>
                <input type="radio" name="time" value="8am"/>6:00 pm - 8:30 pm<br>
                <br><br>
                <label>Please select the number of seats</label><br><!-- comment -->
                <input type="number" name="num" /><br><br>
                <label>Please choose seats</label><br>
                <input type="radio" name="seat" value="VIP"/>VIP<br>
                <input type="radio" name="seat" value="Back Seats"/>Back Seats<br><!-- comment -->
                <input type="radio" name="seat" value="Middle Seats" checked/>Middle Seats<br>
                <input type="radio" name="seat" value="Front seats"/>Front seats<br>
                <br><br>
            <button type="submit">Next</button>
            <button type="reset">Reset</button>
            <?php
            require_once 'connection.php';
            
            if(isset($_POST['date']) && $_POST['date'] != "" && isset($_POST['time']) && $_POST['time'] != "" && isset($_POST['seat']) && $_POST['seat'] != "" && isset($_POST['num']) && $_POST['num'] != "")
            {   
                $num_seats = $_POST['num'];
                $date = $_POST['date'];
                $time = $_POST['time'];
                $seats = $_POST['seat'];
                
                $_SESSION['num_seat'] = $num_seats;
                $_SESSION['date'] = $date;
                $_SESSION['time'] = $time;
                $_SESSION['seat'] = $seats;
                header('location:inform.php');
            }
            ?>
            </div>
        </form>
        </div>
    </body>
</html>

