<?php
if(!isset($_SESSION)) {
    session_start();
}
if(!isset($_SESSION['idcliente'])) {
    die("Logue para acessar esta página. <p><a href=\"home.php\"Entrar></a></p>")
    
}

?>