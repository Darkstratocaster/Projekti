<?php
	try
	{
	 $dsn = "mysql:host=mysli.oamk.fi;dbname=opisk_t8vipy01";
	 $db = new PDO ($dsn, "t8vipy01", "viirret");
	 //print ("Connected\n");
	}
	catch (PDOException $e)
	{
	 print ("Cannot connect to server\n");
	 print ("Error code: " . $e->getCode () . "\n");
	 print ("Error message: " . $e->getMessage () . "\n");
	}
	?>
