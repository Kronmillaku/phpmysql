<?php
//We will destroy all of the data associated with the current session
session_start();
session_unset();
session_destroy();
header("Location: login.php");
exit();
?>