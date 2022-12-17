<?php
session_start();
$nisn = $_SESSION["username"];

$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => 'http://localhost:8000/api/delete_jurnal/{id}',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'DELETE',
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
  // print_r("masuk login");
}else{
     //header('Location: login.blade.php'); 
    print_r("data_gagal_dihapus");
    } 
     ?>