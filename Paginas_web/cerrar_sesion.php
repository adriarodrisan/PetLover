<?php
if (isset($_COOKIE['rol'])) {
    setcookie('rol', '', time() - 3600, '/');
    header("Location: /Paginas_web/Home_Petlover.php");
    exit;
}    
?>