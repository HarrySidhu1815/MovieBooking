<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Movies</title>
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
        //starting the session to resdirect the user to index.php if not logged in.
        session_start();
        $name = $_SESSION['name'];
        if(isset($_SESSION['isloggedin']) && $_SESSION['isloggedin'] ==1)
        {
            echo "<h1>Welcome ".$_SESSION['name']."</h1><br>";
        }
         else 
        {
           header('location:index.php'); 
        }
    ?>
        <h1 align="centre">MOVIES</h1>
        <div class="wrapper">
        <div class="box a">
        <a href="time.php?i=SPIDERMAN">
        <img width=300 height= 500 src="spiderman.jpg" alt="Spiderman"/>
        </a>
        <h4>Spiderman</h4>
        </div>
        <div class="box b">
            <a href="time.php?i=END GAMES">
            <img width=300 height= 500 src="avengers.jpeg.webp" alt="End Games"/>
            </a>
            <h4>End Games</h4>
        </div>
        <div class="box c">
            <a href="time.php?i=FAST AND FURIOUS 9">
            <img width=300 height= 500 src="fast.jpg" alt="F9"/>
            </a>
            <h4>Fast and Furious 9</h4>
        </div>
        <div class="box d">
            <a href="time.php?i=JUMANJI">
            <img width=300 height= 500 src="jumanji.jpg" alt="Jumanji"/>
            </a>
            <h4>Jumanji</h4>
        </div>
            <div class="box e">
            <a href="time.php?i=ADAM BLACK">
            <img width=300 height= 500 src="black.jpg" alt="Adam Black"/>
            </a>
            <h4>Adam Black</h4>
        </div>
        <div class="box f">
            <a href="time.php?i=BULLET TRAIN">
            <img width=300 height= 500 src="bullet.webp" alt="Bullet Train"/>
            </a>
            <h4>Bullet Train</h4>
        </div>
        <div class="box g">
            <a href="time.php?i=ACCIDENT MAN">
            <img width=300 height= 500 src="accident.webp" alt="Accident Man"/>
            </a>
            <h4>Accident Man</h4>
        </div>
        <div class="box h">
            <a href="time.php?i=SHADOW IN THE CLOUD">
            <img width=300 height= 500 src="shadow.jpg" alt="Shadow in the Cloud"/>
            </a>
            <h4>Shadow in the Cloud</h4>
        </div>
        </div>
    </body>
</html>
