<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Booking Done</title>
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
        <div class="wrap">
    <?php
        //starting the session to resdirect the user to index.php if not logged in.
        session_start();
        $name = $_SESSION['name'];
        $email = $_SESSION['email'];
        if(isset($_SESSION['isloggedin']) && $_SESSION['isloggedin'] ==1)
        {
            echo "<h1>Booking Confirmed, ".$_SESSION['name']."</h1><br>";
        }
         else 
        {
           header('location:index.php'); 
        }
    ?>
        <h1>Your booking is confirmed</h1>
        <h1>Your previous bookings are as follows:</h1>
    <?php
    require_once 'connection.php';
    $query = "SELECT * FROM movie_book WHERE email = '$email'";
    $result = mysqli_query($con, $query);
    $r = mysqli_num_rows($result);
    ?>
        <div class="wrap2">
        <table border="1" class="styled-table">
            <thead>
            <tr>
                <th>Booking ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Movie Name</th>
                <th>Date</th>
                <th>Time</th>
                <th>Number of Seats</th>
                <th>Seats</th>
            </tr>
        </thead>
        <tbody>
    <?php
    for($j =0; $j<$r ; $j++)
            {
                $fetched_row = mysqli_fetch_assoc($result);
                $id = $fetched_row['booking_num'];
                $name = $fetched_row['name'];
                $email = $fetched_row['email'];
                $m_name = $fetched_row['movie_name'];
                $date2 = $fetched_row['movie_date'];
                $time2 = $fetched_row['movie_time'];
                $seats2 = $fetched_row['movie_seats'];
                $num2 = $fetched_row['seats'];
                echo "<tr><td>$id</td><td>$name</td><td>$email</td><td>$m_name</td><td>$date2</td><td>$time2</td><td>$num2</td><td>$seats2</td></tr>";
            }
    ?>
        </tbody>
        </table>
        </div>
        <br><!-- comment -->
        <h1>You can change or cancel or reservation by using booking ID</h1>
        </div>
    </body>
</html>

