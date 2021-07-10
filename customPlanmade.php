<html>

<head>
<title>Plan Selection </title>
<style type="text/css">
  table, th, td {border: 1px solid black;}
</style>
</head>

<body>

   <h2></h2>
    <h2 align="center">Your FIT ME customized plan has been created</h2>
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
  
  $q="INSERT into PLAN VALUES((SELECT COUNT(*)+1 FROM PLAN),(SELECT COUNT(*)+1 FROM PLAN),'".$_POST[pcat]."')";
 
   $query_id = oci_parse($con, $q);     
   $r = oci_execute($query_id);

   $q="INSERT into WORKOUT VALUES((SELECT COUNT(*)+1 FROM WORKOUT),(SELECT COUNT(*)+1 FROM WORKOUT),'".$_POST[wdur]."')";
  
   $query_id = oci_parse($con, $q);     
   $r = oci_execute($query_id);


   $q="INSERT into EXERCISE VALUES((SELECT COUNT(*)+1 FROM EXERCISE),(SELECT COUNT(*)+1 FROM EXERCISE),'".$_POST[rep]."','".$_POST[exName]."')";
  echo $q;
   $query_id = oci_parse($con, $q);     
   $r = oci_execute($query_id);

   $q="INSERT into EQUIPMENT VALUES((SELECT COUNT(*)+1 FROM EQUIPMENT),(SELECT COUNT(*)+1 FROM EQUIPMENT),'".$_POST[eqname]."')";
  echo $q;
   $query_id = oci_parse($con, $q);     
   $r = oci_execute($query_id);

       $q="INSERT into dietplan  VALUES((SELECT COUNT(*)+1 FROM dietplan ),(SELECT COUNT(*)+1 FROM dietplan ),'".$_POST[Dtype]."','".$_POST[Dname]."')";
  echo $q;
   $query_id = oci_parse($con, $q);     
   $r = oci_execute($query_id);

   ?>
   </select>
</form>
  
   </body>
</html>