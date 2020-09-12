<?php
session_start();
require '../includes/connection.php';

$message = '';

if (isset($_POST['loginButton'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];

    // Clean form input again
    $firstname = strip_tags($firstname);
    $firstname = str_replace(' ', '', $firstname);
    $firstname = strtolower($firstname);

    $lastname = strip_tags($lastname);
    $lastname = str_replace(' ', '', $lastname);
    $lastname = strtolower($lastname);

    $email = strip_tags($email);
    $email = str_replace(' ', '', $email);
    $email = strtolower($email);

    if ($_POST['loginButton'] == 1) {
        if (strlen($firstname) < 2 || strlen($lastname) < 2) {
            $message .= 'Your name cannot be 1 letter long';
            header("Location: http://localhost/quizapp/login.php?message='$message'");
            exit();
        }
        if ($confirmPassword !== $password) {
            $message .= 'Your passwords do not match';
            header("Location: http://localhost/quizapp/login.php?message='$message'");
            exit();
        }
        if (strlen($password) > 30 || strlen($password) < 5) {
            $message .= 'Your password must be between 5 and 30 characters long';
            header("Location: http://localhost/quizapp/login.php?message='$message'");
            exit();
        }
        $query =
            "SELECT 'email' " .
            "FROM 'users' " .
            "WHERE 'email' = '$email'";
        $result = mysqli_query($con, $query);
        if(!$result)
            echo(mysqli_error($con));
        if(mysqli_num_rows($result) > 0) {
            $message .= 'This email is already in use';
            header("Location: http://localhost/quizapp/login.php?message='$message'");
            exit();
        } else {
            if(preg_match('/[^A-Za-z0-9&$+]/', $password)) {
                $message .= 'Your password can only contain English characters, numbers, $, &, +';
                header("Location: http://localhost/quizapp/login.php?message='$message'");
                exit();  
            }
            $password = md5($password);
            $username = strtolower($firstname."_".$lastname);
            $query =
                "SELECT 'username' " .
                "FROM 'users' " .
                "WHERE 'username' = '$username'";
            $usernameCheck = mysqli_query($con, $query);
            $i = 0;
            // if username exists, add number to username
            while(mysqli_num_rows($usernameCheck) != 0) {
                $i++;
                $username .= "_".$i;
                $usernameCheck = mysqli_query($con, $query);
            }
            $rand = rand(1, 3);
            if($rand == 1)
                $profilepic = "assets/src/images/icon.jpg";
            else if($rand == 2)
                $profilepic = "assets/src/images/screenshot-graphic.jpg";
            else
                $profilepic = "assets/src/images/icon.jpg";
            $date = date('Y-m-d H:i:s');
            $query = "INSERT INTO 'users' VALUES('', '$firstname', '$lastname',
                '$email', '$password', '$username', '$profilepic', '', '$date', '2')";
            if($insertUser = mysqli_query($con, $query)) {
                $_SESSION['email'] = $email;
                header("Location: http://localhost/quizapp/quizhomepage.php");
                exit();
            } else {
                $message .= 'Your sign up was not successful. Please try again later';
                header("Location: http://localhost/quizapp/login.php?message='$message'");
                exit();
            }
        }
    }
}
