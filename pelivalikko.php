<?php include "menu.php"; ?>
<?php include "connection.php"; ?>

<ul>
    <li><a href="paavalikko.hp">Witcher</a></li>
    <li><a href="kirjaudu.ph">Sly Cooper</a></li>
    <li><a href="rekisteroidy.ph">Super Mario</a></li>
    <li><a href="luo.ph">World of Warcraft</a></li>
    <li><a href="genre.ph">The Elder Scrolls</a></li>
    <li><a href="pelivalikko.ph">Counter-Strike</a></li>
    <li><a href="selaa.ph">DOTA</a></li>
</ul>

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
