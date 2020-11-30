<?php 
	$connect = mysqli_connect("127.0.0.1","root","","dodo");
	$zapros = "SELECT * FROM pizza WHERE id='{$_GET['id']}'";
	$z = mysqli_query($connect,$zapros);
	$stroka = $z->fetch_assoc();
	$zapros2 = "INSERT INTO basket(title,img,descrip,price)
	VALUES ('{$stroka["title"]}','{$stroka["img"]}','{$stroka["descrip"]}','{$stroka["price"]}')";
	$vizov = mysqli_query($connect,$zapros2);
	header("Location:index.php");
 ?>