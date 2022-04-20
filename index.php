<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php'; ?>
<body>
    <?php include 'includes/header.php'; ?>
    <div class="container-body">
        <div class="container-form">
            <form action="php/login.php" method="POST">
                <fieldset>
                    <legend>Login</legend>
                        <label for="username">Roll.No.</label>
                        <input type="text" required="required" id="username" name="username" size="15" maxlength="30">
                        <br><br>
                        <label for="password">Password</label>
                        <input type="password" required="required" id="password" name="password" size="15" maxlength="30">
                        <br><br>
                        <input type="submit" value="submit" id="submit">
                </fieldset>
            </form>
        </div>
    </div>
    <script src="js/responsive.js"></script>
</body>
</html>
