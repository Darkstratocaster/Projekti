<?php include "menu.php"; ?>
<?php include "connection.php"; ?>

<div id="aakkosmenu">

  <span><a href="selaa_a.php">A</a></span>

  <span><a href="selaa_b.php">B</a></span>

  <span><a href="selaa_c.php">C</a></span>

  <span>  <a href="selaa_d.php">D</a></span>

  <span> <a href="selaa_e.php">E</a></span>

  <span>  <a href="selaa_f.php">F</a></span>

  <span><a href="selaa_g.php">G</a></span>

  <span><a href="selaa_h.php">H</a></span>

  <span>  <a href="selaa_i.php">I</a></span>

    <span><a href="selaa_j.php">J</a></span>
    <span><a href="selaa_k.php">K</a></span>
    <span><a href="selaa_l.php">L</a></span>
    <span><a href="selaa_m.php">M</a></span>
    <span><a href="selaa_n.php">N</a></span>
    <span><a href="selaa_o.php">O</a></span>
    <span><a href="selaa_p.php">P</a></span>
    <span><a href="selaa_q.php">Q</a></span>
    <span><a href="selaa_r.php">R</a></span>
    <span><a href="selaa_s.php">S</a></span>
    <span><a href="selaa_t.php">U</a></span>
      <span><a href="selaa_u.php">T</a></span>
    <span><a href="selaa_v.php">V</a></span>
    <span><a href="selaa_w.php">W</a></span>
    <span><a href="selaa_x.php">X</a></span>
    <span><a href="selaa_y.php">Y</a></span>
    <span><a href="selaa_z.php">Z</a></span>
    <span><a href="selaa_ä.php">Ä</a></span>
    <span><a href="selaa_ö.php">Ö</a></span>
</div>
<div class="column">
  <br>
  <div id="tietoboxi">

<?php
		$Termi=$db->query('SELECT Nimi, Kuvaus, UpLike, Dislike FROM Termi WHERE
      Nimi LIKE "V%" ORDER BY Nimi'); foreach ($Termi as $row) {
		  echo $row['Nimi'].' <br><br> ';
			echo $row['Kuvaus'].' <br><br>  ';
			echo $row['UpLike'].' positiivista <br><br>  ';
			echo $row['Dislike'].' negatiivista<br><br>  ';
      echo '<a href="termi.php?id='.$row['Nimi'].'">Avaa</a>'.'   ';
      echo '<a href="delete_termi.php?id='.$row['Nimi'].'">Poista</a> <br><br><br>';
    }
      ?>
    </div>
  </div>
<h3>V</h3>
<p>Vision</p>
<p>Visibility</p>
<p>Version</p>
<p>Vulnerability</p>

<?php include "footer.php"; ?>
