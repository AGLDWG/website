<?php

if(defined('STDIN')) {
    include("php-mailjet-v3-simple.class.php");

    $secrets = json_decode(file_get_contents("secrets.json"), true);
    sendEmail($secrets['apiKey'], $secrets['secretKey'], 'nicholas.car@csiro.au', 'nicholas.car@csiro.au', 'fake subject3', 'this is a body');

    print("Email sent\n");
} else {
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        // don't even admit this resource exists
        http_response_code(404);
        die();
    } else {
        // a POST is being sent here
        $their_email = $_POST['their_email'];
        $which_form = $_POST['which_form'];

        include("php-mailjet-v3-simple.class.php");

        if (file_exists("secrets.json")) {
            $secrets = json_decode(file_get_contents("secrets.json"), true);
            if (sendEmail($secrets['apiKey'], $secrets['secretKey'], $secrets['from'], $secrets['to'], '[agldwg] '. $which_form, 'Sign up ' . $their_email . ' to ' . $which_form . '.')) {
                header('Location: /joined');
            } else {
                http_response_code(500);
                print("Email not sent");
                die();
            }
        } else {
            http_response_code(500);
            print("secrets.json file missing\n");
            die();
        }
    }
}


// from https://github.com/mailjet/mailjet-apiv3-php-simple#a-function-to-send-an-email
function sendEmail($apiKey, $secretKey, $from, $to, $subject, $text)
{
    $mj = new Mailjet($apiKey, $secretKey);
    $params = array(
        "method" => "POST",
        "from" => $from,
        "to" => $to,
        "subject" => $subject,
        "text" => $text
    );

    $result = $mj->sendEmail($params);

    if ($mj->_response_code == 200)
       return true;
    else
       return false;
}


?>
