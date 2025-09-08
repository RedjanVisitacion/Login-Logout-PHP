<?php include'initialize.php'?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login/Logout in Php</title>
    <style>
        .center {margin-left: auto; margin-right: auto;}
    </style>
</head>
<body>
    
    <div align="center">
    <h3>Welcome!</h3>
        <?php
        if (isset($_SESSION['alert_message'])) {
            echo '<div class="center"><b><i>' . $_SESSION['alert_message'] . '</i></b></div>';
            unset($_SESSION['alert_message']);
        }
        ?>
        <br>
        <?php
        if (isset($_SESSION['is_login']) && $_SESSION['is_login'] == true) {
        ?>
            <h3>Congratulations! You are now logged in. Click <a href="login.php">here</a> to logout</h3>
        <?php
        } else {
        ?>
            <table border="1" width="20%" class="center">
                <tr>
                    <td align="center"><a href="login.php">Login</a></td>
                </tr>
                <tr>
                    <td align="center"><a href="register.php">Register</a></td>
                </tr>
            </table>
            <b></br>
        <?php
        }
        ?>
    </div>
</body>
</html>

