<!DOCTYPE html>
<html lang="en">

<?php include('head.php'); ?>

<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="../index.php">
                                <img src="images/logo.png" alt="Admin" style="height: 80px; width:80px">
                            </a>
                        </div>
                        <div class="login-form">
                            <form action="login_proces.php" method="post">
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input class="au-input au-input--full" type="email" name="admin_email" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="au-input au-input--full" type="password" name="admin_pass" placeholder="Password">
                                </div>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit" name="admin_btn">login</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <?php include('script.php'); ?>

</body>

</html>