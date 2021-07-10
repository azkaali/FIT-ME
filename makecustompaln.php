<html>

<head><title>1st Page</title>

<style type="text/css"> h1 {text-align: center;} </style>
</head>

<body>
    <header><h1> FIT ME!</h1></header>
    <h2>MAKE YOUR CUSTOM PLAN!</h2>

    <form method="POST" action="customPlanmade.php">
    
  <label for="pcat">Enter your plan category:</label><br>
  <input type="text" id="pcat" name="pcat"><br>
  <label for="wdur">Enter your Workout Duration: </label><br>
  <input type="number" id="wdur" name="wdur" ><br>
  <label for="exName">Enter your Exercise Name:</label><br>
  <input type="text" id="exName" name="exName"><br>
  <label for="rep">Enter number of Repititions for youe exercise: </label><br>
  <input type="number" id="rep" name="rep" ><br>
  <label for="eqname">Enter your Name of Equipment:</label><br>
  <input type="text" id="eqname" name="eqname"><br>
  <label for="Dtype">Enter Diet type you want to follow:</label><br>
  <input type="text" id="Dtype" name="Dtype"><br>
  <label for="Dname">Enter Diet names you want to include in your diet plan?:</label><br>
  <input type="text" id="Dname" name="Dname"><br><br>


  <input type="submit" value="Create my plan">
  
</form>

</body>

</html>