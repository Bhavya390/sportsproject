<?php 

try {
	$db = new PDO("mysql:host=10.0.0.109;dbname=bhavya_sfeed", "bhavya", "u64czx6usZcA8cbN");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e) {
    die($e->getMessage());
}



?>

