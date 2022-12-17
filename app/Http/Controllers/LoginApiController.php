<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginApiController extends Controller
{
    /**
     * 
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        session_start();
        $username=$_POST["username"];
        $password=$_POST["password"];
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
          // header('Location: profile.blade.php'); 
          return view('profile');
          $_SESSION["login"] = true;
            //print_r("masuk login");
        }else{
            return view('login');
            // print_r("salah login");
            } 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
