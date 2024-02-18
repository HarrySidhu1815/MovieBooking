<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Confirm Booking</title>
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
    <?php
        require_once 'connection.php';
        //starting the session to resdirect the user to index.php if not logged in.
        session_start();
        $name = $_SESSION['name'];
        $email = $_SESSION['email'];
        $movie = $_SESSION['movie'];
        $num_seats = $_SESSION['num_seat'];
        $date = $_SESSION['date'];
        $time = $_SESSION['time'];
        $seats = $_SESSION['seat'];
        $rate =0;
        if(isset($_SESSION['isloggedin']) && $_SESSION['isloggedin'] ==1)
        {
            echo "<h1 style='color='black''>Last Step to book tickets, ".$_SESSION['name']."</h1><br>";
        }
         else 
        {
           header('location:index.php'); 
        }
            
            if($seats == 'Back Seats')
            {
                $rate=12;
            }
            else if($seats == 'Front Seats')
            {
                $rate=8;
            }
            else if($seats == 'VIP')
            {
                $rate=17;
            }
            else
            {
                $rate=10;
            }
            $pay = $num_seats*$rate;
            echo "<div class='headingsContainer'><h3>Billing Information</h3></div>";
            echo "<form action='' method='POST' class='color1'>";
            echo "<h3>Total amount due $<bold>$pay</bold></h3>";
            echo "<div class='class1'>Name: $name<br><br>";
            echo "Movie: $movie<br><br>";
            echo "Time: $time<br><br>";
            echo "Date: $date<br><br>";
            echo "Choose payment method<br><br>";
            echo "<input type='radio' name='method' value='Credit Card'>Credit Card    <input type='radio' name='method' value='Apple Pay'>Apple Pay<br><br>";
            echo "<button type='submit'>Pay</button> </div></form>";

            if(isset($_POST['method']) && $_POST['method'] != "")
            {   
                echo "$name";
                $sql_query1 = "INSERT into movie_book VALUES (null,'$name','$email','$movie', '$date', '$time','$num_seats','$seats')";
                $sql_run = mysqli_query($con, $sql_query1);
                header('location:booking.php');
            }
    ?>
        </div>
    </body>
</html>
