<?php
include 'initialize.php';

if (isset($_POST['register'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if (empty($firstname)) {
        $_SESSION['alert_message'] = "Firstname is required!";
        header("Location: register.php");
        exit();
    } elseif (empty($lastname)) {
        $_SESSION['alert_message'] = "Lastname is required!";
        header("Location: register.php");
        exit();
    } elseif (empty($username)) {
        $_SESSION['alert_message'] = "Username is required!";
        header("Location: register.php");
        exit();
    } elseif (empty($password)) {
        $_SESSION['alert_message'] = "Password is required!";
        header("Location: register.php");
        exit();
    } elseif (empty($confirm_password)) {
        $_SESSION['alert_message'] = "Confirm Password is required!";
        header("Location: register.php");
        exit();
    } elseif ($password != $confirm_password) {
        $_SESSION['alert_message'] = "Password and Confirm Password do not match!";
        header("Location: register.php");
        exit();
    } else {
        $encrypted_password = md5($password);
        $sql = "INSERT INTO users (firstname, lastname, username, password) VALUES ('$firstname', '$lastname', '$username', '$encrypted_password')";

        if ($connection->query($sql) === TRUE) {
            $_SESSION['alert_message'] = "Account successfully created!";
            header("Location: login.php");
            exit();
        } else {
            $_SESSION['alert_message'] = "Error: " . $sql . "<br>" . $connection->error;
            header("Location: register.php");
            exit();
        }
    }
}


if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $encrypted_password = md5($password);
    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$encrypted_password'";
    $result = $connection->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $_SESSION['alert_message'] = "You are now logged in.";
        $_SESSION['user_firstname'] = $row['firstname'];
        $_SESSION['is_login'] = true;
        header("Location: index.php");
        exit();
    } else {
        $_SESSION['alert_message'] = "Username and Password not found!";
        header("Location: login.php");
        exit();
    }
}
?>
