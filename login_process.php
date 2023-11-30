<?php
include "db_connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $login_query = "SELECT * FROM users WHERE username = '$username'";
    $login_result = mysqli_query($conn, $login_query);

    if (mysqli_num_rows($login_result) > 0) {
        $user_data = mysqli_fetch_assoc($login_result);
        if (password_verify($password, $user_data["password"])) {
            session_start();
            $_SESSION["user_id"] = $user_data["id"];
            $_SESSION["username"] = $user_data["username"];
            header("Location: customer_choice.php");
        } else {
            echo "Credentials do not match our records.";
	    header("Location: contact.php");
        }
    } else {
        echo "User not found. New registration required.";
	header("Location: register.php");
    }

    mysqli_close($conn);
}
?>
