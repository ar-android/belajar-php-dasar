<?php 


// membuat variable cukup dengan tanda $ dan di ikuti nama variable dan nilainya.
$nama = 'Ahmad Rosid';

// Membuat data array
$data = array();
$data['nama'] = $nama;

// Looping atau perulangan
for ($i=0; $i < 10; $i++) { 
	// echo 'Index ke '.$i.'</br>';
}

// Looping juga bisa menggunakan foreach 
$array_data = [1,2,3,4,5,6,7];
foreach ($array_data as $key) {
	// echo $key.'<br>';
}

// Array juga bisa memiliki type kata kunci dan nilai datanya atau key dan value
$array_key  = array(
	'nama' => 'Ahmad Rosid',
	'alamat' => 'Yogyakarta',
	'umur' => '28 tahun' 
);

// Mengetahui Panjang array
// echo count($array_key);

// Looping array dengan for
for ($i=0; $i < count($array_data); $i++) { 
	// echo $array_data[$i];
}

// Akses data array key value secara langsung
// echo $array_key['nama'];

// Looping array key value
foreach ($array_key as $key => $value) {
	// echo "key = ".$key;
	// echo "<br> value =".$value;
	// echo "<br>";
}

// Pecabangan atau if else

// boolean data yang bernilai salah atau benar bisa juga dengan 1 = benar dan 0 = salah atau true false
$laki_laki = false;

if ($laki_laki) {
	// echo "Kamu adalah laki - laki";
}
