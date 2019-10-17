<?php
session_start();
if(!isset($_SESSION['logged_in'])) {
header('Location:not_logged.php');
}
 ?>
<?php include "menu.php"; ?>
<?php include "connection.php"; ?>

<h2>Luo termi</h2>
<br>


<form class="" action="add_termi.php" method="post">
		 <input type="text" name="nimi" value="" placeholder="Nimi" required> <br>
		 <input type="text" name="kuv" value="" placeholder="Kuvaus" required> <br>
		<input type="submit" name="" value="Lisää">
	 </form>


<?php include "footer.php"; ?>
