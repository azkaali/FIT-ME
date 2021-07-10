<html>

<head>
<title>Database Insertion </title>
</head>

<body style="background-color: grey">
	  
<h3 align="center" >Plan selection successful</h3>
<h2 align="center">Below are the details of your selected plan </h2>
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



     $m="select P_ID,CATEGORY from PLAN where M_ID = " . $_POST["ID"];
  
   $query_id1 = oci_parse($con, $m);    
   $res = oci_execute($query_id1);
    if($res){
    while($row = oci_fetch_array($query_id1, OCI_BOTH+OCI_RETURN_NULLS)) 
   { 
    echo "<br>"."Plan ID: ".$row['P_ID']."<br>"."Plan Category: ".$row['CATEGORY']."<br>"; 
    $pid=$row['P_ID'];
   }
   }


      $m="select W_ID,DURATION from WORKOUT where P_ID = " . $pid;
    
   $query_id1 = oci_parse($con, $m);    
   $res = oci_execute($query_id1);
    if($res){
    while($row = oci_fetch_array($query_id1, OCI_BOTH+OCI_RETURN_NULLS)) 
   { 
    echo "<br>"."Workout ID: ".$row['W_ID']."<br>"."Duration: ".$row['DURATION']."<br>"; 
    $wid=$row['W_ID'];
   }
   }

        $m="select EX_ID,EX_NAME,REPITIONS from EXERCISE where W_ID = " . $wid;
    
   $query_id1 = oci_parse($con, $m);    
   $res = oci_execute($query_id1);
    if($res){
    while($row = oci_fetch_array($query_id1, OCI_BOTH+OCI_RETURN_NULLS)) 
   { 
    echo "<br>"."Exercise ID: ".$row['EX_ID']."<br>"."Exercise Name: ".$row['EX_NAME']."<br>"."Repititions: ".$row['REPITIONS']."<br>"; 
    $eid=$row['EX_ID'];
   }
   }


   $m="select EQ_ID,EQ_NAME from EQUIPMENT where EX_ID = ". $eid;
   $query_id = oci_parse($con, $m);    
   $res = oci_execute($query_id);
   if($res){
    while($row = oci_fetch_array($query_id, OCI_BOTH+OCI_RETURN_NULLS)) 
   { 
    echo "<br>"."Equipment ID: ".$row['EQ_ID']."<br>"."Equipment Name: ".$row['EQ_NAME']."<br>"; 
    $eqid=$row['EQ_ID'];
   }
   }



   $m="select D_ID,DIET_TYPE,DIET_NAME from DIETPLAN where P_ID = ". $pid;
   $query_id = oci_parse($con, $m);    
   $res = oci_execute($query_id);
   if($res){
    while($row = oci_fetch_array($query_id, OCI_BOTH+OCI_RETURN_NULLS)) 
   { 
    echo "<br>"."Diet ID: ".$row['D_ID']."<br>"."Diet Type: ".$row['DIET_TYPE']."<br>"."Diet Name: ".$row['DIET_NAME']."<br>"; 
    $eqid=$row['EQ_ID'];
   }
   }





   ?>
  
 <form method="POST" action="Choose.php">
    
  
    <h2>Record your progress once you are done!</h2>
     <input type="submit" value="Log">
  
</form>

   </body>
</html>