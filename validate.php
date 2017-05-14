<?php
/*
Template Name: Validate
*/

$to = "vincentjacquemin34@gmail.com";
//$to = "civorra@gmail.com";
$subject = "Someone has validated your profile";
$message = "Someone has validated your profile by choosing following skills <br />";
foreach ($_POST as $group => $data) {
    $message .= "<h1>" . $group . "</h1>";
    foreach ($data as $skill) {
        $message .= "<div>";
        $message .= $data . "<br />";
        $message .= "</div>";
    }
}

wp_mail(
    $to,
    $subject,
    $message
);