<?php
//**************************   This Work is UNTESTED AND UNANALYZED  */

session_start();

session_destroy();

header("Location: index.php");
exit;