<?php

if (isset($_POST['submit'])) {

    $num = $_POST['nummer'];
    
    $_SESSION['value'] = $num;
    
    header("Location:/cart.php");
    
    die();
}

header("Location:/nosubmit.php");
die();
