<?php
session_start();
unset($_SESSION['user_id']);
header("Location: index.php");//use for the redirection to some page  
session_destroy();
