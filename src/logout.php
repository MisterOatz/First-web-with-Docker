<?php
 session_start();
 session_destroy();
 echo"<script>alert('You have already log out'); window.location='login.php';</script>";
 exit();

?>