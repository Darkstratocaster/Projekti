<?php include "menu.php"; ?>
<?php include "connection.php"; ?>

<div id=genremenu>
  <span><a href="genre.php">Roolipelit</a> </span>
  <span><a href="genre_raiskinta.php">Räiskintä</a> </span>
  <span><a href="genre_kauhu.php">Kauhu</a> </span>
  <span><a href="genre_speedrun.php">Speedrun</a> </span>
  <span><a href="genre_tasoloikka.php">Tasoloikka</a> </span>
  <span><a href="genre_pulmanratkonta.php">Pulmanratkonta</a> </span>
  <span><a href="genre_moninpelit.php">Moninpelit</a> </span>
  <span><a href="genre_hiiviskely.php">Hiiviskely</a> </span>
  <span><a href="genre_ajopelit.php">Ajopelit</a> </span>
  <span><a href="genre_avoinmaailma.php">Avoin maailma</a> </span>
  <span><a href="genre_moba.php">MOBA</a> </span>
  <span>  <a href="genre_laitteet.php">Laitteet</a> </span>
</div>

<div class="column">
  <br>
  <div id="tietoboxi">

<?php
		$Genre=$db->query('SELECT Genren_Nimi, Genren_kuvaus FROM Genre WHERE
      Genren_Nimi = "Räiskintä"');
		foreach ($Genre as $row) {
		  echo $row['Genren_Nimi'].' <br><br> ';
			echo $row['Genren_kuvaus'].' <br><br>  ';
    }
      ?>
    </div>
  </div>

<h3>Räiskintä</h3>
<p>Shotgun</p>
<p>Ammo</p>
<p>Explosive</p>
<p>Grenade</p>
<p>Riot Shield</p>
<p>Glock</p>
<p>Acog</p>
<p>SMG</p>
<p>Tank</p>

<?php include "footer.php"; ?>
