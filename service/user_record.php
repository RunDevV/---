<?php
    if(isset($_SESSION['uid']) AND isset($_SESSION['user_status'])){
        $sql = $userClass->userRecord($_SESSION['uid']);
        $rowUser =  $sql->fetch(PDO::FETCH_ASSOC);
    }
?>