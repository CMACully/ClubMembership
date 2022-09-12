<!-- Programmer: Chauntel Atchley Cully
     This page will be specifically for when a membership expires -->


<body class="background">
    <div class="container-fluid">
        <div class="main">
            <h1 style="display: flex; justify-content: center;">Welcome to Delfino Community Club</h1>
            <p style="display: flex; justify-content: center; margin-top:45px;">
                You have successfully logged in.
            </p>
            <p style="display: flex; justify-content: center;">
                Welcome back <?php echo $member->get_memberName(); ?>!</p>
            <p style="display: flex; justify-content: center;">
                <?php echo $member->get_memberExpiration(); ?></p>
            <h1 style="display: flex; justify-content: center; margin-top:45px;">Become a Member and join the Delfino
                Community
                Club!!</h1>
            <form action="" style="display: flex; justify-content: center; margin-top:45px;">
                <input type="text" placeholder="Full Name">
                <button>Rejoin now!</button>
            </form>
        </div>
    </div>
</body>