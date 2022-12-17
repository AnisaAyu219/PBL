<?php

session_start();

$nisn = $_SESSION["username"];
echo $nisn;
echo "<br>";

$tanggal = $_POST["tanggal"];
echo $tanggal;
echo "<br>";

$keterangan = $_POST["keterangan"];
echo $keterangan;
echo "<br>";


$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => 'http://localhost:8000/api/create_absen',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => array('nisn' => $nisn,'tanggal' => $tanggal,'keterangan' => $keterangan,'alasan' => $alasan),
  CURLOPT_HTTPHEADER => array(
    'Accept: application/json'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
$result = json_decode($response);
echo "<pre>";
print_r($result);
echo "</pre>";

header("Location:../absensi.blade.php");
?>