<?php
	function quotes(){
		$author=$_POST['author'];
		$quote=$_POST['quote'];
		require("connect.php");
		$save=mysqli_query($conn,"INSERT INTO data (id, author, quote)
		VALUES('','$author','$quote') ");
			if ($save) {
			echo "<script> alert ('Data Berhasil Disimpan');document.location='index.php'</script>";
		}else{
			echo "<script> alert ('Data Gagal Disimpan, Coba Lagi');document.location='index.php'</script>";
		}
	}

	quotes();
?>