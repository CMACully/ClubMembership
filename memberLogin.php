<!-- Programmer: Chauntel Atchley Cully
     When the memberLogin.php loads it checks to see if the currentMember 
     which has to be set to public is true or false, with the if else statement.
     if set to true include the welcome.php else include the signup.php -->
<?php
    include "functions.php";
    include "navigation.php";
    $name = new Member("Mario", "");
    $expiration = new Member("", "");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
        if ($name->currentMember)
        {
            include "welcome.php";
        }
        else
        {
            include "signup.php";
        }
    ?>
</body>

</html>