<?php
    // create & initialize a curl session
    $curl = curl_init();

    // set our url with curl_setopt()
    curl_setopt($curl, CURLOPT_URL, "https://flynn.boolean.careers/exercises/api/array/music");

    // return the transfer as a string, also with setopt()
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    
    curl_setopt($curl, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json'
     ));

    // curl_exec() executes the started curl session
    // $output contains the output string
    $output = curl_exec($curl);
    $decodedOutput = json_decode($output, true);
    // close curl resource to free up system resources
    // (deletes the variable made by curl_init)
    curl_close($curl);

    
    //header("Content-Type: application/json");
    
    //json_encode($output);

?>