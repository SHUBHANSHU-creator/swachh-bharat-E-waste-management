<?php



$serverName='localhost';
$userName='root';
$password='';
$dbName='green-defenders';
$con=new mysqli($serverName,$userName,$password,$dbName);
if (mysqli_connect_errno()){
	echo"Failed";
	exit();
}

		$TEXT =  $_REQUEST['TEXT'];
             

$sql="INSERT INTO ideas VALUES( '$TEXT')"; /*('NAME', 'EMAIL', '999999999', 'MOBILE,TAB etc..')*/

echo"success";

if(mysqli_query($con, $sql)){
            echo "<h3>data stored in a database successfully." 
                . " Please browse your localhost php my admin" 
                . " to view the updated data</h3>"; 
  
            echo nl2br("\n$TEXT");
        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($con);
        }

          
        
        // Close connection
        mysqli_close($con);


?>