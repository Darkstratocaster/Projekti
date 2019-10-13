<?php include "menu.php"; ?>
<?php include "connection.php"; ?>

<h2>Luo termi</h2>


<p>Nimi</p>
<textarea name="name" rows="1" cols="15"></textarea>

<form class="" action="add_termi.php" method="post">
		 <input type="text" name="nimi" value="" placeholder="Nimi" required> <br>
		 <input type="text" name="kuv" value="" placeholder="Kuvaus" required> <br>
		<input type="submit" name="" value="Lisää">
	 </form>
<p>
Kuvaus
</p>
<textarea name="name" rows="6" cols="30"></textarea>

<p>Aihe</p>
<textarea name="name" rows="1" cols="15">Liitä genre</textarea>
<textarea name="name" rows="1" cols="15">Liitä peli</textarea>

<?php include "footer.php"; ?>
