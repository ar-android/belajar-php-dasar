<?php 

/*
 | 
 | Dasar connect to mysql
 | 
 | 
*/

$database_host = 'localhost';
$database_name = 'ocittwo_db';
$database_user = 'root';
$database_pass = 'alphaomega*9';

// Mysqli connect database
$connect_db = mysqli_connect($database_host, $database_user, $database_pass);

// Cek jika koneksi gagal
if (!$connect_db) {
	die("Gagal Connect ke database ".mysqli_error($connect_db));
}

// membuat variable data user
$name = 'Ahmad Rosid';
$email = 'ocittwo@gmail.com';
$password = 'qweasd123';

// Query mysql insert data user
$query = "INSERT INTO user".
		 "(name, email, password)".
		 "VALUES".
		 "('$name', '$email', '$password')";

// Query select database
mysqli_select_db($connect_db, $database_name);

// Simpan data user kedala database
$simpan = mysqli_query($connect_db, $query);

if ($simpan) {
	echo "Berhasil menyimpan data kedalam database.";
}else{
	echo "Error ".mysqli_error($connect_db);
}