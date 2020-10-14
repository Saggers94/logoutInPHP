<?php

//emptying the session when user click on logout
$_SESSION['success'] = [];
$_SESSION['user_id'] = [];


//redirecting to the homepage
header('Location: home');
die;
