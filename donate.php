<?php

/*$NAME=$_POST['NAME']
$EMAIL=$_POST['EMAIL']
$PHONE=$_POST['PHONE']
$TOOL=$_POST['TOOL']*/


$serverName='localhost';
$userName='root';
$password='';
$dbName='green-defenders';
$con=new mysqli($serverName,$userName,$password,$dbName);
if (mysqli_connect_errno()){
	echo"Failed";
	exit();
}

		$NAME =  $_REQUEST['NAME'];
        $EMAIL = $_REQUEST['EMAIL'];
        $TEXT =  $_REQUEST['TEXT'];
        $TOOL = $_REQUEST['TOOL'];
        



$sql="INSERT INTO recycle VALUES( '$NAME','$EMAIL', '$TEXT', '$TOOL')"; /*('NAME', 'EMAIL', '999999999', 'MOBILE,TAB etc..')*/

echo"success";

if(mysqli_query($con, $sql)){
            echo "<h3>data stored in a database successfully." 
                . " Please browse your localhost php my admin" 
                . " to view the updated data</h3>"; 
  
            echo nl2br("\n$NAME\n $EMAIL\n "
                . "$TEXT\n $TOOL\n");
        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($con);
        }

          
        
        mysqli_close($con);


?>