<?php
if (isset($_COOKIE['rol'])) {
    setcookie('rol', '', time() - 3600, '/');
    setcookie('nombre', '', time() - 3600, '/');
    header("Location: ./Home_Petlover.php");
    exit;
}    
?>