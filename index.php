<!DOCTYPE html>
 <html>
 <head>
 	<title>Andreas Yozef!</title>
 	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>website</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Team-Boxed.css">
 </head>
 <body style="background: pink url('https://i.ibb.co/C2Jz9ZZ/image-removebg-preview-3.png') no-repeat center right;">
 	<?php include('source.php') ?>
 	<?php include('header.php') ?>
    <div class="team-boxed" align="center">
            <div class="container">
                <div class="intro">
                    <h2 class="text-center py-5">About Me!</h2>
                </div>
                <div class="row people">
                    <div class="col-md-6 col-lg-4 item"></div>
                    <div class="col-md-6 col-lg-4 item">
                        <div class="box" style="padding-bottom: 89px; border:1px solid black; border-radius: 5px; background-color: white;"><img class="rounded-circle py-3" src="https://a.ppy.sh/17870431?1595955399.jpeg">
                            <h3 class="name">Andreas Yozef</h3>
                            <p class="title">Gamer</p>
                            <p class="description">hai, aku gabisa bikin website bagus uwu</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 item"></div>
                </div>
            </div>
        </div>



        <div align="center" class="pt-5">
        	<h1>Review tantang saya!</h1>
        	<h3><?php 
	 $link = mysqli_connect('localhost', 'root', '', 'reviewp');

	 $query = "SELECT * FROM reviewl";
	 $hasil = mysqli_query($link, $query);

	 if (mysqli_num_rows($hasil) > 0 ) {
	 	while ($data = mysqli_fetch_assoc($hasil)) {
	 		echo "dari: ".$data['nama']. " katanya: ". $data['reviewf'] ."<br>";
	 	}
	 }

	 mysqli_close($link);

 ?></h3>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
 
 </body>
 </html>