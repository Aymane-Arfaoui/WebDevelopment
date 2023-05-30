<?php

session_start();
session_destroy();
header("Location:account.php");
exit();



include '../myWebsite/templates/footer.php';

?>