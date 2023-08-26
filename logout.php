<?php
session_start();
session_destroy();
header("Location:../agro/index.html");
exit();


?>