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
        <h1 align="centre">REVIEWS</h1>
        <div class="headingsContainer">
                <h3>Do you have any review or complaint?:</h3>
            </div>
            <div class="mainContainer">
        <form action="upload.php" method ="post" enctype= "multipart/form-data">
            <label>Select image, PDF or document to upload</label><br><br>
            <input type="file" name="fileToUpload" id="fileToUpload"/><br><br>
            <button type="submit">Submit Complaint</button>
                <p class="register">Is it all perfect?  <a href="movie.php">Book now!</a></p>
    </form>
            </div>
    </body>
</html>


