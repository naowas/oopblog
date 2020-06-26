<?php

include 'header.php';
require '../class/user.class.php';

?>

<?php

    $user = new User();
    if($_SERVER['REQUEST_METHOD']== 'POST' && isset($_POST['register'])){

        $user_reg = $user->userRegistration($_POST);
    }


?>

<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <img src="../src/images/icon/logo.png" alt="CoolAdmin">
                            </a>
                        </div>

                        <?php

                        if(isset($user_reg)){
                            echo $user_reg;
                        }

                        ?>
                        <div class="login-form">
                            <form action="" method="post">
                            <div class="form-group">
                                    <label>Full Name</label>
                                    <input class="au-input au-input--full" type="text" name="name" placeholder="What is your full name?">
                                </div>
                                <div class="form-group">
                                    <label>Username</label>
                                    <input class="au-input au-input--full" type="text" name="username" placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input class="au-input au-input--full" type="email" name="email" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="au-input au-input--full" type="password" name="password" placeholder="Password">
                                </div>
                                <!-- <div class="login-checkbox">
                                    <label>
                                        <input type="checkbox" name="aggree">Agree the terms and policy
                                    </label>
                                </div> -->
                                <button name="register" class="au-btn au-btn--block au-btn--green m-b-20" type="submit">register</button>
                                <!-- <div class="social-login-content">
                                    <div class="social-button">
                                        <button class="au-btn au-btn--block au-btn--blue m-b-20">register with facebook</button>
                                        <button class="au-btn au-btn--block au-btn--blue2">register with twitter</button>
                                    </div>
                                </div> -->
                            </form>
                            <div class="register-link">
                                <p>
                                    Already have account?
                                    <a href="login.php">Sign In</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

   <?php

   include 'footer.php'
   ?>

</body>

</html>
<!-- end document-->