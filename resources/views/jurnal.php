<?php
session_start();
$nisn = $_SESSION["username"];

$tanggal = $_POST["tanggal"];

$kegiatan = $_POST["kegiatan"];
$dokumentasi = $_FILES["dokumentasi"];

$curl = curl_init();
curl_setopt_array($curl, array(
    CURLOPT_URL => 'http://localhost:8000/api/create_jurnal',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS => array('nisn' => $nisn,'tanggal' => $tanggal,'kegiatan' => $kegiatan,'dokumentasi'=> new CURLFILE($dokumentasi)),
    CURLOPT_HTTPHEADER => array(
      'Accept: application/json'
    ),
  ));

$response = curl_exec($curl);
$response_code = curl_getinfo($curl, CURLINFO_HTTP_CODE); 

curl_close($curl);
$result = json_decode($response);
echo "<pre>";
print_r($result);
echo "</pre>";

if($response_code == 200){   
    header('Location: jurnal.blade.php'); 
    //print_r("data berhasil masuk");
  }else{
       //header('Location: login.html'); 
      print_r("data gagal diinputkan");
      } 
?>