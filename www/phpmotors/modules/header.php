<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/phpmotors/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro&display=swap" rel="stylesheet">
    <title>PHP Motors - DMC Delorean</title>
</head>
<body>
<div class="logo-bar">
    <img src="/phpmotors/images/site/logo.png" alt="Logo for PHPMotors">
    <?php if (isset($_SESSION['loggedin'])) {
        if ($_SESSION['loggedin']){
            echo "<p>Welcome <a class='header-link' href='/phpmotors/accounts/'>".$_SESSION['clientData']['clientFirstname']."</a>";
            echo " | <a class='header-link' href='/phpmotors/accounts?action=logout'>Logout</a> </p>";
        }
        
        } else{
            echo "<a class='header-link' href='/phpmotors/accounts/?action=login'>My Account</a>";
        }
    ?>
    
</div>