<?php
    require 'vendor/autoload.php';
    use Plivo\RestAPI;
    $auth_id = "MANTUYZWRKYTKXN2NJOT";
    $auth_token = "N2Q1NjU1ODJlMzVkYWRkNDc1ZTkyODU1ZWVkN2M5";

    $p = new RestAPI($auth_id, $auth_token);

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
    $to=$_POST["to"];
    $message=$_POST["message"];
    print "To<br>";
    print "<br>";
    echo $to;
    print "<br><br>";
    print "Typed Message :<br>";
    echo "<h2>" . $message . "</h2>";
    // Set message parameters
    $params = array(
        'src' => '1111111111', // Sender's phone number with country code
        'dst' => $to, // Receiver's phone number with country code
        'text' => $message, // Your SMS text message
        // To send Unicode text
        //'text' => 'こんにちは、元気ですか？' # Your SMS Text Message - Japanese
        //'text' => 'Ce est texte généré aléatoirement' # Your SMS Text Message - French
        'url' => 'http://example.com/report/', // The URL to which with the status of the message is sent
        'method' => 'POST' // The method used to call the url
    );
    // Send message
    $response = $p->send_message($params);

    // Print the response
    echo "Response : ";
    print_r ($response['response']);

    // Print the Api ID
    echo "<br> Api ID : {$response['response']['api_id']} <br>";

    // Print the Message UUID
    echo "Message UUID : {$response['response']['message_uuid'][0]} <br>";
    }
?>

<!--
Sample output
Response : Array
(
    [api_id] => 6debfaec-a25e-11e4-96e3-22000abcb9af
    [message] => message(s) queued
    [message_uuid] => Array ( [0] => 6dffe3ea-a25e-11e4-a6e4-22000afa12b0 )
)
Api ID : 6debfaec-a25e-11e4-96e3-22000abcb9af
Message UUID : 6dffe3ea-a25e-11e4-a6e4-22000afa12b0
-->

