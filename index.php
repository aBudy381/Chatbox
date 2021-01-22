<?php

$db = new mysqli("localhost","root","","chat");

if($db->connect_error{

	die("Connection failed: " .$db->connect_error);
}


$result = array();
$message = isset($_POST['message']) : null;
$from = isset($_POST[' form ']) ? $_POST[' form ']: null;

if(!empty($message) && !empty($form)){
   
   $sql = "INSERT INTO 'chat' ('message','form') VALUES ('".$message."','".$form"')";
   $result['send_satus'] = $db-> query($sql);
}
$db->close();


echo json_encode($result);