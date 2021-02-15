<?php

session_start();

session_destroy();

setcookie('user_id',null, -1);

header('location: index.php');