<?php 
$connect = mysqli_connect("127.0.0.1","root","","dodo");
$text_zaprosa = "DELETE FROM basket WHERE id ='{$_GET['id']}'";
$zapros_vvoda = mysqli_query($connect,$text_zaprosa);
header("Location:index.php");
 ?>