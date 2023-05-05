<!DOCTYPE html>

<html>

<head>

    <title>Login</title>

    <link rel="stylesheet" href="/public/css/style.css">

</head>

<body>

    <div class="container">

        <img src="/public/img/logo.svg" alt="Logo" id="logo">

        <!-- display error message if set -->

        <?php if (isset($_SESSION['error'])): ?>

            <div class="error"><?= $_SESSION['error'] ?></div>

            <?php unset($_SESSION['error']); ?>

        <?php endif; ?>

        <form action="/" method="POST">

            <div>

                <input type="text" id="username" name="username" required placeholder="Username">

                <input type="password" id="password" name="password" required placeholder="Password">

            </div>

            <div>

                <button type="submit" name="login">Login</button>

            </div>

        </form>

    </div>

</body>

</html>





