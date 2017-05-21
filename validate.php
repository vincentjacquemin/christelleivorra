<?php
/*
Template Name: Validate
*/

error_reporting(-1);
ini_set('display_errors', 1);

$to = "vincentjacquemin34@gmail.com";
//$to = "civorra@gmail.com";
$subject = "Someone has validated your profile";
$message = "Someone has validated your profile by choosing following skills <br />";

foreach ($_POST as $group => $data) {
    $message .= "<h1>" . $group . "</h1>";
    $message .= "<div>";
    foreach ($data as $skill => $value) {
        $message .= str_replace("'", '', $skill) . "<br />";
    }
    $message .= "</div>";
}

mail($to, $subject, $message);

header("Location: $location");