<?php

	$servername = "mysql";
	$username = "docker_root";
	$password = "docker_root123";

	try {
	    $conn = new PDO("mysql:host=$servername;dbname=blog", $username, $password);
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	    echo "Connected successfully"; 
    } catch(PDOException $e){
    	echo "Connection failed: " . $e->getMessage();
    }

?>

<?php phpinfo(); ?>