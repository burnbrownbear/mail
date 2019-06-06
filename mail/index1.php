	
<meta charset="utf-8">
<?php 
	$connect = mysqli_connect('127.0.0.1', 'root', '', 'kirill_ch_17');
	$query = mysqli_query($connect, "SELECT * FROM insta WHERE email ='" . $_POST['email'] ."' AND password='" . $_POST['password'] . "'");
	echo num_rows()
	if(){
			header('Location: http:/kirill_ch_17/post.php'); #Ссылка на главный  post.php
	};
	else{
			header('Location: '); #Ссылка на повтор + Ошибка auto.php (login.php)
	};
 ?>