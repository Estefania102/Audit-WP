

    <?php
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$db = "bdauditwp";
	$con = mysqli_connect($dbhost, $dbuser, $dbpass , $db) or die($con);
    if($con->connect_error){
        echo $error ->$con->connect_error;}
    // }else{
    //     echo "Conexion exitosa";
    // }
?>


