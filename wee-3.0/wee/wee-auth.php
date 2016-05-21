<?php
// application specific code that checks the validity of a login
// and returns a $USERID

$USERID = "demo";
$GPGDIR = $GPGDIR."/".$USERID;

/*
if (isset($_SESSION['user_id'])) {
     $USERID = $_SESSION['user_id'];
     $GPGDIR = $GPGDIR."/".$USERID;
}
else {
     die ("Not logged in.");
}
*/
?>
