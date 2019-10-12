<?php include "menu.php"; ?>
<?php include "connection.php"; ?>
<?php
$stmt=$db->prepare("INSERT INTO Termi(Nimi,Kuvaus,UpLike,Dislike)
VALUES(:nimi, :kuv, 0, 0)");
$stmt->bindParam(':nimi', $_POST['nimi']);
$stmt->bindParam(':kuv', $_POST['kuv']);

if($stmt->execute()){
  echo 'Lisättiin termi:  '.$_POST['nimi'];
}
else{
  echo 'Lisäys epäonnistui';
}
?>
<?php include "footer.php"; ?>
