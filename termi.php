<?php include "menu.php"; ?>
<?php include "connection.php"; ?>

<div class="row">
  <div class="column">



<h3>Sanaan liittyvää</h3>
<p>Stun</p>
<p>Freeze</p>
<p>Burn</p>
  </div>

  <div class="column">
    <br>
  <div id="tietoboxi">
  <div id="tietoboxiheader">
<?php
		$Termi=$db->query('SELECT Nimi FROM Termi WHERE Nimi=nimi');
    foreach ($Termi as $row) {
		echo $row['Nimi'].'<br><br>';
  }
    ?> </div>

      <?php
      $Termi=$db->query('SELECT Kuvaus, UpLike, Dislike FROM Termi WHERE Nimi = nimi');
  		foreach ($Termi as $row) {
        echo $row['Kuvaus'].'<br> <br> <br> <br>';
        echo $row['UpLike'].'   positiivista   <br> <br>';
        echo $row['Dislike'].'   negatiivista';
      }
        ?> </div>
      </div>
    </div>



<?php include "footer.php"; ?>
