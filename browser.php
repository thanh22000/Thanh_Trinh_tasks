<?php
$title = ' Detect Browser';
include "layout/header.php";
$user_agent = $_SERVER['HTTP_USER_AGENT'];



if (strpos($user_agent, 'Edg') == true) {
    echo 'You are using Microsoft Edge.';
} elseif(strpos($user_agent, 'Firefox') == true) {
    echo 'You are using Mozilla Firefox.';
} elseif(strpos($user_agent, 'Chrome') == true) {
    echo 'You are using Google Chrome.';
} elseif(strpos($user_agent, 'Safari') == true) {
    echo 'You are using Safari.';
}
else {
    echo 'Your browser could not be determined.';
}
?>




<?php 
include "layout/footer.php";
?>