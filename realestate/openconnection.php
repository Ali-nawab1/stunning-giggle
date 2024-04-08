                                                                                                                                   <?php

error_reporting(E_ALL ^ E_DEPRECATED);
$con = mysql_connect("localhost","root","");


if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }// some codemysql_close($con);

mysql_select_db("real", $con)or die(mysql_error()); 
//mysql_select_db("test", $con)or die(mysql_error()); 
?>


