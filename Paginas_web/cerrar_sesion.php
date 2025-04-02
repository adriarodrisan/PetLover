<?php
if (isset($_COOKIE['rol'])) {
    setcookie('rol', '', time() - 3600, '/');
    
?>