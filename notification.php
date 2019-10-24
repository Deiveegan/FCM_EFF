<?php 
$server_name = "localhost";
$username = "root";
$password = "";
$dbname = "eff_enquiry";
// Create connection
$conn = new mysqli($server_name, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$na=$_REQUEST['name'];
$mb=$_REQUEST['mobile'];
$em=$_REQUEST['email'];
$su=$_REQUEST['subject'];
$ms=$_REQUEST['message'];
$notification_sent_uid="3";
$notification_sent="Yes";
$notified_dt=date('d/m/Y h:i:s');

$sql = 'INSERT INTO registration (name,mobile,email,subject,message,notifi_sent_uid,is_notified,notified_dt) 
VALUES ("'. $na.'",'.$mb.',"'.$em.'","'.$su.'","'.$ms.'",'.$notification_sent_uid.',"'.$notification_sent.'","'.$notified_dt.'")';

// function push_notification_android($device_id,$message){

    //API URL of FCM
    $url = 'https://fcm.googleapis.com/v1/projects/myproject-b5ae1/messages:send';
    $api_key='AIzaSyAK7W3DQ5fD0O7YCW_JBfpLToUZQgTyLxc'; //AIzaSyAYqnVJlGGibaGBDb9ELnm5W9RnvjTVOjs
    $device_id="1:762600190837:web:06c5e19e71d4664f5dd93c"/* "6b:5c:52:b8:4d:5b:f0:7b:74:b6:69:79:15:c4:d0:29:d2:b7:79:2d" */;

    $message=$na.",".$mb.",".$em.",".$su.",".$ms;
    /*api_key available in:
    Firebase Console -> Project Settings -> CLOUD MESSAGING -> Server key*/    
                
    $fields = array (
        'registration_ids' => array (
                $device_id
        ),
        'data' => array (
                "message" => $message
        )
    );

    //header includes Content type and api key
    $headers = array(
        'Content-Type:application/json',
        'Authorization:key='.$api_key
    );
                
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
    $result = curl_exec($ch);
    if ($result === FALSE) {
        die('FCM Send Error: ' . curl_error($ch));
    }
    curl_close($ch);
    // return $result;
// }

if ($conn->query($sql) === TRUE) {
    echo "Your Enquiry Submitted successfully";
    // header('https://efficienza.in');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
