<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Inventory Management</title>
    <link rel="stylesheet" href="assets/css/login.style.css" />
    <!-- Unicons -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
</head>

<body>
    <!-- Home -->
    <section class="home">
        <div class="form_container">
            <!-- Login From -->
            <div class="img">
                <img src="assets/img/bg.jpg" alt="">
            </div>
            <div class="form login_form">
                <form action="/login" method="POST">
                    <h2>INVENTORY MANAGEMENT</h2>

                    <div class="input_box">
                        <input type="email" name="email" placeholder="Enter your email" required />
                        <i class="uil uil-envelope-alt email"></i>

                    </div>
                    <div class="input_box">
                        <input type="password" id="password" name="password" placeholder="Enter your password" required />
                        <i class="uil uil-lock password"></i>
                        <i class="uil uil-eye-slash pw_hide" id="showPassword"></i>
                    </div>
                    <!-- <?php if (!empty($error_message)): ?>
                        <p style="color:red; font-size: 10px">
                            <?php echo $error_message; ?>
                        </p>
                    <?php endif; ?> -->
                    <button class="button">Login Now</button>
                </form>
            </div>
        </div>
    </section>
</body>
<script src="<?= '/assets/js/login.script.js' ?>"></script>
</html>