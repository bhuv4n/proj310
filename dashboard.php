<?php
session_start();


if (!isset($_SESSION["user_id"])) {
    header("Location: login.php");
    exit();
}


include("db_connection.php");


$user_id = $_SESSION["user_id"];
$user_query = "SELECT * FROM users WHERE id = $user_id";
$user_result = mysqli_query($conn, $user_query);


if (mysqli_num_rows($user_result) == 1) {
    $user_data = mysqli_fetch_assoc($user_result);
} else {
    $user_data = [];
}

mysqli_close($conn);
?>


<!DOCTYPE html>
<html lang="en">
    <!-- Css file -->
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 30px;
            background: yellow;
        }

        nav {
            display: flex;
            justify-content: space-around;
            align-items: center;

        }

        nav a {
            color: #121212;
            text-decoration: none;
            font-size: 24px;
            font-weight: bold;
        }

        .container {
            max-width: 800px;
            margin: 100px auto;
        }

        .content {
            margin-bottom: 20px;
        }


table, th, td {
  border: 1px solid black;
border-collapse: collapse;
border-color: black;
}

form {
            margin-top: 20px;
        }

        form label {
            display: block;
            margin-bottom: 5px;
        }

        form input {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
background-color: yellow;
        }


        form button {
            background-color: #4caf50;
            color: white;
            padding: 10px 15px;
            border: none;
font-size: 20px;
            border-radius: 4px;
            cursor: pointer;
        }

        form button:hover {
            background-color: #45a049;
        }
    </style>
    <head>
        <title>Fast Travel</title>
        <link rel="stylesheet" type="text/css" href="style.css" />
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale= 1.0, user-scalable=no">
        
    </head>
    <body class="inner">
        <nav>
            <a href="index.php">Home</a>
            <a href="login.php">Account</a>
            <a href="contact.php">Contact</a>
        </nav>
        <div class="container">
            
<br>
<h1>Welcome, <?php echo $_SESSION["username"]; ?>! </h1>
            <h3>Update Information</h3>
            <form action="update_profile_process.php" method="post">
                <label for="email">New Email:</label>
                <input type="email" id="email" name="email" value="<?php echo $user_data['email']; ?>" required>
                <label for="phone">New Phone:</label>
                <input type="tel" id="phone" name="phone" value="<?php echo $user_data['phone']; ?>" required>
<br><br>
                <button type="submit">Make changes</button>
            </form>
<br><br>

            <!-- Profile info --> <?php if (!empty($user_data)): ?> <h4>Your Information</h4>
            <table>
                <tr>
                    <th>Username</th>
                    <td> <?php echo $user_data['username']; ?> </td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td> <?php echo $user_data['email']; ?> </td>
                </tr>
                <tr>
                    <th>Phone</th>
                    <td> <?php echo $user_data['phone']; ?> </td>
                </tr>

            </table><br><br>
<a href="customer_choice.php" class="button">Return to options</a> <?php else: ?> <p>User not found.</p> <?php endif; ?>

            </div>
    </body>
</html>