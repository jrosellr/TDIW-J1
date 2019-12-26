<script src="js/jquery.js" type="application/javascript"></script>
<script src="js/src.js" type="application/javascript"></script>
<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['userIsLogged']))
    $_SESSION['userIsLogged'] = false;

$action = null;
if (isset($_GET['action']))
    $action = $_GET['action'];

switch ($action)
{
    default:
        include __DIR__ . '/resource_home.php';
        break;
    case "login":
        include __DIR__ . '/resource_login.php';
        break;
    case "signup":
        include __DIR__ . '/resource_signup.php';
        break;
    case "productDetail":
        include __DIR__ . '/r_productDetail.php';
        break;
}