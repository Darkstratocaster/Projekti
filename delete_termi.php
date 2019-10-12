<?php include "menu.php"; ?>
<?php include "connection.php"; ?>
<?php
$stmt=$db->prepare("DELETE FROM Termi WHERE Nimi=nimi");
  $stmt->bindParam('nimi',$_GET['nimi']);
  $stmt->execute();
  $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
  print_r($result);
  echo 'Poistaminen onnistui';
?>

 <?php include "footer.php"; ?>
