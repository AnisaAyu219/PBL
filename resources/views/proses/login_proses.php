<?php
session_start();
$username=$_POST["username"];
$password=$_POST["password"];


$_SESSION["username"]=$username;
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'localhost:8000/api/login',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => array('username' => $username,'password' => $password),
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
  $_SESSION["login"] = true;
  if($result -> level=='siswa') {
    header('Location: ../profile.blade.php');
  }else {
    header('Location: ../profileguru.blade.php');
}

// print_r("masuk login");
}else{
     header('Location: ../login.blade.php'); 
    // print_r("salah login");
    } 
     ?>