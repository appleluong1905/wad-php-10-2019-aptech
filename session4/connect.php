<?php 
	$server = 'localhost'; //$server = '127.0.0.1';
	$username = 'root';
	$password = 'none'; // $password = '';
	$database = 'wad_php_1019';

	$connect = mysqli_connect($server, $username, $password, $database);

	// Change character set to utf8
	mysqli_set_charset($connect,"utf8");
	// Check connection
	if (mysqli_connect_errno())
  {
  	echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

  $title = "Sản phẩm chất"; // $title = $_POST['title'];
  
  $sql = "INSERT INTO products (title, description, image, price, created, updated) VALUES ('$title', 'mo ta 1111', 'myimage.jpg', 1240, '2019-10-09 21:00:00', '2019-10-09 21:00:00')
";
	if (mysqli_query($connect, $sql) === TRUE) {
		echo "Insert success!";
	}

?>