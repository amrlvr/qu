<?php 
// koneksi ke database
require('connect.php');

function query ($query){
	global $conn;
	$result = mysqli_query ($conn, $query);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}

	return $rows;
}


function tambah ($data){
	global $conn;
	// ambil data dari tiap elemen dalam form
	$id = $data ["id"];
	$author = $data["author"];
	$quote = $data["quote"];
	
	$query = "INSERT INTO data
				VALUES
				('', '$id','$author','$quote');

				";

		mysqli_query ($conn, $query);

		return mysqli_affected_rows ($conn);

}
?>