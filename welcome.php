<!-- Programmer: Chauntel Atchley Cully
     This page will be used specifically when the memberLogin link has been clicked on
     It will display the Hardcoded Member $name from the memberLogin.php as well 
     what situation is set for the Expiration by calling the functions from functions.php -->
<?php
    include "navigation.php";
?>

<body class="background">
    <div class="container-fluid">
        <div class="main">
            <h1 style="display: flex; justify-content: center;">Welcome to Delfino Community Club</h1>
            <p style="display: flex; justify-content: center; margin-top:45px;">
                You have successfully logged in.
            </p>
            <p style="display: flex; justify-content: center;">
                Welcome back <?php echo $name->get_memberName(); ?>!</p>
            <p style="display: flex; justify-content: center;">
                <?php echo $expiration->get_memberExpiration(); ?></p>
        </div>
    </div>
</body>