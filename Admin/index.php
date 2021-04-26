<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">   
</head>
    <body>
        <?php 
   if(isset($_GET['pesan'])){
     if($_GET['pesan'] == "gagal"){
       echo "<center>Masukkan username dan password yang benar!</center>";
     }
   }
  ?>
    <div class="login-box">
    <img src="avatar.png" class="avatar">
        <h1>Login Here</h1>
            <form method="post" action="untuklogin.php">
            <p>Username</p>
            <input type="text" name="username" placeholder="Enter Username">
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password">
            <input type="submit" name="submit" value="Login">   
            </form>
        
        
        </div>
    
    </body>
</html>