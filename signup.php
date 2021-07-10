<html>

<head><title>1st Page</title>

<style type="text/css"> h1 {text-align: center;} </style>
</head>

<body>
    <header><h1> FIT ME!</h1></header>
    <form method="POST" action="Choose.php">
    
  <label for="name">Enter your name ok:</label><br>
  <input type="text" id="name" name="name"><br>
  <label for="Age">Enter your age: </label><br>
  <input type="number" id="Age" name="Age" ><br>
  <label for="Gender">Select your gender:</label><br>
  <select name="Gender" id="Gender">
  <option value="Male">Male</option>
  <option value="Female">Female</option>
</select>

  <br>
  <label for="Height">Enter your height in meters (e.g 1.5):</label><br>
  <input type="text" id="Height" name="Height"><br>
  <label for="Weight">Enter your weight in kgs:</label><br>
  <input type="text" id="Weight" name="Weight"><br>

  <input type="submit" value="Sign Up">
  
</form>

</body>

</html>