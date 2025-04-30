<?php
if (isset($_COOKIE['rol'])) {
    setcookie('rol', '', time() - 3600, '/');
    header("Location: ./Home_Petlover.php");
    exit;
}    
?>