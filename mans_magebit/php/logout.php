<!-- izbeidz sesiju, izdzēšot sesijas datus un aizvada atpakaļ uz sākuma lapu -->
<?php session_destroy(); ?>
<?php header("Location: http://" . $_SERVER['HTTP_HOST']."/mans_magebit/index/index.php");
return; //un pārtraucam koda izpildi
?>
