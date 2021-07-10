<html>

<head>
<title>Plan Selection </title>
<style type="text/css">
  table, th, td {border: 1px solid black;}
</style>
</head>

<body>

   <h2></h2>
    <h2 align="center">Your FIT ME account has been created</h2>
    <form>


<?php  // creating a database connection 

$db_sid = 
   "(DESCRIPTION =
    (ADDRESS = (PROTOCOL = TCP)(HOST = DESKTOP-1IB65TT)(PORT = 1521))
    (CONNECT_DATA =
      (SERVER = DEDICATED)
      (SERVICE_NAME = orcl)
    )
  )"; 

  
   $db_user = "scott";   // Oracle username e.g "scott"
   $db_pass = "123456";    // Oracle password e.g "1234"
   $con = oci_connect($db_user,$db_pass,$db_sid); 
   if($con) 
      { echo "Connection Successful."; 
        echo "<hr>";} 
   else{
    { die('Could not connect to Oracle: '); }
   }
  
  $q="INSERT into MEMBER VALUES((SELECT COUNT(*)+1 FROM MEMBER),'".$_POST[name]."',".$_POST[Age].",'".$_POST[Gender]."',".$_POST[Height].",".$_POST[Weight].")";
   $query_id = oci_parse($con, $q);     
   $r = oci_execute($query_id);

   ?>
   </select>
</form>
  <form method="POST" action="Planselected.php"> 

   <label for="ID">Choose a PLAN from the already made Plans diplayed below and enter the plan ID:</label><br>
  <input type="text" id="ID" name="ID"><br>
<table style="width:100%" class="center">
  <tr>
    <th>PLAN ID</th>
    <th>CATEGORY</th> 
  </tr>
  <tr>
    <td style="text-align: center;">1</td>
    <td style="text-align: center;">Weight Loss</td>
  </tr>
  <tr>
    <td style="text-align: center;">2</td>
    <td style="text-align: center;">Weight Gain</td>
  </tr>
  <tr>
    <td style="text-align: center;">3</td>
    <td style="text-align: center;">Body Building</td>
  </tr>
   <tr>
    <td style="text-align: center;">4</td>
    <td style="text-align: center;">Fat Burn</td>
  </tr>
  <tr>
    <td style="text-align: center;">5</td>
    <td style="text-align: center;">Muscle shredding</td>
  </tr>
  <tr>
    <td style="text-align: center;">6</td>
    <td style="text-align: center;">Weight Lifting</td>
  </tr>
</table>


<input type="submit" value="Enter">
<h3><i>Want to a custom plan?</i></h3>
<a href="http://localhost:7000/makecustompaln.php">Click here</a>
</form>
   </body>
</html>