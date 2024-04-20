<?php
// Check if username and password match

// Username = user
//Password = 1234

$username = $_POST['username'];
$password = $_POST['password'];

// Check if username and password are correct 
if ($username === 'user' && $password === '1234') {
    // Start session and set logged in user
    session_start();
    $_SESSION['username'] = $username;
    header('Location: profile.php');
    exit();
} else {
    echo "Invalid username or password";
}
?>
