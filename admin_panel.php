<?php
session_start();
if (!isset($_SESSION["admin_id"])) {
    header("Location: admin_login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin Panel</title>
        <style>
            body {
                font-family: -apple-system, BlinkMacSystemFont, sans-serif;
                display: flex;
                align-items: center;
                justify-content: center;
                height: 100vh;
                margin: 0;
color: white;
                background-color: #121212;
            }

            button {
                cursor: pointer;
                font-size: 20px;
                border: none;
                border-radius: 8px;
                background: #B55400;
                color: #F4EEE0;
                width: 200px;
                height: 100px;
                transition: all 1s;
            }

            button+button {
                margin-left: 20px;
            }
        </style>
        <titleAdmin Panel</title>
        <script>
            function rcx() {
                window.location.href = 'add_tour.php';
            }

            function rsu() {
                window.location.href = 'modify_tour.php';
            }
        </script>
    </head>
    <body>
        <h2>Welcome, <?php echo $_SESSION["admin_username"]; ?>! </h2>
        <div>
            <button onclick="rcx()">ADD TOUR</button>
            <button onclick="rsu()">MODIFY TOUR</button>
        </div>
    </body>
</html>