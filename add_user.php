<?php
print_r($_POST);
include 'connection.php';
$encrypted_pass = password_hash($_POST['salasana'],PASSWORD_DEFAULT);

$stmt=$db->prepare("INSERT INTO kayttaja (kayttajatunnus,salasana,sposti) VALUES
(:kayttajatunnus,:salasana,:sposti)");
$stmt->bindParam(':kayttajatunnus',$_POST['kayttajatunnus']);
$stmt->bindParam(':salasana',$encrypted_pass);
$stmt->bindParam(':sposti',$_POST['sposti']);
$stmt->execute();

 ?>
