<?php include "menu.php"; ?>
<?php include "connection.php"; ?>


<div class="column">
  <br>
  <div id="tietoboxi">

<?php
		$Peli=$db->query('SELECT Pelin_Nimi, Pelin_kuvaus FROM
      Peli ORDER BY Pelin_Nimi');
		foreach ($Peli as $row) {
		  echo $row['Pelin_Nimi'].' <br><br> ';
			echo $row['Pelin_kuvaus'].' <br><br><br><br>  ';
    }
      ?>
    </div>
  </div>

<?php include "footer.php"; ?>
