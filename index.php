<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="index.css">
    </head>
    <body>
        <h1>Login with your movie account</h1>
        <form action="logging.php" method="POST" >
             <div class="headingsContainer">
                 <h3>Sign in</h3>
            <p style="color: white">Sign in with your username and password</p>
             </div>
            <div class="mainContainer">
            <label for="id1" style="size: 240">
                USER NAME:</label>
            <input type="text" name="userEmail" placeholder="user email" id="id1"/><br>
            
            <label for="id2" style="size: 240">
                PASSWORD:</label>
                <input type="password" name="userPass" placeholder="password" id="id2"/><br>
            
            <button type="submit">Login</button>
            <p class="register">Not have an account?  <a href="newaccount.php">Register here!</a></p>
            </div>
        </form>
        
    </body>
</html>
<!--<!-- References: https://www.scaler.com/topics/login-page-in-html/ -->