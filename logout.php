<?php
    session_start();

    session_unset();

    session_destroy();

    header('Location: /Mipaginaweb/index.php');

?>