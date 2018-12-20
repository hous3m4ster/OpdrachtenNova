<?php
session_start();
if(isset($_SESSION['login']) && $_SESSION['login']){
    header('Location: inbox.php');
}else{
    header('Location: login.php');
}
