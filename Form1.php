<html>

<head><title>1st Page</title>

<style type="text/css"> h1 {text-align: center;} </style>
</head>

<body>
    <header><h1> FIT ME!</h1></header>
    <form method="POST" action="signedIn.php">
    
  <label for="name">Enter your name:</label><br>
  <input type="text" id="name" name="name"><br>
  <label for="ID">Enter your member ID: </label><br>
  <input type="password" id="ID" name="ID" ><br>
  <input type="submit" value="Sign In">
  <p><i>Don't have an account?</i></p>
  <a href="http://localhost:7000/signup.php">Sign Up</a>
</form>

</body>

</html>