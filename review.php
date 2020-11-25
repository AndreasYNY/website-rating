<?php 
	
	$link = mysqli_connect('localhost', 'root', '', 'reviewp');

	if (!$link) {
		die('error has occurred'. mysqli_connect_error());
	}

	$reviewowo = $_POST['reviewb'];
	$reviewuwu = $_POST['nama'];
	$query = "INSERT INTO reviewl SET reviewf='$reviewowo', nama='$reviewuwu'";

	if (isset($_POST['submit'])) {
		mysqli_query($link, $query);
	}
	// mysqli_query($link, $query);
	mysqli_close($link);

 ?>


 <!DOCTYPE html>
 <html>
 <head>
 	<title>Review Andreas!</title>
 	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Team-Boxed.css">
 </head>
 <body style="background: pink url('https://i.ibb.co/C2Jz9ZZ/image-removebg-preview-3.png') no-repeat center right;">
 	<?php include('header.php'); ?>
 	<h1 align="center" class="py-5">Kasih Review gan!</h1>


 	<div align="center">
	 	<form action="" method="post" style="border-radius: 50px">
	 		<textarea rows="4" cols="50" placeholder="tulis di sini" type="text" name="reviewb"></textarea><br>
	 		nama anda:
	 		<input type="text" name="nama" class="mt-3"><br>
	 		<!-- <input type="submit" name="submit"> -->
	 		<button style="background-color:white;" class="my-3" type="submit" name="submit">Submit</button>
	 	</form>
 	</div>
 </body>
 </html>