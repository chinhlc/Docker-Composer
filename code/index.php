<?php

	$servername = "mysql";
	$username = "root";
	$password = "docker_root123";

	try {
	    $conn = new PDO("mysql:host=$servername;dbname=0.demowp", $username, $password);
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	    $message = "Connected successfully"; 
    } catch(PDOException $e){
    	$message = "Connection failed: " . $e->getMessage();
    }
?>

<div class="center"><?php echo $message; ?></div>

<?php phpinfo(); ?>