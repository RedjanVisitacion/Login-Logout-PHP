<?php
include 'initialize.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <style>
        .center {
            margin-left: auto;
            margin-right: auto;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="center">
        <h3>Welcome! Please Login.</h3>
        <br>
        <form method="POST" action="auth.php">
            <table class="center" border="1">
                <tr>
                    <td>Username:</td>
                    <td><input type="text" name="username" required></td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input type="password" name="password" required></td>
                </tr>
                <tr>
                    <td colspan="2" class="center">
                        <button name="login" type="submit">Login</button>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>